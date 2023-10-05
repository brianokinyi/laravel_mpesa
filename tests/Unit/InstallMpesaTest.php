<?php

namespace Gathuku\Mpesa\Tests\Unit;

use Gathuku\Mpesa\Tests\BaseTest;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Artisan;

class InstallMpesaTest extends BaseTest
{
    public function the_install_command_copies_a_the_configuration()
    {
        // remove if exists
        if (File::exists(config_path('daraja.php'))) {
            unlink(config_path('daraja.php'));
        }

        $this->assertFalse(File::exists(config_path('daraja.php')));

        Artisan::call('daraja:install');

        $this->assertTrue(File::exists(config_path('daraja.php')));
    }
}
