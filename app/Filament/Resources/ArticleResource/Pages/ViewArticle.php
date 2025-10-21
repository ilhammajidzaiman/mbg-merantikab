<?php

namespace App\Filament\Resources\ArticleResource\Pages;

use Filament\Actions;
use App\Filament\Resources\ArticleResource;
use Filament\Resources\Pages\ViewRecord;

class ViewArticle extends ViewRecord
{
    protected static string $resource = ArticleResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\EditAction::make(),
        ];
    }
}
