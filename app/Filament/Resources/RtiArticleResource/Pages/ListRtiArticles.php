<?php

namespace App\Filament\Resources\RtiArticleResource\Pages;

use Closure;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;
use App\Filament\Resources\RtiArticleResource;

class ListRtiArticles extends ListRecords
{
    protected static string $resource = RtiArticleResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
