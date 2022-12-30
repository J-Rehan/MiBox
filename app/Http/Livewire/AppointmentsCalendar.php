<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\User;
use App\Models\Datelist;

class AppointmentsCalendar extends Component
{
    public $events;
    public $alet = '';
    public function getevent()
    {
//        $events = User::select('id')->get();
//        return  json_encode($events);
    }
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function alertme($data)
    {
        $this->alet = $data;
    }
    public function addevent($date)
    {
        Datelist::updateOrCreate([
            'date' =>$date,
        ], [
            'date' => $date,
        ]);
    }
    public function removedate($date)
    {
        Datelist::where("date",$date)->delete();
    }
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function eventDrop($event, $oldEvent)
    {
//        $eventdata = User::find($event['id']);
//        $eventdata->start = $event['id'];
//        $eventdata->save();
    }
    /**
     * Write code on Method
     *
     * @return response()
     */

    public function mount()
    {
        $this->events = Datelist::orderBy("id")->select(["date as start"])->get()->toJson();
    }

    public function render()
    {
        return view('livewire.appointments-calendar');
    }
}
