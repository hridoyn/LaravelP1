<?php

namespace App\Http\Controllers;

use App\Company;
use App\Package;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PackageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $packages= Package::all();
        return view('Packages.index',compact('packages'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $companies =DB::table('companies')->pluck('id');

        //foreach($companies as $value){
          //  echo $value;
        //}

        return view('packages.add',compact('companies'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         $this->validate($request,[
             'name'=>'required',
            'description'=>'required',
            'price'=>'required',
             'company_id'=>'required'

        ]);

         /*$package=new package();

                $package->name=$request->name;
                $package->description=$request->description;
                $package->price=$request->price;
                $package->company_id=$request->company_id;
                $package->save();*/

     Package::create($request->all());
        return redirect('/admin/packages');

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
        $package= Package::findorFail($id);
        return view('Packages.edit',compact('package'));
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
        $package=Package::findOrFail($id);
        $package->update($request->all());

        return redirect('/admin/packages');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $package=Package::findOrFail($id);
        $package->delete($id);
        return redirect('/admin/packages');
    }
}
