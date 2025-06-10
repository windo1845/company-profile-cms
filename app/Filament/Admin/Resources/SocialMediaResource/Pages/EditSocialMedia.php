<?php

namespace App\Filament\Admin\Resources\SocialMediaResource\Pages;

use App\Filament\Admin\Resources\SocialMediaResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditSocialMedia extends EditRecord
{
    protected static string $resource = SocialMediaResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
