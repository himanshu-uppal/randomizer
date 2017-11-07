<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

use App\Website;
use Illuminate\Http\Request;
use Redirect;
use Illuminate\Http\RedirectResponse;
use DB;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;


    public function findWebsite(Request $request)
    {

    	$redirect_website= "";
    	
    	$random_website = Website::orderBy(DB::raw('RAND()'))->take(1)->get();
    	foreach ($random_website as $website) {
    		$redirect_website=$website->website;
    		//return $redirect_website;
    		
    		break;

    	}
    	//print_r($redirect_website);
    	//return redirect()->to($redirect_website);
    	return view('welcome')->with('redirect_website',$redirect_website);
    	//return redirect($redirect_website);

               

        

       

        
    }



}
