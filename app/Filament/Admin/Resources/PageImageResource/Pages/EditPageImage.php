<?php

namespace App\Filament\Admin\Resources\PageImageResource\Pages;

use App\Filament\Admin\Resources\PageImageResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditPageImage extends EditRecord
{
    protected static string $resource = PageImageResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
