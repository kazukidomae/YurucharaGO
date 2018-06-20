<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Obtaincard;

class Obtaincardlist extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'obtaincard:list {userID}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'obitaincardsデータベースの指定されたユーザのデータを取得';

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
        //obitaincardsデータベースの指定されたユーザのデータを取得
        $obitaincard = new Obtaincard();
        $userID = $this->argument("userID");
        $data = $obitaincard->userCardList($userID);
        echo $data;
    }
}
