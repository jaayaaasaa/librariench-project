<?php

namespace App\Filament\Resources\PopulerResource\Pages;

use App\Filament\Resources\PopulerResource;
use Filament\Actions;
use Filament\Resources\Pages\ManageRecords;

class ManagePopuler extends ManageRecords
{
    protected static string $resource = PopulerResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
