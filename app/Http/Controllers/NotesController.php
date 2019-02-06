<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Note;
use App\Graduate;

class NotesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        $this->validate($request, [
            'contacted' => 'required',
            'note' => 'required',
        ]);

        // save new Note to db
        $note = new Note;
        $note->graduate_id = $request->input('graduate_id');
        $note->contacted = $request->input('contacted');
        if ($note->contacted === '1') {
            $note->sober = $request->input('sober');
            $note->working = $request->input('working');
            $note->battle_plan = $request->input('battle-plan');
        }
        $note->note = $request->input('note');

        $note->save();
        
        // update graduate 'next_call_date' based on whether they were contacted or not
        $graduate = Graduate::find($note->graduate_id);

        if ($note->contacted === '1') {
            $graduate->last_contacted = Carbon::now();
            $new_next_call_date = Carbon::now()->addDays(7);
        } else {
            $new_next_call_date = Carbon::now()->addDay();
        }
        
        $graduate->next_call_date = $new_next_call_date;
        $graduate->save();
        

        return redirect('/graduates/'.$note->graduate_id)->with('success', 'New Note Added Successfully!');
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
        $this->validate($request, [
            'contacted' => 'required',
            'note' => 'required',
        ]);

        // save new Note to db
        $note = Note::find($id);
        $note->contacted = $request->input('contacted');
        $note->note = $request->input('note');

        $note->save();

        return redirect('/graduates/'.$note->graduate_id)->with('success', 'Note Updated Successfully!');
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
