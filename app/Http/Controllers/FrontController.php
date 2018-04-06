<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Jenssegers\Agent\Agent;

class FrontController extends Controller
{

	public function __construct()
    {
        $this->middleware('referral');
    }

    public function index()
    {
    	$agent = new Agent;

        if($agent->isMobile())
        {
            return 'mobile';
        }

        return view('front.index');
    }

    public function downloads()
    {
        $agent = new Agent;

        if($agent->isMobile())
        {
            return 'mobile';
        }
        
    	return view('front.downloads');
    }

    public function sportsbooks()
    {
    	return view('front.sportsbook');
    }

    public function live_casinos()
    {
    	return view('front.live_casino');
    }

    public function slots()
    {
    	return view('front.slot');
    }

    public function arcades()
    {
    	return view('front.Arcade.arcade');
    }

    public function game_live22()
    {
    	return view('front.Arcade.game-live22');
    }

    public function lottery()
    {
    	return view('front.lottery');
    }

    public function promotions()
    {
    	return view('front.promotion');
    }

    public function contact_us()
    {
    	return view('front.contact_us');
    }

}
