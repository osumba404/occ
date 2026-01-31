<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\County;
use App\Models\Subcounty;
use App\Models\Ward;
use App\Models\Institution;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function index(Request $request)
    {
        $users = User::with(['institution', 'pollingStation'])->paginate(20);
        $totalUsers = User::count();
        $recentUsers = User::with(['institution', 'pollingStation'])
            ->latest()
            ->paginate(25); // 25 rows per page for recent registrations
        
        // Geographic statistics
        $totalCounties = County::count();
        $totalConstituencies = Subcounty::count();
        $totalWards = Ward::count();
        $totalInstitutions = Institution::count();
        
        // User distribution by county
        $usersByCounty = User::selectRaw('count(*) as user_count, c.name as county_name')
            ->join('polling_stations as ps', 'users.polling_station_id', '=', 'ps.id')
            ->join('wards as w', 'ps.ward_id', '=', 'w.id')
            ->join('subcounties as sc', 'w.subcounty_code', '=', 'sc.iebc_code')
            ->join('counties as c', 'sc.county_code', '=', 'c.iebc_code')
            ->groupBy('c.id', 'c.name')
            ->orderBy('user_count', 'desc')
            ->limit(10)
            ->get();
            
        // User distribution by institution type
        $usersByInstitutionType = User::selectRaw('count(*) as user_count, i.category as institution_category')
            ->join('institutions as i', 'users.institution_id', '=', 'i.id')
            ->groupBy('i.category')
            ->orderBy('user_count', 'desc')
            ->get();
        
        return view('admin.index', compact(
            'users', 
            'totalUsers', 
            'recentUsers',
            'totalCounties',
            'totalConstituencies', 
            'totalWards',
            'totalInstitutions',
            'usersByCounty',
            'usersByInstitutionType'
        ));
    }

    public function users(Request $request)
    {
        $users = User::with(['institution', 'pollingStation'])->paginate(25);
        return view('admin.users', compact('users'));
    }

    public function showUser($id)
    {
        $user = User::with(['institution', 'pollingStation'])->findOrFail($id);
        return view('admin.user-details', compact('user'));
    }

    public function toggleAdmin($id)
    {
        $user = User::findOrFail($id);
        $user->is_admin = !$user->is_admin;
        $user->save();
        
        return back()->with('success', 'User admin status updated successfully.');
    }

    public function exportUsers($format)
    {
        $users = User::with(['institution', 'pollingStation.ward.subcounty.county.region'])
            ->get()
            ->map(function ($user) {
                return [
                    'National ID' => $user->national_id,
                    'Phone Number' => $user->phone_number,
                    'Surname' => $user->surname,
                    'First/Middle Name' => $user->first_middle_name,
                    'Institution' => $user->institution ? $user->institution->name : 'N/A',
                    'Institution Category' => $user->institution ? $user->institution->category : 'N/A',
                    'Institution Type' => $user->institution ? $user->institution->institution_type : 'N/A',
                    'Polling Station' => $user->pollingStation ? $user->pollingStation->name : 'N/A',
                    'Ward' => $user->pollingStation && $user->pollingStation->ward ? $user->pollingStation->ward->name : 'N/A',
                    'Constituency' => $user->pollingStation && $user->pollingStation->ward && $user->pollingStation->ward->subcounty ? $user->pollingStation->ward->subcounty->name : 'N/A',
                    'County' => $user->pollingStation && $user->pollingStation->ward && $user->pollingStation->ward->subcounty && $user->pollingStation->ward->subcounty->county ? $user->pollingStation->ward->subcounty->county->name : 'N/A',
                    'Region' => $user->pollingStation && $user->pollingStation->ward && $user->pollingStation->ward->subcounty && $user->pollingStation->ward->subcounty->county && $user->pollingStation->ward->subcounty->county->region ? $user->pollingStation->ward->subcounty->county->region->name : 'N/A',
                    'Account Type' => $user->is_admin ? 'Administrator' : 'Member',
                    'Registration Date' => $user->created_at->format('Y-m-d H:i:s'),
                ];
            });

        $filename = 'odm_members_' . date('Y-m-d_H-i-s');

        switch ($format) {
            case 'csv':
                return $this->exportCsv($users, $filename);
            case 'xlsx':
                return $this->exportXlsx($users, $filename);
            case 'pdf':
                return $this->exportPdf($users, $filename);
            case 'docx':
                return $this->exportDocx($users, $filename);
            default:
                return back()->with('error', 'Invalid export format');
        }
    }

    private function exportCsv($data, $filename)
    {
        $headers = [
            'Content-Type' => 'text/csv',
            'Content-Disposition' => 'attachment; filename="' . $filename . '.csv"',
        ];

        $callback = function() use ($data) {
            $file = fopen('php://output', 'w');
            
            // Add CSV header
            if (!empty($data)) {
                fputcsv($file, array_keys($data->first()));
            }
            
            // Add CSV rows
            foreach ($data as $row) {
                fputcsv($file, $row);
            }
            
            fclose($file);
        };

        return response()->stream($callback, 200, $headers);
    }

    private function exportXlsx($data, $filename)
    {
        // For now, redirect to CSV as XLSX requires additional packages
        return $this->exportCsv($data, $filename);
    }

    private function exportPdf($data, $filename)
    {
        // For now, redirect to CSV as PDF requires additional packages
        return $this->exportCsv($data, $filename);
    }

    private function exportDocx($data, $filename)
    {
        // For now, redirect to CSV as DOCX requires additional packages
        return $this->exportCsv($data, $filename);
    }
}
