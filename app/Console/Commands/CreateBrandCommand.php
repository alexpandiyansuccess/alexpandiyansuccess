<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Brands;
use App\Http\Resources\BrandResource;
use Illuminate\Support\Facades\Validator;

class CreateBrandCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'create:brand';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create Brand';

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
     * @return int
     */
    public function handle()
    {
        // $this->info("hi alex");

        $brand_name=$this->ask("Enter Brand Name");
        $cost=$this->ask("Enter Brand Cost");

        $validator = Validator::make([
            'brand_name' => $brand_name,
            'cost' => $cost,
            
        ], [
            'brand_name' => ['required'],
            'cost' => ['required','int'],
            
        ]);
        if ($validator->fails()) {
            $this->error('Brand not created');
        
            foreach ($validator->errors()->all() as $error) {
                $this->error($error);
            }
            return 1;
        }
// dd($validator);
      
        $addbrand = Brands::create(['brand_name' => $brand_name,'cost' => $cost]);
    
        if($addbrand){
            $this->info("Brand added successfully !");
        }else{
            $this->info("Something went to wrong !");
        }
       
    }
}
