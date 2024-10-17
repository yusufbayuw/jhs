<?php

namespace App\Filament\Resources;

use App\Filament\Resources\BookingResource\Pages;
use App\Filament\Resources\BookingResource\RelationManagers;
use App\Models\Booking;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class BookingResource extends Resource
{
    protected static ?string $model = Booking::class;

    protected static ?string $navigationIcon = 'heroicon-o-ticket';

    protected static ?string $modelLabel = 'Booking';

    //protected static ?string $navigationGroup = 'Administrator';

    protected static ?int $navigationSort = 4;

    protected static ?string $navigationLabel = 'Booking';

    protected static ?string $slug = 'booking';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Select::make('user_id')
                    ->relationship('user', 'name'),
                Forms\Components\TextInput::make('hotel_id')
                    ->tel()
                    ->numeric(),
                Forms\Components\TextInput::make('check_in_date')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('check_out_date')
                    ->maxLength(255),
                //Forms\Components\DatePicker::make('date'),
                Forms\Components\TextInput::make('number_of_days')
                    ->numeric(),
                Forms\Components\TextInput::make('amount')
                    ->numeric(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('user.name')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('hotel_id')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('check_in_date')
                    ->searchable(),
                Tables\Columns\TextColumn::make('check_out_date')
                    ->searchable(),
                Tables\Columns\TextColumn::make('date')
                    ->date()
                    ->sortable(),
                Tables\Columns\TextColumn::make('number_of_days')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('amount')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\ViewAction::make(),
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListBookings::route('/'),
            'create' => Pages\CreateBooking::route('/create'),
            'view' => Pages\ViewBooking::route('/{record}'),
            'edit' => Pages\EditBooking::route('/{record}/edit'),
        ];
    }
}
