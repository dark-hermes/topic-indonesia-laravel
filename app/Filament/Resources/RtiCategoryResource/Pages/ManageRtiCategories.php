<?php

namespace App\Filament\Resources\RtiCategoryResource\Pages;

use App\Filament\Resources\RtiCategoryResource;
use Filament\Actions;
use Filament\Resources\Pages\ManageRecords;

class ManageRtiCategories extends ManageRecords
{
    protected static string $resource = RtiCategoryResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
