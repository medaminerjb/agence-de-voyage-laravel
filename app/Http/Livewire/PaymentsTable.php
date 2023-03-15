<?php
namespace App\Http\Livewire;
use App\Models\Payment;
use App\Models\resarvations;
use Mediconesystems\LivewireDatatables\ { Column, DateColumn };
use Mediconesystems\LivewireDatatables\Http\Livewire\LivewireDatatable;

class PaymentsTable extends LivewireDatatable
{
    public $model = Payment::class;
    public function columns()
    {
        return [
            DateColumn::name('created_at')
                ->label('Date de paiment'),
            Column::name('resarvations.excursion.title')
                ->label('Gîte'),
            DateColumn::name('resarvations.start')
                ->label('Début du séjour'),
        ];
    }
}
