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
        $storage = Storage::disk('public');
        $record = $this->record ?? null;
        $stateFile = $data['file'];
        $stateAttachment = $data['attachment'];
        if (! empty($stateFile) && $stateFile !== ($record->file ?? null)) :
            $path = 'thumbnail/article-image/' . date('Y/m');
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

        if (! empty($stateAttachment) && is_array($stateAttachment)) :
            $path = 'thumbnail/article-attachment/' . date('Y/m');
            $storage->makeDirectory($path);
            foreach ($stateAttachment as $file) :
                $fileName = pathinfo($file, PATHINFO_FILENAME);
                $extension = pathinfo($file, PATHINFO_EXTENSION);
                $thumbnail = $path . '/' . $fileName . '.' . $extension;
                if ($record && ! empty($record->thumbnail) && $storage->exists($record->thumbnail)) :
                    $storage->delete($record->thumbnail);
                endif;
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
