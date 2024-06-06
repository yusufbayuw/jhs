<?php

namespace App\Filament\Resources\OperationLogResource\Pages;

use App\Filament\Resources\OperationLogResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListOperationLogs extends ListRecords
{
    protected static string $resource = OperationLogResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
