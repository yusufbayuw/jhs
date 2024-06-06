<?php

namespace App\Filament\Resources\OperationLogResource\Pages;

use App\Filament\Resources\OperationLogResource;
use Filament\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewOperationLog extends ViewRecord
{
    protected static string $resource = OperationLogResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\EditAction::make(),
        ];
    }
}
