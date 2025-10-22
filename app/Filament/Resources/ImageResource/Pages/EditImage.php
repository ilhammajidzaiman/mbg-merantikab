<?php

namespace App\Filament\Resources\ImageResource\Pages;

use Filament\Actions;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Storage;
use Filament\Resources\Pages\EditRecord;
use App\Filament\Resources\ImageResource;

class EditImage extends EditRecord
{
    protected static string $resource = ImageResource::class;

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
        $storage = Storage::disk('public');
        $record = $this->record ?? null;
        $stateFile = $data['file'];
        if (! empty($stateFile) && $stateFile !== ($record->file ?? null)) :
            $path = 'thumbnail/image/' . date('Y/m');
            $storage->makeDirectory($path);
            $fileName = pathinfo($stateFile, PATHINFO_FILENAME);
            $extension = pathinfo($stateFile, PATHINFO_EXTENSION);
            $thumbnail = $path . '/' . $fileName . '.' . $extension;
            if ($record && ! empty($record->thumbnail) && $storage->exists($record->thumbnail)) :
                $storage->delete($record->thumbnail);
            endif;
            if ($record && ! empty($record->file) && $storage->exists($record->file)) :
                $storage->delete($record->file);
            endif;
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
