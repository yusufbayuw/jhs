<?php

namespace App\Livewire;

use App\Models\Room;
use Livewire\Component;
use Filament\Tables\Table;
use Filament\Tables\Actions\Action;
use Filament\Forms\Contracts\HasForms;
use Filament\Support\Enums\FontWeight;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Contracts\HasTable;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\Layout\Split;
use Filament\Tables\Columns\Layout\Stack;
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Tables\Concerns\InteractsWithTable;
use Hydrat\TableLayoutToggle\Concerns\HasToggleableTable;

class Hotel extends Component implements HasForms, HasTable
{
    use InteractsWithTable;
    use InteractsWithForms;
    use HasToggleableTable;

    public $id;

    public function mount($id)
    {
        $this->id = $id;
        // You can now use $this->id in your component
    }

    public function getDefaultLayoutView(): string
    {
        return 'grid';
    }

    public function table(Table $table): Table
    {
        return $table
            ->query(Room::query()->where('hotel_id', $this->id))
            ->columns($this->getGridTableColumns())
            /* untuk kombinasi grid dan list
                ->columns($this->isGridLayout()
                ? $this->getGridTableColumns()
                : $this->getListTableColumns()) */
            ->contentGrid(
                [
                    'md' => 2,
                    'lg' => 3,
                    'xl' => 4,
                ]
                /*  untuk kombinasi grid & list   
                fn () => $this->isListLayout()
                    ? null
                    : [
                        'md' => 2,
                        'lg' => 3,
                        'xl' => 4,
                    ] */
            )
            ->filters([
                //
            ])
            ->headerActions([
                Action::make('Kembali')
                    ->action(fn () => redirect(route('home'))),
                //TableLayoutToggle::getToggleViewTableAction(compact: true),
            ])
            ->actions([
                //
            ])
            ->recordUrl(fn (Room $room) => route('room', ['id' => $room->id]));
    }

    protected function getListTableColumns(): array
    {
        return [
            TextColumn::make('name')
                ->sortable()
                ->label('Kamar')
                ->searchable(),
        ];
    }
    protected function getGridTableColumns(): array
    {
        return [
            Stack::make([                
                ImageColumn::make('image')
                    ->size(300)
                    ->checkFileExistence(true)
                    ->defaultImageUrl(url('images/placeholder2.jpg'))
                    ->alignCenter(),
                Split::make([
                    TextColumn::make('name')
                        ->size(TextColumn\TextColumnSize::Large)
                        ->weight(FontWeight::Bold)
                        ->alignLeft()
                        ->searchable()
                        ->label('Kamar')
                        ->sortable(),
                ]),
                Split::make([
                    TextColumn::make('type')
                        ->label('Tipe Kamar')
                        ->badge()
                        ->searchable()
                        ->sortable()
                        ->alignLeft(),
                    TextColumn::make('price_per_night')
                        ->formatStateUsing(fn ($state) => 'Rp '. number_format((float)$state) )
                        ->alignRight()
                        ->label('Harga')
                        ->weight(FontWeight::SemiBold)
                        ->size(TextColumn\TextColumnSize::Medium)
                        ->sortable(),
                ]),
                TextColumn::make('name')
                        ->formatStateUsing(fn () => 'Pesan Kamar')
                        ->size(TextColumn\TextColumnSize::Large)
                        ->weight(FontWeight::Bold)
                        ->badge()
                        ->url(fn (Room $room) => route('room', ['id' => $room->id]))
                        ->alignRight()
                        ->color('success'),
            ])
            ->space(3)
            ->extraAttributes([
                'class' => 'pb-2',
            ]),
        ];
    }
    public function render()
    {
        return view('livewire.hotel');
    }
}
