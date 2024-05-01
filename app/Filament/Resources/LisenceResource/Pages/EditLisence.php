<?php

namespace App\Filament\Resources\LisenceResource\Pages;

use App\Filament\Resources\LisenceResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditLisence extends EditRecord
{
    protected static string $resource = LisenceResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
