<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class PagesController extends Controller {

    public function home(){
        return view('pages.home');
    }

    public function about()
    {
//        Passing variable
//        $name = 'Pavel Garchenko';
//        return view('pages.about')->with('name', $name);

//        Passing an associative array
//        return view('pages.about')->with([
//            'first' => 'Pavel',
//            'last' => 'Garchenko'
//        ]);

//        Passing php 'compact' function that will translate variables into associative array
            $title = 'ServiceHunt';
            $people = [
                'Anton', 'Anna', 'Alex', 'Pavel'
            ];

        return view('pages.about', compact('title', 'people'));

	}

    public function contact()
    {
        return view('pages.contact');

    }


}
