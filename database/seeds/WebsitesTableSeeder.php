<?php

use Illuminate\Database\Seeder;

use App\Website;

class WebsitesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $request= new Website;  
        $request->id=1;
        $request->website='www.google.com';      
        $request->save();
    }
}
