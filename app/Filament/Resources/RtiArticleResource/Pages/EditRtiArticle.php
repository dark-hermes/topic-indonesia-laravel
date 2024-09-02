<?php

namespace App\Filament\Resources\RtiArticleResource\Pages;

use App\Filament\Resources\RtiArticleResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditRtiArticle extends EditRecord
{
    protected static string $resource = RtiArticleResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
            Actions\ForceDeleteAction::make(),
            Actions\RestoreAction::make(),
        ];
    }
}
