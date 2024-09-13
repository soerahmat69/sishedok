<?php

namespace App\Filament\Resources\OwnerResource\Pages;

use App\Filament\Resources\OwnerResource;
use Filament\Actions;
use Filament\Pages\Actions\CreateAction;
use Filament\Resources\Pages\CreateRecord;
use Filament\Actions\Action;

class CreateOwner extends CreateRecord
{
    protected static string $resource = OwnerResource::class;
    protected static bool $canCreateAnother = false;
      protected function getFormActions(): array
    {
    return [
        $this->saveOwn() ,
    ];
    }
    protected function saveOwn(): Action
    {
        return Action::make('createindraft')
        ->label('Simpan')
        ->action(function(){
            // $this->data['name'] = 'draft'; sebelum menyimpan data di rubah ke draft dahulu 
            $this->create();
        });
    }

}
