<?php

namespace App\Filament\Resources\LisenceResource\Pages;

use App\Filament\Resources\LisenceResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListLisences extends ListRecords
{
    protected static string $resource = LisenceResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
