<?php

namespace App\Filament\Resources\UserResource\Pages;

use App\Filament\Resources\UserResource;
use Filament\Actions;
use Filament\Resources\Pages\ViewRecord;
use Filament\Tables;

class ViewUser extends ViewRecord
{
    protected static string $resource = UserResource::class;
    public static function table(Table $table): Table
{
    return $table
        ->columns([
            Tables\Columns\TextColumn::make('name')
            ->searchable(),
        ])
        ->actions([
            Tables\Actions\ViewAction::make(),
            // ...
        ]);
}
}
