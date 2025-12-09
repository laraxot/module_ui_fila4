<?php

namespace Modules\UI\Filament\Resources\CollectionLangResource\Pages;

use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns;
use Modules\Lang\Filament\Resources\Pages\LangBaseListRecords;
use Modules\UI\Filament\Resources\CollectionLangResource;

class ListCollections extends LangBaseListRecords
{
    protected static string $resource = CollectionLangResource::class;

    public function getTableColumns(): array
    {
        return [
            TextColumn::make('name')
                ->forceSearchCaseInsensitive()
                ->label((string) __('Collections Name'))
                ->searchable()
                ->sortable()
                ->toggleable(),
            TextColumn::make('values-list')
                ->badge()
                ->separator(',')
                ->label((string) __('Collections Values'))
                ->searchable(['values'])
                ->toggleable(),
        ];
    }
}
