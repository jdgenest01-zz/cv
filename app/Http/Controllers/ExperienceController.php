<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Experience;

class ExperienceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $experience = Experience::all();
        return View('pages.admin_experience',['experience' => $experience]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    /*public function create()
    {

    }*/

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
          'start'       => 'date',
          'end'         => 'date',
          'institution' => 'required|string',
          'title'       => 'required|string',
          'desc'        => 'required|string',
          'logo'        => 'mimes:jpeg,bmp,png'
        ]);
        Experience::create([
          'start'       => $request->start,
          'end'         => $request->end,
          'institution' => $request->institution,
          'title'       => $request->title,
          'desc'        => $request->desc,
          'logo'        => $request->logo
        ]);
        return redirect('/experience');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    /*public function show($id)
    {
        //
    }*/

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
