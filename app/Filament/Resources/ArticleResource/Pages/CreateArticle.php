<?php

namespace App\Filament\Resources\ArticleResource\Pages;

use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Storage;
use Filament\Resources\Pages\CreateRecord;
use App\Filament\Resources\ArticleResource;

class CreateArticle extends CreateRecord
{
    protected static string $resource = ArticleResource::class;

    protected function mutateFormDataBeforeCreate(array $data): array
    {
        $stateFile = $data['file'];
        $storage = Storage::disk('public');
        $path = 'article-thumbnail/' . date('Y/m');
        $storage->makeDirectory($path);
        $fileName = pathinfo($stateFile, PATHINFO_FILENAME);
        $extension = pathinfo($stateFile, PATHINFO_EXTENSION);
        $thumbnail = $path . '/' . $fileName . '.' . $extension;
        if (! empty($stateFile)) :
            if ($storage->exists($stateFile)) :
                $originalFullPath = $storage->path($stateFile);
                $image = Image::make($originalFullPath)
                    ->resize(400, null, function ($constraint) {
                        $constraint->aspectRatio();
                        $constraint->upsize();
                    })
                    ->encode($extension);
                $storage->put($thumbnail, (string) $image);
                $data['thumbnail'] = $thumbnail;
            endif;
        endif;
        return $data;
    }
}
