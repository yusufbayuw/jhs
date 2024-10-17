<?php

namespace App\Livewire;

use App\Models\Room as ModelsRoom;
use Carbon\Carbon;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Forms\Contracts\HasForms;
use Filament\Forms\Form;
use Filament\Forms\Get;
use Filament\Forms\Set;
use Filament\Infolists\Components\ImageEntry;
use Filament\Infolists\Components\Tabs;
use Filament\Infolists\Components\TextEntry;
use Filament\Infolists\Concerns\InteractsWithInfolists;
use Filament\Infolists\Contracts\HasInfolists;
use Filament\Infolists\Infolist;
use Livewire\Component;

class Room extends Component implements HasForms, HasInfolists
{
    use InteractsWithInfolists;
    use InteractsWithForms;

    public ModelsRoom $room;

    public ?array $data = [];

    public function mount($id)
    {
        $this->room = ModelsRoom::findOrFail($id);

        $this->form->fill();
    }

    public function infolist(Infolist $infolist): Infolist
    {
        return $infolist
            ->record($this->room)
            ->schema([
                Tabs::make('Tabs')
                    ->tabs([
                        Tabs\Tab::make('Detail')
                            ->schema([
                                ImageEntry::make('image')
                                    ->defaultImageUrl(url('images/placeholder2.jpg'))
                                    ->label('')
                                    ->height(300),
                                TextEntry::make('hotel.name')
                                    ->label('Hotel')
                                    ->inlineLabel(),
                                TextEntry::make('name')
                                    ->label('Kamar')
                                    ->inlineLabel(),
                                TextEntry::make('type')
                                    ->label('Tipe')
                                    ->inlineLabel(),
                                TextEntry::make('facility')
                                    ->label('Fasilitas')
                                    ->inlineLabel(),
                            ])
                    ])
            ]);
    }

    public function form(Form $form): Form
    {
        $dataRoom = $this->room->toArray();
        //dd($dataRoom["hotel_id"]);
        return $form
            ->schema([
                TextInput::make('hotel_id')
                    ->default($dataRoom["hotel_id"]),
                DatePicker::make('check_in_date')
                    ->native(false)
                    ->required()
                    ->locale('id')
                    ->displayFormat('d M Y')
                    ->live()
                    ->minDate(now()),
                DatePicker::make('check_out_date')
                    ->required()
                    ->native(false)
                    ->locale('id')
                    ->displayFormat('d M Y')
                    ->live()
                    ->afterStateUpdated(function (Set $set, Get $get, $state) use ($dataRoom) {
                        $numberOfDays = Carbon::parse($state)->diffInDays(Carbon::parse($get('check_in_date')));
                        $set('number_of_days', $numberOfDays);
                        $set('amount', $numberOfDays * (float)$dataRoom["price_per_night"]);
                    })
                    ->minDate(fn(Get $get) => $get('check_in_date') ? Carbon::parse($get('check_in_date'))->addDay() : (now()))
                    ->hidden(fn(Get $get) => $get('check_in_date') ? false : true),
                TextInput::make('number_of_days')
                    ->label('Selama (hari)')
                    ->integer()
                    ->readOnly(),
                TextInput::make('amount')
                    ->label('Total')
                    ->numeric()
            ])
            ->statePath('data');
    }

    public function create(): void
    {
        dd($this->form->getState());
    }

    public function render()
    {
        return view('livewire.room');
    }
}
