<?php

namespace App\Http\Controllers;

use App\Models\MainDashboard;
use Illuminate\Http\Request;
use App\Models\projects;
use App\Models\User;

use Illuminate\Support\Str;
use Inertia\Inertia;
use Illuminate\Support\Facades\DB;

class MainDashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
       //dd($request);
        $uuid= $request->query('code');
            session(['uuid' =>  $uuid]);
        //      $menu = [
        //    'folder'=>'Projects',
        //    'folderlink'=>'projects_index',
        //    'title'=> 'Tests',
        //    'add'=>'Add Test',
        //    'link'=>'project_index/',
        //    'placeholder'=>'Test Name',
        //    'save'=>'store_mainsettings'
        // ];

        return Inertia::render("MainDashboardPage/Index",[
             'data'=>MainDashboard::where('code',$request->query('code'))->first(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        
         MainDashboard::create([
            'test_name'=>$request->folder_name,
            'uuid'=> session('uuid'),
            'user_id'=>auth()->user()->id,
            'status'=>1,
            'code'=>Str::upper(Str::random(10)),
            'headers'=>$request->Header_Settings,
            'warnings'=>$request->Warning_Settings,
            'images'=>$request->Image_Settings,
            'instructions'=>$request->Instructions,
              'footers'=>$request->Footer_Settings,
            
        ]);

    }

    /**
     * Display the specified resource.
     */
    public function show(MainDashboard $mainDashboard)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(MainDashboard $mainDashboard)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, MainDashboard $mainDashboard)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(MainDashboard $mainDashboard)
    {
        //
    }
}
