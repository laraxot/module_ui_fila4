<?php

namespace Modules\UI\Filament\Resources\FieldOptionResource\Pages;

use Filament\Tables\Columns\TextColumn;
use Modules\UI\Filament\Resources\FieldOptionResource;
use Filament\Actions;
use Filament\Tables\Columns;
use Filament\Resources\Pages\ListRecords;
use Modules\Lang\Filament\Resources\Pages\LangBaseListRecords;

class ListFieldOptions extends LangBaseListRecords
{
    protected static string $resource = FieldOptionResource::class;

    public function getTableColumns(): array
    {
        return [
            TextColumn::make('name'),
            TextColumn::make('key'),
            TextColumn::make('type')
        ];
    }
}
