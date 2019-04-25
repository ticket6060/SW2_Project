<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;
use App\Events ;
//use App\Http\Request;
use Illuminate\Support\Facades\Input ;
class DataController extends Controller
{
      public function index(){
      	$tasks = Events::orderby('id','asc')->get();
      	return view('index')->with('storedtasks',$tasks);
	    }
     public function concert(){
      	$tasks = Events::orderby('id','asc')->get();
      	return view('Concerts')->with('storedtasks',$tasks);
	    }
	    public function movies(){
      	$tasks = Events::orderby('id','asc')->get();
      	return view('Movies')->with('storedtasks',$tasks);
	    }
	   public function Theater(){
      	$tasks = Events::orderby('id','asc')->get();
      	return view('Theater')->with('storedtasks',$tasks);
	    }
      public function details(){
            $tasks = Events::orderby('id','asc')->get();
            return view('product-detail')->with('storedtasks',$tasks);
          }
      }
