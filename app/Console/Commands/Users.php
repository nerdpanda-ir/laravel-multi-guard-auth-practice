<?php

namespace App\Console\Commands;

use App\Models\User;
use Illuminate\Console\Command;

class Users extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'users';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'show all users !!!';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle():void
    {
        User::all();
    }
}
