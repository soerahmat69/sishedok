<?php

namespace App\Filament\Resources\OwnerResource\Pages;

use App\Filament\Resources\OwnerResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class ViewOwner extends EditRecord
{
    protected static string $resource = OwnerResource::class;
    protected static bool $canCreateAnother = false;
    protected static ?string $title = 'View Owner';


    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
    protected function getFormActions(): array
    {
    return [];
    }
}
