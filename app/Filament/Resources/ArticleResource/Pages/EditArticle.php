<?php

namespace App\Filament\Resources\ArticleResource\Pages;

use Filament\Actions;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Storage;
use Filament\Resources\Pages\EditRecord;
use App\Filament\Resources\ArticleResource;

class EditArticle extends EditRecord
{
    protected static string $resource = ArticleResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
            Actions\ForceDeleteAction::make(),
            Actions\RestoreAction::make(),
        ];
    }

    protected function mutateFormDataBeforeSave(array $data): array
    {
        if (! empty($data['file'])) :
            $storage = Storage::disk('public');
            $path = 'article-thumbnail/' . date('Y/m');
            $storage->makeDirectory($path);
            $record = $this->record ?? null;
            if ($record && ! empty($record->thumbnail) && $storage->exists($record->thumbnail)) :
                $storage->delete($record->thumbnail);
            endif;
            if ($record && ! empty($record->file) && $storage->exists($record->file)) :
                $storage->delete($record->file);
            endif;
            $file = $data['file'];
            $fileName = pathinfo($file, PATHINFO_FILENAME);
            $extension = pathinfo($file, PATHINFO_EXTENSION);
            $thumbnail = $path . '/' . $fileName . '.' . $extension;
            if ($storage->exists($file)) :
                $originalFullPath = $storage->path($file);
                $image = Image::make($originalFullPath)
                    ->resize(400, null, function ($constraint) {
                        $constraint->aspectRatio();
                        $constraint->upsize();
                    })
                    ->encode($extension, 60);
                $storage->put($thumbnail, (string) $image);
                $data['thumbnail'] = $thumbnail;
            endif;
        endif;
        return $data;
    }
}
