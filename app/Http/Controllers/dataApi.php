<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;


use Illuminate\Http\Request;

class dataApi extends Controller
{
    //

    public function getData(Request $req)
    {
        $version_control_raw = DB::select('select * from main');
        $key=$version_control_raw[0]->key;
       /*
        $rules=array(
            "auth"=>"required"
        );
        $validator=Validator::make($req->all(),$rules);
        if($validator->fails()){
            return "error";
        }else{
            if($key==($req->auth)){
                return ["key"=>"$key"];
            }else{
                echo "ched";
            }
   
            
        }
        */
        $update=$version_control_raw[0]->update;
        $version=$version_control_raw[0]->version;
        $link=$version_control_raw[0]->link;
        $forceupdate=$version_control_raw[0]->forceupdate;
        return ["update"=>"$update","version"=>"$version","link"=>"$link","forceupdate"=>"$forceupdate"];
    }
}
