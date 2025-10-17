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
        if (! empty($data['file'])) :
            $storage = Storage::disk('public');
            $path = 'article-thumbnail/' . date('Y/m');
            $storage->makeDirectory($path);
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
                    ->encode($extension, 50);
                $storage->put($thumbnail, (string) $image);
                $data['thumbnail'] = $thumbnail;
            endif;
        endif;
        return $data;
    }
}
