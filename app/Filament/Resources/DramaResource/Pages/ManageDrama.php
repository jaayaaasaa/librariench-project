<?php

namespace App\Filament\Resources\DramaResource\Pages;

use App\Filament\Resources\DramaResource;
use Filament\Actions;
use Filament\Resources\Pages\ManageRecords;

class ManageDrama extends ManageRecords
{
    protected static string $resource = DramaResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
