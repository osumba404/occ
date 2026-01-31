<?php

namespace App\Http\Controllers;

use App\Models\Institution;
use App\Models\Region;
use App\Models\County;
use App\Models\Subcounty;
use App\Models\Ward;
use App\Models\User;
use App\Models\PollingStation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class UssdController extends Controller
{
    // USSD session storage (in production, use Redis or database)
    private static $sessions = [];

    public function handleUssd(Request $request)
    {
        $sessionId = $request->input('sessionId');
        $phoneNumber = $request->input('phoneNumber');
        $text = $request->input('text');
        $serviceCode = $request->input('serviceCode');

        Log::info('USSD Request', [
            'sessionId' => $sessionId,
            'phoneNumber' => $phoneNumber,
            'text' => $text,
            'serviceCode' => $serviceCode
        ]);

        // Get or create session
        $session = $this->getOrCreateSession($sessionId, $phoneNumber);
        
        // Process USSD input
        $response = $this->processUssdInput($session, $text);
        
        // Update session
        $this->updateSession($sessionId, $session);

        return response($response, 200, [
            'Content-Type' => 'text/plain',
            'Freeflow' => $session['end'] ? 'FB' : 'FC'
        ]);
    }

    private function getOrCreateSession($sessionId, $phoneNumber)
    {
        if (!isset(self::$sessions[$sessionId])) {
            self::$sessions[$sessionId] = [
                'phone_number' => $phoneNumber,
                'step' => 'welcome',
                'data' => [],
                'end' => false
            ];
        }
        return self::$sessions[$sessionId];
    }

    private function updateSession($sessionId, $session)
    {
        self::$sessions[$sessionId] = $session;
    }

    private function processUssdInput($session, $text)
    {
        $input = trim($text);
        
        // Handle different steps
        switch ($session['step']) {
            case 'welcome':
                return $this->handleWelcome($session, $input);
            
            case 'menu':
                return $this->handleMenu($session, $input);
            
            case 'registration':
                return $this->handleRegistration($session, $input);
            
            case 'national_id':
                return $this->handleNationalId($session, $input);
            
            case 'phone':
                return $this->handlePhone($session, $input);
            
            case 'names':
                return $this->handleNames($session, $input);
            
            case 'region':
                return $this->handleRegion($session, $input);
            
            case 'county':
                return $this->handleCounty($session, $input);
            
            case 'constituency':
                return $this->handleConstituency($session, $input);
            
            case 'ward':
                return $this->handleWard($session, $input);
            
            case 'polling_station':
                return $this->handlePollingStation($session, $input);
            
            case 'institution':
                return $this->handleInstitution($session, $input);
            
            case 'password':
                return $this->handlePassword($session, $input);
            
            case 'confirm':
                return $this->handleConfirm($session, $input);
            
            default:
                return $this->handleWelcome($session, $input);
        }
    }

    private function handleWelcome($session, $input)
    {
        $session['step'] = 'menu';
        return "CON Welcome to ODM Comrades Chapter!\n1. Register as Member\n2. Check Registration Status\n3. Exit";
    }

    private function handleMenu($session, $input)
    {
        switch ($input) {
            case '1':
                $session['step'] = 'registration';
                return "CON ODM Comrades Chapter Registration\n\nPlease enter your National ID number:";
            
            case '2':
                return $this->checkRegistrationStatus($session);
            
            case '3':
                $session['end'] = true;
                return "END Thank you for using ODM Comrades Chapter. Goodbye!";
            
            default:
                return "CON Invalid choice. Please try again:\n1. Register as Member\n2. Check Registration Status\n3. Exit";
        }
    }

    private function handleRegistration($session, $input)
    {
        if (empty($input)) {
            return "CON Please enter your National ID number:";
        }
        
        // Validate National ID
        if (!is_numeric($input) || strlen($input) < 6) {
            return "CON Invalid National ID. Please enter a valid National ID number:";
        }
        
        // Check if already registered
        if (User::where('national_id', $input)->exists()) {
            return "END You are already registered with ODM Comrades Chapter. Dial *123# to access your account.";
        }
        
        $session['data']['national_id'] = $input;
        $session['step'] = 'names';
        return "CON Please enter your full name (Surname First Middle):";
    }

    private function handleNationalId($session, $input)
    {
        // This method is now handled in handleRegistration
        return $this->handleRegistration($session, $input);
    }

    private function handlePhone($session, $input)
    {
        // Phone is already captured from USSD request
        $session['data']['phone_number'] = $session['phone_number'];
        $session['step'] = 'region';
        return $this->handleRegion($session, '');
    }

    private function handleNames($session, $input)
    {
        if (empty($input)) {
            return "CON Please enter your full name (Surname First Middle):";
        }
        
        $names = explode(' ', $input);
        if (count($names) < 2) {
            return "CON Please enter at least Surname and First name:\nExample: Osumba Evans Atula";
        }
        
        $session['data']['surname'] = $names[0];
        $session['data']['first_middle_name'] = implode(' ', array_slice($names, 1));
        $session['step'] = 'region';
        
        return $this->showRegionOptions();
    }

    private function showRegionOptions()
    {
        $regions = Region::orderBy('name')->get();
        $response = "CON Select your Region:\n";
        
        foreach ($regions as $index => $region) {
            $response .= ($index + 1) . ". " . $region->name . "\n";
        }
        
        return $response;
    }

    private function handleRegion($session, $input)
    {
        if (empty($input)) {
            return $this->showRegionOptions();
        }
        
        $regions = Region::orderBy('name')->get();
        $index = (int)$input - 1;
        
        if (!isset($regions[$index])) {
            return "CON Invalid choice. Please select a valid region:\n" . $this->showRegionOptions();
        }
        
        $session['data']['region_id'] = $regions[$index]->id;
        $session['step'] = 'county';
        
        return $this->showCountyOptions($regions[$index]->id);
    }

    private function showCountyOptions($regionId)
    {
        $counties = County::where('region_code', $regionId)->orderBy('name')->get();
        $response = "CON Select your County:\n";
        
        foreach ($counties as $index => $county) {
            $response .= ($index + 1) . ". " . $county->name . "\n";
        }
        
        return $response;
    }

    private function handleCounty($session, $input)
    {
        if (empty($input)) {
            return $this->showCountyOptions($session['data']['region_id']);
        }
        
        $counties = County::where('region_code', $session['data']['region_id'])->orderBy('name')->get();
        $index = (int)$input - 1;
        
        if (!isset($counties[$index])) {
            return "CON Invalid choice. Please select a valid county:\n" . $this->showCountyOptions($session['data']['region_id']);
        }
        
        $session['data']['county_id'] = $counties[$index]->id;
        $session['step'] = 'constituency';
        
        return $this->showConstituencyOptions($counties[$index]->iebc_code);
    }

    private function showConstituencyOptions($countyCode)
    {
        $constituencies = Subcounty::where('county_code', $countyCode)->orderBy('name')->get();
        $response = "CON Select your Constituency:\n";
        
        foreach ($constituencies as $index => $constituency) {
            $response .= ($index + 1) . ". " . $constituency->name . "\n";
        }
        
        return $response;
    }

    private function handleConstituency($session, $input)
    {
        if (empty($input)) {
            return $this->showConstituencyOptions($session['data']['county_id']);
        }
        
        $county = County::find($session['data']['county_id']);
        $constituencies = Subcounty::where('county_code', $county->iebc_code)->orderBy('name')->get();
        $index = (int)$input - 1;
        
        if (!isset($constituencies[$index])) {
            return "CON Invalid choice. Please select a valid constituency:\n" . $this->showConstituencyOptions($county->iebc_code);
        }
        
        $session['data']['constituency_id'] = $constituencies[$index]->id;
        $session['step'] = 'ward';
        
        return $this->showWardOptions($constituencies[$index]->iebc_code);
    }

    private function showWardOptions($constituencyCode)
    {
        $wards = Ward::where('subcounty_code', $constituencyCode)->orderBy('name')->get();
        $response = "CON Select your Ward:\n";
        
        foreach ($wards as $index => $ward) {
            $response .= ($index + 1) . ". " . $ward->name . "\n";
        }
        
        return $response;
    }

    private function handleWard($session, $input)
    {
        if (empty($input)) {
            $constituency = Subcounty::find($session['data']['constituency_id']);
            return $this->showWardOptions($constituency->iebc_code);
        }
        
        $constituency = Subcounty::find($session['data']['constituency_id']);
        $wards = Ward::where('subcounty_code', $constituency->iebc_code)->orderBy('name')->get();
        $index = (int)$input - 1;
        
        if (!isset($wards[$index])) {
            return "CON Invalid choice. Please select a valid ward:\n" . $this->showWardOptions($constituency->iebc_code);
        }
        
        $session['data']['ward_id'] = $wards[$index]->id;
        $session['step'] = 'polling_station';
        
        return "CON Enter your Polling Station name:";
    }

    private function handlePollingStation($session, $input)
    {
        if (empty($input)) {
            return "CON Enter your Polling Station name:";
        }
        
        $session['data']['polling_station_name'] = $input;
        $session['step'] = 'institution';
        
        return $this->showInstitutionOptions();
    }

    private function showInstitutionOptions()
    {
        $institutions = Institution::orderBy('name')->take(10)->get(); // Limit to first 10 for USSD
        $response = "CON Select your Institution:\n";
        
        foreach ($institutions as $index => $institution) {
            $response .= ($index + 1) . ". " . $institution->name . "\n";
        }
        
        $response .= "11. Other (Enter name)";
        
        return $response;
    }

    private function handleInstitution($session, $input)
    {
        if (empty($input)) {
            return $this->showInstitutionOptions();
        }
        
        if ($input == '11') {
            $session['step'] = 'custom_institution';
            return "CON Enter your Institution name:";
        }
        
        $institutions = Institution::orderBy('name')->take(10)->get();
        $index = (int)$input - 1;
        
        if (!isset($institutions[$index])) {
            return "CON Invalid choice. Please select a valid institution:\n" . $this->showInstitutionOptions();
        }
        
        $session['data']['institution_id'] = $institutions[$index]->id;
        $session['step'] = 'password';
        
        return "CON Set your 4-digit PIN for future access:";
    }

    private function handlePassword($session, $input)
    {
        if (empty($input)) {
            return "CON Set your 4-digit PIN for future access:";
        }
        
        if (!is_numeric($input) || strlen($input) != 4) {
            return "CON PIN must be 4 digits. Please enter your 4-digit PIN:";
        }
        
        $session['data']['password'] = bcrypt($input);
        $session['step'] = 'confirm';
        
        return $this->showConfirmation($session);
    }

    private function handleCustomInstitution($session, $input)
    {
        if (empty($input)) {
            return "CON Enter your Institution name:";
        }
        
        // Create new institution
        $institution = Institution::create([
            'name' => $input,
            'category' => 'Other',
            'institution_type' => 'Unknown',
            'parent_ministry' => 'Other',
            'location' => 'Unknown',
            'active' => true
        ]);
        
        $session['data']['institution_id'] = $institution->id;
        $session['step'] = 'password';
        
        return "CON Set your 4-digit PIN for future access:";
    }

    private function showConfirmation($session)
    {
        $data = $session['data'];
        $ward = Ward::find($data['ward_id']);
        $institution = Institution::find($data['institution_id']);
        
        return "CON Please confirm your details:\n\nName: {$data['surname']} {$data['first_middle_name']}\nID: {$data['national_id']}\nWard: {$ward->name}\nInstitution: {$institution->name}\n\n1. Confirm & Register\n2. Edit Details\n3. Cancel";
    }

    private function handleConfirm($session, $input)
    {
        switch ($input) {
            case '1':
                return $this->completeRegistration($session);
            
            case '2':
                $session['step'] = 'welcome';
                return "CON Registration cancelled. Start again?\n1. Yes\n2. No";
            
            case '3':
                $session['end'] = true;
                return "END Registration cancelled. Thank you for using ODM Comrades Chapter.";
            
            default:
                return $this->showConfirmation($session);
        }
    }

    private function completeRegistration($session)
    {
        try {
            $data = $session['data'];
            
            // Create polling station
            $pollingStation = PollingStation::create([
                'ward_id' => $data['ward_id'],
                'name' => $data['polling_station_name'],
                'iebc_code' => rand(1000, 9999),
                'active' => true
            ]);
            
            // Create user
            $user = User::create([
                'national_id' => $data['national_id'],
                'phone_number' => $data['phone_number'],
                'surname' => $data['surname'],
                'first_middle_name' => $data['first_middle_name'],
                'institution_id' => $data['institution_id'],
                'polling_station_id' => $pollingStation->id,
                'password' => $data['password'],
                'is_admin' => false
            ]);
            
            $session['end'] = true;
            
            return "END Registration successful! Welcome to ODM Comrades Chapter. Your membership ID is: {$user->id}. Dial *123# to access your account.";
            
        } catch (\Exception $e) {
            Log::error('USSD Registration Error', [
                'error' => $e->getMessage(),
                'session_data' => $session['data']
            ]);
            
            $session['end'] = true;
            return "END Registration failed. Please try again later or contact support.";
        }
    }

    private function checkRegistrationStatus($session)
    {
        $user = User::where('phone_number', $session['phone_number'])->first();
        
        if ($user) {
            $session['end'] = true;
            return "END You are registered with ODM Comrades Chapter. Membership ID: {$user->id}. Status: Active.";
        } else {
            $session['end'] = true;
            return "END You are not yet registered. Dial *123# to register as a member.";
        }
    }
}
