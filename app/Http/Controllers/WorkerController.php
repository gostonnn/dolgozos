<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\worker;
use DB;

class WorkerController extends Controller
{
    public function addWorker() {
 
        return view( "add-worker" );
    }

    public function storeWorker( Request $request ) {

        $worker = new worker;
 
        $worker->name = $request->name;
        $worker->city = $request->city;
        $worker->borndate = $request->borndate;
        $worker->salary = $request->salary;
 
        $worker->save();

        $request->session()->flash( "success", "Kiírás sikeres" );
        return redirect( "/uj-dolgozo" );
        
    }

    public function getWorker(){

        $workers = DB::table("workers")->where("id",4)->select("name","city","borndate","salary as fizetes",)->first();

        echo"<pre>";
        print_r($workers);
    }
}
