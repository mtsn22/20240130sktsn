<?php

namespace App\Filament\Tsn\Resources\PenerimaanSantriResource\Pages;

use App\Filament\Tsn\Resources\PenerimaanSantriResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;
use Filament\Pages\Concerns\ExposesTableToWidgets;

class ListPenerimaanSantris extends ListRecords
{
    protected static string $resource = PenerimaanSantriResource::class;

    use ExposesTableToWidgets;

    protected function getHeaderActions(): array
    {
        return [
            // Actions\CreateAction::make(),
        ];
    }

    protected function getHeaderWidgets(): array
    {
        return PenerimaanSantriResource::getWidgets();
    }
}
