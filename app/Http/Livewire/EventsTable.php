<?php

namespace App\Http\Livewire;
use App\Models\resarvations;

use App\Models\Event;
use Mediconesystems\LivewireDatatables\Http\Livewire\LivewireDatatable;
use Mediconesystems\LivewireDatatables\ {
    Column,
    DateColumn,
    BooleanColumn
};

class EventsTable extends LivewireDatatable
{
    protected $listeners = ['eventRented' => 'rented'];

    public function builder()
    {
        return resarvations::where('user_id', auth()->id())->join('excursions', 'resarvations.excursion_id', '=', 'excursions.id');
    }

    public function columns()
    {
        return [
            Column::name('excursions.title')
                ->label('Gîte'),
            DateColumn::name('start')
                ->label('Début'),
            DateColumn::name('end')
                ->label('Fin'),
            BooleanColumn::name('rented')
                ->label('Réservation'),
            Column::callback(['rented', 'limit'], function ($rented, $limit) { 
                if($rented) {
                    return;
                }
                $formated = date_format(date_create($limit),"d/m/Y");
                return date('Y-m-d') > $limit
                    ? '<span class="text-red-500 font-bold"><strong>' . $formated . '</strong></span>'
                    : '<span class="text-green-500"><strong>' . $formated . '</strong></span>';
            })->label('Limite de paiement'),
            Column::callback(['limit', 'rented', 'id'], function ($limit, $rented, $id) {
                return view('back.actions', [
                    'limit' => date('Y-m-d') > $limit,
                    'rented' => $rented,
                    'id' => $id, 
                ]);
            }),
        ];
    }

    public function destroy(resarvtions $event)
    {
        $event->delete();
    }

    public function rented($id)
    {
        $event = resarvations::findOrFail($id);
        $event->rented = true;
        $event->save();
        $event->payment()->create();
    }    
    
}