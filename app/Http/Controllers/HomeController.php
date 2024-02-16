<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('welcome');
    }

    public function company()
    {
        return view('layouts.pages.company');
    }

    public function engineering()
    {
        return view('layouts.pages.engineering');
    }

    /** Company */
    public function companyProfile()
    {
        return view('layouts.pages.company.company-profile');
    }

    public function corporateValues()
    {
        return view('layouts.pages.company.corporate-values');
    }

    public function ourValuedClients(){
        return view('layouts.pages.company.our-valued-clients');
    }

    public function cuttingEdgeTechnology(){
        return view('layouts.pages.company.cutting-edge-technology');
    }
    
    /** Engineering */
    public function testing()
    {
        return view('layouts.pages.engineering.testing');
    }

    public function certificationsApprovals(){
        return view('layouts.pages.engineering.certifications-approvals');
    }

    public function engineeringVideos(){
        return view('layouts.pages.engineering.engineering-videos');
    }

    public function slidingDoorSystem(){
        return view('layouts.pages.engineering.applications.sliding-door-system');
    }

    public function pivotDoorSystem(){
        return view('layouts.pages.engineering.applications.pivot-door-system');
    }

    public function curtainWallSystem(){
        return view('layouts.pages.engineering.applications.curtain-wall-system');
    }
}
