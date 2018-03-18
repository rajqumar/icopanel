<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\{Footer, Customize, Roadmap, Tokensale, Tokenstructure, Solutions, Goals, Features, Header, Background, About, Clients, Team};

class ViewController extends Controller{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function subscribers(){
        return view('pages.subscribers');
    }

    public function customize(){
        $customize = Customize::all();
        return view('pages.customize', ['customize' => $customize]);
    }

    public function team(){
        $team = Team::all();
        return view('pages.team', ['team' => $team]);
    }

    public function roadmap(){
        $roadmap = Roadmap::all();
        return view('pages.roadmap', ['roadmap' => $roadmap]);
    }

    public function footer(){
        $footer = Footer::all();
        return view('pages.footer', ['footer' => $footer]);
    }

    public function tokenstructure(){
        $tokenstructure = Tokenstructure::all();
        return view('pages.tokenstructure', ['tokenstructure' => $tokenstructure]);
    }

    public function tokensale(){
        $tokensale = Tokensale::all();
        return view('pages.tokensale', ['tokensale' => $tokensale]);
    }

    public function goals(){
        $goals = Goals::all();
        return view('pages.goals', ['goals' => $goals]);
    }

    public function features(){
        $features = Features::all();
        return view('pages.features', ['features' => $features]);
    }

    public function header(){
    	$header = Header::all();
    	return view('pages.header', ['header' => $header]);
    }

    public function background(){
    	$background = Background::all();
	    return view('pages.background', ['background' => $background]);
    }

    public function about(){
        $about = About::all();
        return view('pages.about', ['about' => $about]);
    }

    public function clients(){
        $clients = Clients::all();
        return view('pages.clients', ['clients' => $clients]);
    }
    
    public function solutions(){
        $solutions = Solutions::all();
        return view('pages.solutions', ['solutions' => $solutions]);
    }

}
