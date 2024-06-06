<?php

namespace App\Filament\Resources\FantasiResource\Pages;

use App\Filament\Resources\FantasiResource;
use Filament\Actions;
use Filament\Resources\Pages\ManageRecords;

class ManageFantasi extends ManageRecords
{
    protected static string $resource = FantasiResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
