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

        if(session('view') !== null)
        {
            return view('front.index');
        }

        if($agent->isMobile())
        {
            return view('mobile.index');
        }

        return view('front.index');
    }

    public function about_us()
    {
    	$agent = new Agent;

        if(session('view') !== null)
        {
            return view('front.about_us');
        }

        if($agent->isMobile())
        {
            return view('mobile.about_us');
        }

        return view('front.about_us');
    }

    public function downloads()
    {
        $agent = new Agent;

        if(session('view') !== null)
        {
            return view('front.downloads');
        }

        if($agent->isMobile())
        {
            return view('mobile.download');
        }

    	return view('front.downloads');
    }

    public function sportsbooks()
    {

        $agent = new Agent;

        if(session('view') !== null)
        {
            return view('front.sportsbook');
        }

        if($agent->isMobile())
        {
            return view('mobile.sportsbook');
        }

    	return view('front.sportsbook');
    }

    public function live_casinos()
    {

        $agent = new Agent;

        if(session('view') !== null)
        {
            return view('front.live_casino');
        }

        if($agent->isMobile())
        {
            return view('mobile.live_casino');
        }

    	return view('front.live_casino');
    }

    public function slots()
    {

        $agent = new Agent;

        if(session('view') !== null)
        {
            return view('front.slot');
        }

        if($agent->isMobile())
        {
            return view('mobile.slots');
        }

    	return view('front.slot');
    }

    public function arcades()
    {

        $agent = new Agent;

        if(session('view') !== null)
        {
            return view('front.Arcade.arcade');
        }

        if($agent->isMobile())
        {
            return view('mobile.arcade');
        }
        
    	return view('front.Arcade.arcade');
    }

    public function game_live22()
    {
    	return view('front.Arcade.game-live22');
    }

    public function lottery()
    {

        $agent = new Agent;

        if(session('view') !== null)
        {
            return view('front.lottery');
        }

        if($agent->isMobile())
        {
            return view('mobile.lottery');
        }

    	return view('front.lottery');
    }

    public function promotions()
    {

        $agent = new Agent;

        if(session('view') !== null)
        {
            return view('front.promotion');
        }

        if($agent->isMobile())
        {
            return view('mobile.promotions');
        }

    	return view('front.promotion');
    }

    public function banking()
    {

        $agent = new Agent;

        if(session('view') !== null)
        {
            return view('front.banking');
        }

        if($agent->isMobile())
        {
            return view('mobile.banking');
        }

        return view('front.banking');

    }

    public function registration()
    {

        $agent = new Agent;

        if(session('view') !== null)
        {
            return view('mobile.registration');
        }

        if($agent->isMobile())
        {
            return view('mobile.registration');
        }

    }

    public function contact_us()
    {

        $agent = new Agent;

        if(session('view') !== null)
        {
            return view('front.contact_us');
        }

        if($agent->isMobile())
        {
            return view('mobile.contactus');
        }

    	return view('front.contact_us');
    }

    public function faq()
    {

        $agent = new Agent;

        if(session('view') !== null)
        {
            return view('front.faq');
        }

        if($agent->isMobile())
        {
            return view('mobile.faq');
        }

    	return view('front.faq');
    }

    public function tnc()
    {

        $agent = new Agent;

        if(session('view') !== null)
        {
            return view('front.tnc');
        }

        if($agent->isMobile())
        {
            return view('mobile.tnc');
        }

    	return view('front.tnc');
    }

}
