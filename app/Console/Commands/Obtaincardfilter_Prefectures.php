<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Obtaincard;

class Obtaincardfilter_Prefectures extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'obtaincardfilter:Prefectures {PrefecturesID}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = '取得カード都道府県絞り込み';

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
        $PrefecturesID = $this->argument("PrefecturesID");
        echo $PrefecturesID;
    }
}
