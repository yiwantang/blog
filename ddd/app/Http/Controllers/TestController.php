<?php 
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\route;

class TestController extends Controller
{
    public function test()
    {
    	$url = route('test');
    	print_r($url);
    }
}
