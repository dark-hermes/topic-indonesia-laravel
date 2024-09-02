<?php

namespace App\Filament\Resources\EmengYoutubeResource\Pages;

use App\Filament\Resources\EmengYoutubeResource;
use Filament\Actions;
use Filament\Resources\Pages\ManageRecords;

class ManageEmengYoutubes extends ManageRecords
{
    protected static string $resource = EmengYoutubeResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
