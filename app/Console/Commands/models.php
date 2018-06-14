<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Card;

class models extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'models:card {prefectures}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'cardsデータベースの指定された都道府県のデータを取得';

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
        //cardsデータベースの指定された都道府県のデータを取得
        $card = new Card();
        $prefectures = $this->argument("prefectures");
        $data = $card->prefecturesCardList($prefectures);
        echo $data;
    }
}
