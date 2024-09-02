<?php

namespace App\Filament\Resources\EmengCategoryResource\Pages;

use App\Filament\Resources\EmengCategoryResource;
use Filament\Actions;
use Filament\Resources\Pages\ManageRecords;

class ManageEmengCategories extends ManageRecords
{
    protected static string $resource = EmengCategoryResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
