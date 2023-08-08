<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

use App\Models\Group;
use App\Models\School;

class SchoolController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */


    //
    public function index()
    {
        return view('admin/schools/index');
    }
    public function apiIndex()
    {
        $res = School::orderBy('id', 'DESC')->get();
        return $res;
    }


    public function store(Request $request){
        $validated       =       $request->validate([
            'group_title' => 'required'
        ]);
        Group::create($validated);
        return response()->json('Data has been added');
    }


    public function update(Request $request, $groupid){
        $validated       =       $request->validate([
            'group_title' => 'required'
        ]);
        $group  =   Group::find($groupid);
        $group->update($validated);
        return response()->json('Data has been updated');
    }


    public function delete($id){
        $group  =   Group::find($id);
        $group->delete();
        return response()->json('Data has been deleted');
    }


}
