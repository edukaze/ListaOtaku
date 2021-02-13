<?php 

namespace App\Http\Controllers;

use Illuminate\Http\Resquest;


/**
 * 
 */
class SPAController extends Controller
{
	
	 public function home ()
	{
		# code...
		return  view('spa');
	}
}



 ?>