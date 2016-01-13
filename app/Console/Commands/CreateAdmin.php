<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\User;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission; 

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
    protected $description = 'Create Admin';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $admin = User::create([
            'name' => 'admin', 
            'email' => 'admin@admin.com',
            'password' => bcrypt('password'),
            'created_at' => date("Y-m-d"),
            'updated_at' => date("Y-m-d")
        ]);

        $role = Role::create(['name' => 'admin']);

        $admin->assignRole('admin');
    }
}
