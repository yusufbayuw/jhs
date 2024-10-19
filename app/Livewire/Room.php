<?php

namespace App\Livewire;

use App\Models\Booking;
use App\Models\Room as ModelsRoom;
use Carbon\Carbon;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\Hidden;
use Filament\Forms\Components\Section;
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
                            ]),
                        Tabs\Tab::make('Gambar')
                            ->schema([
                                ImageEntry::make('image')
                                    ->defaultImageUrl(url('images/placeholder2.jpg'))
                                    ->label('')
                                    ->height(300),
                            ])
                    ]),
            ]);
    }

    public function form(Form $form): Form
    {
        $dataRoom = $this->room->toArray();
        //dd($dataRoom["hotel_id"]);
        return $form
            ->schema([
                Section::make('Pesan Kamar')
                    ->description('Pilih tanggal Check In dan Check Out')
                    ->schema([
                        Hidden::make('user_id')
                            ->default(auth()->user()->id),
                        Hidden::make('room_id')
                            ->default($dataRoom["id"]),
                        DatePicker::make('check_in_date')
                            ->native(false)
                            ->required()
                            ->label('Tanggal Check In')
                            ->locale('id')
                            ->displayFormat('d M Y')
                            ->live()
                            ->minDate(today()),
                        DatePicker::make('check_out_date')
                            ->required()
                            ->label('Tanggal Check Out')
                            ->native(false)
                            ->locale('id')
                            ->displayFormat('d M Y')
                            ->live()
                            ->afterStateUpdated(function (Set $set, Get $get, $state) use ($dataRoom) {
                                $numberOfDays = Carbon::parse($state)->diffInDays(Carbon::parse($get('check_in_date')));
                                $set('number_of_days', $numberOfDays);
                                $set('amount', $numberOfDays * (float)$dataRoom["price_per_night"]);
                            })
                            ->minDate(fn(Get $get) => $get('check_in_date') ? Carbon::parse($get('check_in_date'))->addDay() : (today()))
                            ->hidden(fn(Get $get) => $get('check_in_date') ? false : true),
                        TextInput::make('number_of_days')
                            ->label('Selama (hari)')
                            ->integer()
                            ->readOnly(),
                        TextInput::make('amount')
                            ->label('Harga Total')
                            ->numeric()
                            ->readOnly(),
                        Hidden::make('status')
                            ->default('Menunggu Pembayaran'),
                    ]),
            ])
            ->statePath('data');
    }

    public function create()
    {
        $booking = Booking::create($this->form->getState());
        $params = array(
            'transaction_details' => array(
                'order_id' => $booking->id,
                'gross_amount' => $booking->amount,
            ),
            'customer_details' => array(
                'first_name' => auth()->user()->name,
                'email' => auth()->user()->email,
            ),
        );
        // Set your Merchant Server Key
        \Midtrans\Config::$serverKey = env('MIDTRANS_SERVER_KEY');
        \Midtrans\Config::$clientKey = env('MIDTRANS_CLIENT_KEY');
        // Set to Development/Sandbox Environment (default). Set to true for Production Environment (accept real transaction).
        \Midtrans\Config::$isProduction = false;
        // Set sanitization on (default)
        \Midtrans\Config::$isSanitized = true;
        // Set 3DS transaction for credit card to true
        \Midtrans\Config::$is3ds = true;

        $snapToken = \Midtrans\Snap::getSnapToken($params);

        $booking->snap_token = $snapToken;
        $booking->save();

        return redirect(route('booking', $booking->id));
    }

    public function render()
    {
        return view('livewire.room');
    }
}
