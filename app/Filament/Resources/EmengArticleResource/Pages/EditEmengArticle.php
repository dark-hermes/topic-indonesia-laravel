<?php

namespace App\Filament\Resources\EmengArticleResource\Pages;

use App\Filament\Resources\EmengArticleResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditEmengArticle extends EditRecord
{
    protected static string $resource = EmengArticleResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
            Actions\ForceDeleteAction::make(),
            Actions\RestoreAction::make(),
        ];
    }
}
