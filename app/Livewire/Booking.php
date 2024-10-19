<?php

namespace App\Livewire;

use App\Models\Booking as ModelsBooking;
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Forms\Contracts\HasForms;
use Filament\Infolists\Components\Section;
use Filament\Infolists\Components\TextEntry;
use Filament\Infolists\Concerns\InteractsWithInfolists;
use Filament\Infolists\Contracts\HasInfolists;
use Filament\Infolists\Infolist;
use Livewire\Component;

class Booking extends Component implements HasForms, HasInfolists
{
    use InteractsWithInfolists;
    use InteractsWithForms;

    public ModelsBooking $booking;

    public function mount($id)
    {
        $this->booking = ModelsBooking::findOrFail($id);
    }

    public function infolist(Infolist $infolist): Infolist
    {
        return $infolist
            ->record($this->booking)
            ->schema([
                Section::make('Menunggu Pembayaran')
                    ->schema([

                        TextEntry::make('room.hotel.name'),
                        TextEntry::make('room.name'),
                        TextEntry::make('number_of_days'),
                        TextEntry::make('check_in_date'),
                        TextEntry::make('check_out_date'),
                        TextEntry::make('amount'),

                    ])
            ]);
    }

    public function render()
    {
        $transaction = $this->booking;
        return view('livewire.booking', compact('transaction'));
    }
}
