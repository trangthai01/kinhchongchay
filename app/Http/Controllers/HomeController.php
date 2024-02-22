<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use WebDevEtc\BlogEtc\Services\PostsService;
use App\Models\Certification;
use App\Models\Application;
class HomeController extends Controller
{
    /** @var PostsService */
    private $postsService;
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(PostsService $postsService)
    {
        //$this->middleware('auth');
        $this->postsService = $postsService;
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $latest_news = $this->postsService->indexPaginated(9);
        return view('welcome', compact('latest_news'));
    }

    public function company()
    {
        return view('layouts.pages.company');
    }

    public function products()
    {
        return view('layouts.pages.products');
    }

    public function engineering()
    {
        return view('layouts.pages.engineering');
    }

    public function contact()
    {
        return view('layouts.pages.contact');
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
        $certifications = Certification::all();
        return view('layouts.pages.engineering.certifications-approvals',compact('certifications'));
    }

    public function engineeringVideos(){
        return view('layouts.pages.engineering.engineering-videos');
    }

    public function slidingDoorSystem(){
        $application = Application::where('id', '2')->first();
        return view('layouts.pages.engineering.applications.sliding-door-system', compact('application'));
    }

    public function pivotDoorSystem(){
        $application = Application::where('id', '1')->first();
        return view('layouts.pages.engineering.applications.pivot-door-system', compact('application'));
    }

    public function curtainWallSystem(){
        $application = Application::where('id', '3')->first();
        return view('layouts.pages.engineering.applications.curtain-wall-system', compact('application'));
    }
}
