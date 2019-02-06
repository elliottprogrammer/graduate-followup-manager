<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Calendar;
use App\Note;
use App\Graduate;

class CalendarController extends Controller
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

    public function index() {
        
        $events = [];

        $notes = Note::all();
        if ($notes->count()) {

            foreach ($notes as $note) {
                $name = $note->graduate->first_name.' '.$note->graduate->last_name;
                $date = date("d-m-y", strtotime($note->date));
                $groupedNotes[$date][$name] = (!isset($groupedNotes[$date][$name]) ? $note : ($note->contacted == true ? $note : $groupedNotes[$date][$name]));
            }

            $results = [];
            foreach($groupedNotes as $groupedDays){
                foreach($groupedDays as $day){
                    $results[] = $day;
                }
            }
            
            foreach ($results as $note) {
                $color = ($note->contacted ? '#42c542' : '#ff7070'); 
                $events[] = Calendar::event(
                        $note->graduate->first_name.' '.$note->graduate->last_name,
                        true,
                        $note->date,
                        $note->date,
                        null,
                        [
                            'url' => '/graduates/'.$note->graduate->id.'/',
                            'textColor' => 'white',
                            'borderColor' => 'transparent',
                            'backgroundColor' => $color
                        ]
                    );
            }
        }

        $graduates = Graduate::all();
        if ($graduates->count()) {
            foreach ($graduates as $graduate) {
                $events[] = Calendar::event(
                    $graduate->first_name.' '.$graduate->last_name,
                    true,
                    $graduate->next_call_date,
                    $graduate->next_call_date,
                    null,
                    [
                        'url' => '/graduates/'.$graduate->id.'/',
                        'textColor' => 'black',
                        'borderColor' => '#d8c700',
                        'backgroundColor' => '#FFED18'
                    ]
                );
            }
        }

        if (count($events)) {
            $calendar = Calendar::addEvents($events); 
            return view('calendar.index', compact('calendar'));
        }
    }
}
