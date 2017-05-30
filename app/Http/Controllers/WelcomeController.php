<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//use Debugbar;

class WelcomeController extends Controller
{
	public $styles = ['grid', 'block', 'list'];

    public function index(Request $request)
    {
        $info = file_get_contents(public_path('images/shoes/shoes.json'));
        $json_info = json_decode($info, TRUE);
        $images = $json_info['index-images'];
        $style = 'grid';

        if($request->has('style') && in_array($request->style, $this->styles))
        {
        	$style = $request->style;
        }

        foreach ($images as $key => $image) {
        	//Debugbar::info($image);
        }
        
    	return view('welcome.index', [
    		'images' => $images,
    		'style' => $style
    	]);
    }
}
