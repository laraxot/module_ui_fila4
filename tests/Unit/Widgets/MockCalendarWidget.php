<?php

declare(strict_types=1);

namespace Modules\UI\Tests\Unit\Widgets;

use Filament\Forms\Components\DateTimePicker;
use Filament\Forms\Components\TextInput;
<<<<<<< HEAD
=======
use Filament\Schemas\Components\Component;
>>>>>>> laraxot/develop
use Modules\UI\Filament\Widgets\BaseCalendarWidget;

/**
 * Widget di supporto per i test del BaseCalendarWidget.
 */
class MockCalendarWidget extends BaseCalendarWidget
{
    public string $model = MockEventModel::class;

    /**
     * @param array<string, mixed> $fetchInfo
<<<<<<< HEAD
     *
     * @return array<int, array{id:int, title:string, start:string, end:string, color:string}>
=======
     * @param array<string, mixed> $fetchInfo
     *
     * @return array<int, array<string, string|int>>
     *                                                                                         =======
     * @return array<int, array{id:int, title:string, start:string, end:string, color:string}>
     *                                                                                         >>>>>>> a8fbb3e (.)
     *                                                                                         =======
     * @return array<int, array{id:int, title:string, start:string, end:string, color:string}>
     *                                                                                         >>>>>>> 24eb066 (Lint)
     *                                                                                         =======
     * @return array<int, array{id:int, title:string, start:string, end:string, color:string}>
     *                                                                                         >>>>>>> laraxot/develop
>>>>>>> laraxot/develop
     */
    public function fetchEvents(array $fetchInfo): array
    {
        unset($fetchInfo);

        return [
            [
                'id' => 1,
                'title' => 'Test Event 1',
                'start' => '2025-01-01T10:00:00',
                'end' => '2025-01-01T12:00:00',
                'color' => '#3B82F6',
            ],
            [
                'id' => 2,
                'title' => 'Test Event 2',
                'start' => '2025-01-02T14:00:00',
                'end' => '2025-01-02T16:00:00',
                'color' => '#10B981',
            ],
        ];
    }

    /**
<<<<<<< HEAD
     * @return array<int, \Filament\Forms\Components\Component>
=======
     * @return array<int, Component>
>>>>>>> laraxot/develop
     */
    public function getFormSchema(): array
    {
        return [
            TextInput::make('title')->required(),
            DateTimePicker::make('start')->required(),
            DateTimePicker::make('end')->required(),
        ];
    }
}
