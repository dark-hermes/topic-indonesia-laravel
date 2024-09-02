<?php

namespace App\Filament\Resources\EmengArticleResource\Pages;

use App\Filament\Resources\EmengArticleResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListEmengArticles extends ListRecords
{
    protected static string $resource = EmengArticleResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
