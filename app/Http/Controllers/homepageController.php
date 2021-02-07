<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Artesaos\SEOTools\Facades\SEOMeta;
class homepageController extends Controller
{
    function index(){
        SEOMeta::setTitle('Age Calculator Android app');
        $social_links_raw = DB::select('select * from social_links');
    
      return view(
        'welcome',
        [
          'social_links_raw' => $social_links_raw
   
        ]
      );
    }

 
     

    
}
