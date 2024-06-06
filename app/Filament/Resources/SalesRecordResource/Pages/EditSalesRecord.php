<?php

namespace App\Filament\Resources\SalesRecordResource\Pages;

use App\Filament\Resources\SalesRecordResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditSalesRecord extends EditRecord
{
    protected static string $resource = SalesRecordResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\ViewAction::make(),
            Actions\DeleteAction::make(),
        ];
    }
}
