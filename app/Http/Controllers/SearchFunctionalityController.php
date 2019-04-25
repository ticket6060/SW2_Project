<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Events ;
use Illuminate\Support\Facades\Input ;

class SearchFunctionalityController extends Controller
{
    //
    	public function index(){
		$q = Input::get( 'q' );
		if($q != ""){
			$user = Events::where('EventName', 'LIKE' , '%' . $q . '%')->orWhere('EventType' , 'LIKE' , '%' . $q . '%')->get();
        if(count($user) > 0)
            return view('search')->withDetails($user)->withQuery($q);
	    }
		return view('search')->withMessage("No Data Found !!");
	    }
}