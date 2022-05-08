<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Backend\Branch;
use Illuminate\Http\Request;
use Illuminate\Support\Str;


class BranchController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function manage()
    {   
        $branches = Branch::orderby('id','asc')->get(); 
        return view('backend.pages.branches.manage',compact('branches'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.pages.branches.create');
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $branch = new Branch();

        $branch->name          = $request->name;
        $branch->bangla_name   = $request->bangla_name;
        $branch->slug          = str::slug($request->slug);
        $branch->address_line1 = $request->address_line1;
        $branch->address_line2 = $request->address_line2;
        $branch->email         = $request->email;
        $branch->phone         = $request->phone;
        $branch->status        = $request->status;

        $branch->save();

        return redirect()->route('branch.manage');


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $branch = Branch::find($id);

        if(!is_null($branch))
        {
            return view('backend.pages.branches.edit',compact('branch'));
        }
        else
        {
            return route('branch.manage');
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $branch = Branch::find($id);
        
        $branch->name          = $request->name;
        $branch->bangla_name   = $request->bangla_name;
        $branch->slug          = str::slug($request->slug);
        $branch->address_line1 = $request->address_line1;
        $branch->address_line2 = $request->address_line2;
        $branch->email         = $request->email;
        $branch->phone         = $request->phone;
        $branch->status        = $request->status;

        $branch->save();

        return redirect()->route('branch.manage');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        $branch = Branch::find($id);

        if(!is_null($branch))
        {
          $branch->delete();

          return redirect()->route('branch.manage');
        }

        
        
    }
}
