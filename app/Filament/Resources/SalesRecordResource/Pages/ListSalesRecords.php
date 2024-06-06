<?php

namespace App\Filament\Resources\SalesRecordResource\Pages;

use App\Filament\Resources\SalesRecordResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListSalesRecords extends ListRecords
{
    protected static string $resource = SalesRecordResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
