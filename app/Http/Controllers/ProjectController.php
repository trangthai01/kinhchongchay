<?php

namespace App\Http\Controllers;
use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    private $PER_PAGE = 6;
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
    public function index(Request $request)
    {
        $query = Project::where('use_yn',true);
        $projects = $query->paginate( $this->PER_PAGE);
        
        if ($request->ajax()) {
            $view = view('layouts.layer.project_loop', compact('projects'))->render();
            $nav = '';
            if($projects->total() >  $this->PER_PAGE){
                $nav = '<div class="viewmore" id="pageProjectNav">'.
                            '<a href="javascript:;" rel="nofollow"><span class="fa-caret-down">Xem thêm</span></a>'.
                        '</div>';
            }
            return response()->json(['html' => $view, 'total' => $projects->total(), 'nav'=> $nav]);
        }
        return view('layouts.pages.projects',compact('projects'));
    }

}
