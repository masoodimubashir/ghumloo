<?php

namespace App\Console\Commands;

use App\Models\Admin;
use Illuminate\Console\Command;

class CreateAdmin extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:create-admin';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Created An Admin';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $admin = new Admin();
        $admin->name = 'admin';
        $admin->email = 'admin@gmail.com';
        $admin->password = bcrypt('admin1');
        $admin->save();
        $this->info('Admin user created successfully!');
        return true;
    }
}
