<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Card;

class Carddetail extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'card:detail {cardID}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'cardsデータベースのカード詳細を取得';

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
        $cardID = $this->argument("cardID");
        $data = $card->cardDetail($cardID);
        echo $data;
    }
}
