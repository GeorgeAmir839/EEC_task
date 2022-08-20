<?php

namespace App\Console\Commands;
use App\Models\Product;

use Illuminate\Console\Command;

class SearchCheapestProduct extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'product:search-cheapest';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $product_id = $this->ask('Enter product id');
        $product = Product::find($product_id);
        // return $this->info($product->title . ' cheapest price is ' . $product->price);
        return $this->info($product->toJson() . ' cheapest price is ' . $product->pharmacies->sortBy('profit_margin')->take(5)->toJson());
    }
}
