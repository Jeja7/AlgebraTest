<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request; /* u ovom servisu se nalaze sve sve sve infomracije o requestu */

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
		$bla = 'bla';
        return view('home');
    }

	public function aboutUs()
	{
		return view('about_us');
	}
}
