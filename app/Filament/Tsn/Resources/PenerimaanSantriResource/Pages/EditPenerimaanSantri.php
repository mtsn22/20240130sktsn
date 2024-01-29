<?php

namespace App\Filament\Tsn\Resources\PenerimaanSantriResource\Pages;

use App\Filament\Tsn\Resources\PenerimaanSantriResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditPenerimaanSantri extends EditRecord
{
    protected static string $resource = PenerimaanSantriResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\ViewAction::make(),
            // Actions\DeleteAction::make(),
        ];
    }
}
