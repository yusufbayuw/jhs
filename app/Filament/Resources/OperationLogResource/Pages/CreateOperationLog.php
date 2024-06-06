<?php

namespace App\Filament\Resources\OperationLogResource\Pages;

use App\Filament\Resources\OperationLogResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateOperationLog extends CreateRecord
{
    protected static string $resource = OperationLogResource::class;
}
