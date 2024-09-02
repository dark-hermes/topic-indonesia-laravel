<?php

namespace App\Filament\Resources\TiTeamResource\Pages;

use App\Filament\Resources\TiTeamResource;
use Filament\Actions;
use Filament\Resources\Pages\ManageRecords;

class ManageTiTeams extends ManageRecords
{
    protected static string $resource = TiTeamResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
