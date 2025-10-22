<?php

namespace App\Filament\Resources\ImageResource\Pages;

use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Storage;
use App\Filament\Resources\ImageResource;
use Filament\Resources\Pages\CreateRecord;

class CreateImage extends CreateRecord
{
    protected static string $resource = ImageResource::class;

    protected function mutateFormDataBeforeCreate(array $data): array
    {
        $storage = Storage::disk('public');
        $stateFile = $data['file'];
        if (! empty($stateFile)) :
            $path = 'thumbnail/image/' . date('Y/m');
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
        return $data;
    }
}
