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
        $storage = Storage::disk('public');
        $stateFile = $data['file'];
        $stateAttachment = $data['attachment'];
        if (! empty($stateFile)) :
            $path = 'thumbnail/article-image/' . date('Y/m');
            $storage->makeDirectory($path);
            $fileName = pathinfo($stateFile, PATHINFO_FILENAME);
            $extension = pathinfo($stateFile, PATHINFO_EXTENSION);
            $thumbnail = $path . '/' . $fileName . '.' . $extension;
            if ($storage->exists($stateFile)) :
                $originalFullPath = $storage->path($stateFile);
                $image = Image::make($originalFullPath)
                    ->resize(400, null, function ($constraint) {
                        $constraint->aspectRatio();
                        $constraint->upsize();
                    })
                    ->encode($extension);
                $storage->put($thumbnail, (string) $image);
            endif;
        endif;
        if (! empty($stateAttachment) && is_array($stateAttachment)) :
            $path = 'thumbnail/article-attachment/' . date('Y/m');
            $storage->makeDirectory($path);
            foreach ($stateAttachment as $file) :
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
                        ->encode($extension);
                    $storage->put($thumbnail, (string) $image);
                endif;
            endforeach;
        endif;
        return $data;
    }
}
