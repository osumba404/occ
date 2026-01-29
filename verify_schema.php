<?php

require __DIR__ . '/vendor/autoload.php';

$app = require __DIR__ . '/bootstrap/app.php';

$kernel = $app->make(Illuminate\Contracts\Console\Kernel::class);
$kernel->bootstrap();

use App\Models\Region;
use App\Models\County;
use App\Models\Subcounty;
use App\Models\Ward;
use App\Models\PollingStation;
use App\Models\Institution;
use App\Models\User;

try {
    echo "Creating Region...\n";
    $region = Region::create(['name' => 'Nairobi']);

    echo "Creating County...\n";
    $county = County::create([
        'region_id' => $region->id,
        'name' => 'Nairobi City',
        'iebc_code' => 47,
        'active' => true
    ]);

    echo "Creating Subcounty...\n";
    $subcounty = Subcounty::create([
        'county_id' => $county->id,
        'name' => 'Westlands',
        'iebc_code' => 101,
        'active' => true
    ]);

    echo "Creating Ward...\n";
    $ward = Ward::create([
        'subcounty_id' => $subcounty->id,
        'name' => 'Kitisuru',
        'iebc_code' => 1011,
        'active' => true
    ]);

    echo "Creating Polling Station...\n";
    $station = PollingStation::create([
        'ward_id' => $ward->id,
        'name' => 'Kitisuru Primary School',
        'iebc_code' => 1011001,
        'active' => true,
        'last_verified_at' => now()
    ]);

    echo "Creating Institution...\n";
    $institution = Institution::create([
        'kuccps_code' => 'K12345',
        'name' => 'University of Nairobi',
        'type' => 'University',
        'active' => true,
        'last_synced_at' => now()
    ]);

    echo "Creating User (Normal)...\n";
    $user = User::create([
        'phone_number' => '+254700000000',
        'surname' => 'Osumba',
        'first_middle_name' => 'Developer',
        'institution_id' => $institution->id,
        'polling_station_id' => $station->id,
        'is_admin' => false
    ]);

    echo "Creating User (Admin)...\n";
    $admin = User::create([
        'phone_number' => '+254711111111',
        'surname' => 'Admin',
        'first_middle_name' => 'Super',
        'institution_id' => $institution->id,
        'polling_station_id' => $station->id,
        'is_admin' => true
    ]);

    echo "VERIFICATION SUCCESSFUL: All tables and relationships working correctly.\n";

} catch (\Exception $e) {
    echo "VERIFICATION FAILED: " . $e->getMessage() . "\n";
    exit(1);
}
