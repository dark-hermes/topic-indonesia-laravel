<?php

namespace App\Filament\Resources\TiOptionResource\Pages;

use App\Filament\Resources\TiOptionResource;
use Filament\Actions;
use Filament\Resources\Pages\ManageRecords;

class ManageTiOptions extends ManageRecords
{
    protected static string $resource = TiOptionResource::class;

    protected function getHeaderActions(): array
    {
        return [
            // Actions\CreateAction::make(),
        ];
    }
}
