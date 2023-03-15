<?php

namespace App\Http\Livewire;

use Carbon\Carbon;
use App\Models\Home;
use Livewire\Component;
use App\Models\Excursion;
use App\Models\resarvations;

class Calendar extends Component
{

    public $events = [];
    public $idCalendar;
    public function render()
    {
        $this->events = json_encode(Excursion::find($this->idCalendar)->reservations()->get());
        return view('livewire.calendar');
    }
    public function addEvent($event)
    {
        // Détermination date limite de paiement
        $start = Carbon::createFromFormat('Y-m-d', $event['start']);
        $diff = Carbon::now()->diffInDays($start);
        $event['limit'] = $start->subDays($diff < 8 ? 1 : 7)->toDateString();
        $event['user_id'] = auth()->id();
        $event['excursion_id'] = $this->idCalendar;
        resarvations::create($event);   
    }

}