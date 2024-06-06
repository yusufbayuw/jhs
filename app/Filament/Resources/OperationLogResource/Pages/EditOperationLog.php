<?php

namespace App\Filament\Resources\OperationLogResource\Pages;

use App\Filament\Resources\OperationLogResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditOperationLog extends EditRecord
{
    protected static string $resource = OperationLogResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\ViewAction::make(),
            Actions\DeleteAction::make(),
        ];
    }
}
