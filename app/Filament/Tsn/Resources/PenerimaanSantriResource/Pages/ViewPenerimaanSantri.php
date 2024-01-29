<?php

namespace App\Filament\Tsn\Resources\PenerimaanSantriResource\Pages;

use App\Filament\Tsn\Resources\PenerimaanSantriResource;
use Filament\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewPenerimaanSantri extends ViewRecord
{
    protected static string $resource = PenerimaanSantriResource::class;

    protected function getHeaderActions(): array
    {
        return [
            // Actions\EditAction::make(),
        ];
    }
}
