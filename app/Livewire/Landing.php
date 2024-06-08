<?php

namespace App\Livewire;

use App\Models\Hotel;
use App\Models\Room;
use Livewire\Component;
use Filament\Tables\Table;
use Filament\Forms\Contracts\HasForms;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Contracts\HasTable;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\Layout\Stack;
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Support\Enums\FontWeight;
use Filament\Tables\Columns\Layout\Split;
use Filament\Tables\Concerns\InteractsWithTable;
use Hydrat\TableLayoutToggle\Facades\TableLayoutToggle;
use Hydrat\TableLayoutToggle\Concerns\HasToggleableTable;

class Landing extends Component implements HasForms, HasTable
{
    use InteractsWithTable;
    use InteractsWithForms;
    use HasToggleableTable;

    public function getDefaultLayoutView(): string
    {
        return 'grid';
    }

    public function table(Table $table): Table
    {
        return $table
            ->query(Hotel::query())
            ->columns($this->isGridLayout()
                ? $this->getGridTableColumns()
                : $this->getListTableColumns())
            ->contentGrid(
                fn () => $this->isListLayout()
                    ? null
                    : [
                        'md' => 2,
                        'lg' => 3,
                        'xl' => 4,
                    ]
            )
            ->filters([
                //
            ])
            ->headerActions([
                //TableLayoutToggle::getToggleViewTableAction(compact: true),
            ])
            ->actions([
                //
            ])
            ->recordUrl(fn (Hotel $hotel) => route('hotel', $hotel->id));
    }

    protected function getListTableColumns(): array
    {
        return [
            TextColumn::make('name')
                ->sortable()
                ->label('Nama Hotel')
                ->searchable(),
        ];
    }
    protected function getGridTableColumns(): array
    {
        return [
            Stack::make([                
                ImageColumn::make('room.image')
                    ->size(300)
                    ->checkFileExistence(true)
                    ->defaultImageUrl(url('images/placeholder.jpg'))
                    ->alignCenter(),
                    //->simpleLightbox(),
                Split::make([
                    TextColumn::make('name')
                        ->size(TextColumn\TextColumnSize::Large)
                        ->weight(FontWeight::Bold)
                        ->alignLeft()
                        ->searchable()
                        ->label('Nama Hotel')
                        ->sortable(),
                    TextColumn::make('name')
                        ->formatStateUsing(fn () => 'Lihat Kamar')
                        ->size(TextColumn\TextColumnSize::Large)
                        ->weight(FontWeight::Bold)
                        ->badge()
                        ->url(fn (Hotel $hotel) => route('hotel', $hotel->id))
                        ->alignRight()
                        ->color('success')
                ]),
                Split::make([
                    TextColumn::make('city')
                        ->label('Kota')
                        ->badge()
                        ->searchable()
                        ->sortable()
                        ->alignLeft(),
                    TextColumn::make('id')
                        ->formatStateUsing(fn ($state) => 'Rp '. number_format((float)(Room::where('hotel_id', $state)->min('price_per_night'))) )
                        ->alignRight()
                        ->label('Harga')
                        ->weight(FontWeight::SemiBold)
                        ->size(TextColumn\TextColumnSize::Medium)
                        ->sortable(),
                ]),
                TextColumn::make('address')
                    ->columnSpanFull()
                    ->alignLeft()
                    ->size(TextColumn\TextColumnSize::Small)
                    ,
            ])
            ->space(3)
            ->extraAttributes([
                'class' => 'pb-2',
            ]),
        ];
    }

    public function render()
    {
        return view('livewire.landing');
    }
}
