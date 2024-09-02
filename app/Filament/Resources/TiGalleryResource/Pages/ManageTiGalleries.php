<?php

namespace App\Filament\Resources\TiGalleryResource\Pages;

use App\Filament\Resources\TiGalleryResource;
use Filament\Actions;
use Filament\Resources\Pages\ManageRecords;

class ManageTiGalleries extends ManageRecords
{
    protected static string $resource = TiGalleryResource::class;

    protected function getHeaderActions(): array
    {
        return [
        ];
    }
}
