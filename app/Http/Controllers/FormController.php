<?php

namespace GMLBoxing\Http\Controllers;
use GMLBoxing\Member;
use Illuminate\Http\Request;

class FormController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('form.form');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $member = new Member();

        $file = $request->file('avatar');
        $nameFile = time().$file->getClientOriginalName();
        $member->avatar = $nameFile;
        $file->move(public_path().'/images/',$nameFile);

        $member->name = $request->input('name');
        $member->lastName = $request->input('lastName');
        $member->tutorName = $request->input('tutorName');
        $member->lastNameTutor = $request->input('lastNameTutor');
        $member->dateBirth = $request->input('dateBirth');
        $member->weight = $request->input('weight');
        $member->height = $request->input('height');
        $member->paymentDate = $request->input('paymentDate');
        $member->homePhone = $request->input('homePhone');
        $member->movilPhone = $request->input('movilPhone');
        $member->bloodType = $request->input('bloodType');
        $member->save();
        return 'Saved';
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
