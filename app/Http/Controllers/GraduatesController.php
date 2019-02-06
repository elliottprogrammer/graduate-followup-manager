<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Graduate;
use App\Note;

class GraduatesController extends Controller
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
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $graduates = Graduate::orderBy('graduation_date', 'desc')->get();
        
        return view('graduate.index')->with('graduates', $graduates);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('graduate.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->graduation_date = ($request->filled('graduation_date') ? Carbon::parse($request->graduation_date) : null);
        $request->date_of_birth = ($request->filled('date_of_birth') ? Carbon::parse($request->date_of_birth) : null);
        $request->last_contacted = ($request->filled('last_contacted') ? Carbon::parse($request->last_contacted) : null);
        $request->next_call_date = ($request->filled('next_call_date') ? Carbon::parse($request->next_call_date) : null);

        $this->validate($request, [
            'first_name' => 'required',
            'last_name' => 'required',
            'email1' => 'email',
            'phone1' => 'required',
            'gender' => 'required',
            'graduation_date' => 'required',
            'status' => 'required'
        ]);

        $graduate = new Graduate;
        $graduate->first_name = $request->input('first_name');
        $graduate->last_name = $request->input('last_name');
        $graduate->street_address = $request->input('street_address');
        $graduate->city = $request->input('city');
        $graduate->state = $request->input('state');
        $graduate->zip = $request->input('zip');
        $graduate->phone1 = $request->input('phone1');
        $graduate->alt_phone1 = $request->input('alt_phone1');
        $graduate->alt_phone2 = $request->input('alt_phone2');
        $graduate->email1 = $request->input('email1');
        $graduate->gender = $request->gender;
        $graduate->graduation_date = $request->graduation_date;
        $graduate->date_of_birth = $request->date_of_birth;
        $graduate->condition = $request->input('condition');
        $graduate->last_contacted = $request->last_contacted;
        $graduate->next_call_date = $request->next_call_date;
        $graduate->additional_notes = $request->input('additional_notes');
        $graduate->status = $request->input('status');
        $graduate->fam_first_name = $request->input('fam_first_name');
        $graduate->fam_last_name = $request->input('fam_last_name');
        $graduate->fam_relationship = $request->input('fam_relationship');
        $graduate->fam_street_address = $request->input('fam_street_address');
        $graduate->fam_city = $request->input('fam_city');
        $graduate->fam_state = $request->input('fam_state');
        $graduate->fam_zip = $request->input('fam_zip');
        $graduate->fam_phone1 = $request->input('fam_phone1');
        $graduate->fam_alt_phone1 = $request->input('fam_alt_phone1');
        $graduate->fam_alt_phone2 = $request->input('fam_alt_phone2');
        $graduate->fam_email1 = $request->input('fam_email1');
        $graduate->fam_gender = $request->input('fam_gender');
        $graduate->fam_additional_notes = $request->input('fam_additional_notes');

        $graduate->save();

        return redirect('/')->with('success', $request->gender);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Graduate  $graduate
     * @return \Illuminate\Http\Response
     */
    public function show(Graduate $graduate)
    {
        return view('graduate.show')->with('graduate', $graduate)->with('notes', $graduate->notes);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Graduate  $graduate
     * @return \Illuminate\Http\Response
     */
    public function edit(Graduate $graduate)
    {
        return view('graduate.edit')->with('graduate', $graduate);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Graduate  $graduate
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Graduate $graduate)
    {
        $request->graduation_date = ($request->filled('graduation_date') ? Carbon::parse($request->graduation_date) : null);
        $request->date_of_birth = ($request->filled('date_of_birth') ? Carbon::parse($request->date_of_birth) : null);
        $request->last_contacted = ($request->filled('last_contacted') ? Carbon::parse($request->last_contacted) : null);
        $request->next_call_date = ($request->filled('next_call_date') ? Carbon::parse($request->next_call_date) : null);

        $this->validate($request, [
            'first_name' => 'required',
            'last_name' => 'required',
            'email1' => 'email',
            'phone1' => 'required',
            'gender' => 'required',
            'graduation_date' => 'required',
            'status' => 'required'
        ]);
        
        $graduate->first_name = $request->input('first_name');
        $graduate->last_name = $request->input('last_name');
        $graduate->street_address = $request->input('street_address');
        $graduate->city = $request->input('city');
        $graduate->state = $request->input('state');
        $graduate->zip = $request->input('zip');
        $graduate->phone1 = $request->input('phone1');
        $graduate->alt_phone1 = $request->input('alt_phone1');
        $graduate->alt_phone2 = $request->input('alt_phone2');
        $graduate->email1 = $request->input('email1');
        $graduate->gender = $request->input('gender');
        $graduate->graduation_date = $request->graduation_date;
        $graduate->date_of_birth = $request->date_of_birth;
        $graduate->condition = $request->input('condition');
        $graduate->last_contacted = $request->last_contacted;
        $graduate->next_call_date = $request->next_call_date;
        $graduate->additional_notes = $request->input('additional_notes');
        $graduate->status = $request->input('status');
        $graduate->fam_first_name = $request->input('fam_first_name');
        $graduate->fam_last_name = $request->input('fam_last_name');
        $graduate->fam_relationship = $request->input('fam_relationship');
        $graduate->fam_street_address = $request->input('fam_street_address');
        $graduate->fam_city = $request->input('fam_city');
        $graduate->fam_state = $request->input('fam_state');
        $graduate->fam_zip = $request->input('fam_zip');
        $graduate->fam_phone1 = $request->input('fam_phone1');
        $graduate->fam_alt_phone1 = $request->input('fam_alt_phone1');
        $graduate->fam_alt_phone2 = $request->input('fam_alt_phone2');
        $graduate->fam_email1 = $request->input('fam_email1');
        $graduate->fam_gender = $request->input('fam_gender');
        $graduate->fam_additional_notes = $request->input('fam_additional_notes');

        $graduate->save();

        return redirect('/graduates/'.$graduate->id.'/')->with('success', 'Graduate Edits Saved Successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Graduate  $graduate
     * @return \Illuminate\Http\Response
     */
    public function destroy(Graduate $graduate)
    {
        //
    }
}
