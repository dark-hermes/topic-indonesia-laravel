<?php

namespace App\Filament\Resources\RtiYoutubeResource\Pages;

use App\Filament\Resources\RtiYoutubeResource;
use Filament\Actions;
use Filament\Resources\Pages\ManageRecords;

class ManageRtiYoutubes extends ManageRecords
{
    protected static string $resource = RtiYoutubeResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
