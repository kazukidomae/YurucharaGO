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
    protected $signature = 'obtaintrophys:list';

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
        $obitaintrophy = new Obitaintrophy();
        $data1 = $obitaintrophy->attributeCardMaster();
        $data2 = $obitaintrophy->attributeCardObtain();
        $data3 = $obitaintrophy->regionCardMaster();
        $data4 = $obitaintrophy->regionCardObtain();;

        print_r($data1);
        print_r($data2);
        print_r($data3);
        print_r($data4);
    }
}
