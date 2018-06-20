<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Obitaintrophy;

class Obtaintrophyslist extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'obtaintrophys:list {userID}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'obitaintrophysデータベースの指定されたユーザのデータを取得';

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
        //obitaintrophysデータベースの指定されたユーザのデータを取得
        $obitaintrophy = new Obitaintrophy();
        $userID = $this->argument("userID");
        $data = $obitaintrophy->userTrophyList($userID);
        echo $data;
    }
}
