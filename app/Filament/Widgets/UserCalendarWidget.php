<?php

declare(strict_types=1);

namespace Modules\UI\Filament\Widgets;

use Filament\Forms\Components\DateTimePicker;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Components\Grid;
use Filament\Widgets\Widget;
use Illuminate\Support\Str;
use Modules\Xot\Datas\XotData;

class UserCalendarWidget extends Widget
{
    protected string $view = 'ui::filament.widgets.user-calendar';

    public string $type;

    public function getActionName(string $function): string
    {
        $action_suffix = Str::of($function)->studly()->append('Action')->toString();
        $resource = XotData::make()->getUserResourceClassByType($this->type);
        $model = $resource::getModel();
        $modelString = is_string($model) ? $model : (string) $model;
        $action = Str::of($modelString)
            ->replace('\Models\\', '\\Actions\\')
            ->append('\\Calendar\\'.$action_suffix)
            ->toString();

        return $action;
    }

    /**
     * @param array<string, mixed> $fetchInfo
     *
<<<<<<< HEAD
=======
     *
>>>>>>> d7dfa0b6 (.)
     * @return array<int, array<string, mixed>>
     */
    public function fetchEvents(array $fetchInfo): array
    {
        $action = $this->getActionName(__FUNCTION__);

<<<<<<< HEAD
        if (! class_exists($action)) {
=======
        if (!class_exists($action)) {
        if (! class_exists($action)) {
        if (! class_exists($action)) {
>>>>>>> d7dfa0b6 (.)
            return [];
        }

        $actionInstance = app($action);
<<<<<<< HEAD
        if (! is_object($actionInstance) || ! method_exists($actionInstance, 'execute')) {
            return [];
        }

        $resultRaw = $actionInstance->execute($fetchInfo);

        if (! self::isValidEventsArray($resultRaw)) {
=======
        if (!is_object($actionInstance) || !method_exists($actionInstance, 'execute')) {
        if (! is_object($actionInstance) || ! method_exists($actionInstance, 'execute')) {
        if (! is_object($actionInstance) || ! method_exists($actionInstance, 'execute')) {
            return [];
        }

        $result = $actionInstance->execute($fetchInfo);
        if (!is_array($result)) {
>>>>>>> d7dfa0b6 (.)
            return [];
        }

        /** @var array<int, array<string, mixed>> $result */
<<<<<<< HEAD
        $result = $resultRaw;

=======
        if (! is_array($result)) {
            return [];
        }

        /* @var array<int, array<string, mixed>> $result */
>>>>>>> d7dfa0b6 (.)
        return $result;
    }

    /**
<<<<<<< HEAD
     * Validate that the given value is an array of events with string keys.
     */
    private static function isValidEventsArray(mixed $value): bool
    {
        if (! is_array($value)) {
            return false;
        }

        foreach ($value as $event) {
            if (! is_array($event)) {
                return false;
            }

            foreach (array_keys($event) as $key) {
                if (! is_string($key)) {
                    return false;
                }
            }
        }

        return true;
    }

    /**
     * @return array<int, TextInput|Grid>
=======
     * @return array<int, \Filament\Forms\Components\TextInput|\Filament\Schemas\Components\Grid>
     * @return array<int, TextInput|Grid>
     * @return array<int, TextInput|Grid>
>>>>>>> d7dfa0b6 (.)
     */
    public function getFormSchema(): array
    {
        $action = $this->getActionName(__FUNCTION__);

        if (class_exists($action)) {
            $actionInstance = app($action);
            if (is_object($actionInstance) && method_exists($actionInstance, 'execute')) {
                $resultRaw = $actionInstance->execute();
                if (is_array($resultRaw)) {
<<<<<<< HEAD
                    /** @var array<int, TextInput|Grid> $result */
                    $result = $resultRaw;

=======
                    /** @var array<int, \Filament\Forms\Components\TextInput|\Filament\Schemas\Components\Grid> $result */
                    $result = $resultRaw;
                    /** @var array<int, TextInput|Grid> $result */
                    $result = $resultRaw;

                    /** @var array<int, TextInput|Grid> $result */
                    $result = $resultRaw;

>>>>>>> d7dfa0b6 (.)
                    return $result;
                }
            }
        }

        // Fallback schema
        return [
            TextInput::make('title'),
            Grid::make()
                ->schema([
                    DateTimePicker::make('starts_at'),
                    DateTimePicker::make('ends_at'),
                ]),
        ];
    }

    public function onDateSelect(string $start, ?string $end, bool $allDay, ?array $view, ?array $resource): void
    {
        // TODO: Implementare la logica per la selezione della data
    }
}
