<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Obtaincard;

class Obtaincardfilter_Attribute extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'obtaincardfilter:Attribute {AttributeID}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = '取得カード・属性絞り込み';

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
        //obtaincardsデータベース指定されたユーザの情報を取得
        $obtaincard = new Obtaincard();
        $AttributeID = $this->argument("AttributeID");
        $data = $obtaincard->attributeFilter($attributeID);
        echo $data;
    }
}
