<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Excel;

class ExcelController extends Controller
{
    public function store(Request $request)
    {
    	Excel::create('Filename', function($excel) {

		    // Set the title
		    $excel->setTitle('Our new awesome title');

		    // Chain the setters
		    $excel->setCreator('Maatwebsite')
		          ->setCompany('Maatwebsite');

		    // Call them separately
		    $excel->setDescription('A demonstration to change the file properties');
		});

		return response()->json(array(
			'status' => 'success'
		));
    }
}
