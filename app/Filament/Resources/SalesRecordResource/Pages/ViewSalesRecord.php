<?php

namespace App\Filament\Resources\SalesRecordResource\Pages;

use App\Filament\Resources\SalesRecordResource;
use Filament\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewSalesRecord extends ViewRecord
{
    protected static string $resource = SalesRecordResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\EditAction::make(),
        ];
    }
}
