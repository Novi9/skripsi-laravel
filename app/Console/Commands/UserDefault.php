<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Str;

class UserDefault extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'create:user_default';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Menambahkan user default';

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
        $user = new \App\Model\User;
        $user->nama = 'Admin';
        $user->username = 'admin123';
        $user->password = bcrypt('admin123');
        $user->jabatan = 'admin';
        $user->remember_token = Str::random(60);
        $user->save();

        $user = new \App\Model\User;
        $user->nama = 'Direktur';
        $user->username = 'direktur123';
        $user->password = bcrypt('direktur123');
        $user->jabatan = 'direktur';
        $user->remember_token = Str::random(60);
        $user->save();

        $user = new \App\Model\User;
        $user->nama = 'Pelamar';
        $user->username = 'pelamar123';
        $user->password = bcrypt('pelamar123');
        $user->jabatan = 'pelamar';
        $user->remember_token = Str::random(60);
        $user->save();
    }
}
