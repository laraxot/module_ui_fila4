<?php

declare(strict_types=1);

namespace Modules\UI\Filament\Widgets;

use Filament\Forms\Components\DateTimePicker;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Components\Grid;
<<<<<<< HEAD
<<<<<<< HEAD
// use Saade\FilamentFullCalendar\Widgets\FullCalendarWidget;
=======
>>>>>>> a8fbb3e (.)
=======
>>>>>>> 24eb066 (Lint)
use Filament\Widgets\Widget;
use Illuminate\Support\Str;
use Modules\Xot\Datas\XotData;

class UserCalendarWidget extends Widget
{
<<<<<<< HEAD
<<<<<<< HEAD
    // use InteractsWithEvents;
=======
>>>>>>> a8fbb3e (.)
=======
>>>>>>> 24eb066 (Lint)
    protected string $view = 'ui::filament.widgets.user-calendar';

    public string $type;

    public function getActionName(string $function): string
    {
        $action_suffix = Str::of($function)->studly()->append('Action')->toString();
        $resource = XotData::make()->getUserResourceClassByType($this->type);
        $model = $resource::getModel();
        $modelString = is_string($model) ? $model : (string) $model;
        $action = Str::of($modelString)
<<<<<<< HEAD
<<<<<<< HEAD
            ->replace('\Models\\', '\Actions\\')
            ->append('\Calendar\\'.$action_suffix)
=======
            ->replace('\Models\\', '\\Actions\\')
            ->append('\\Calendar\\'.$action_suffix)
>>>>>>> a8fbb3e (.)
=======
            ->replace('\Models\\', '\\Actions\\')
            ->append('\\Calendar\\'.$action_suffix)
>>>>>>> 24eb066 (Lint)
            ->toString();

        return $action;
    }

    /**
     * @param array<string, mixed> $fetchInfo
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
     *
>>>>>>> 359d970 (.)
=======
     *
>>>>>>> 161e28f (Lint)
=======
     *
>>>>>>> a8fbb3e (.)
=======
     *
>>>>>>> 24eb066 (Lint)
     * @return array<int, array<string, mixed>>
     */
    public function fetchEvents(array $fetchInfo): array
    {
        $action = $this->getActionName(__FUNCTION__);

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        if (!class_exists($action)) {
=======
        if (! class_exists($action)) {
>>>>>>> 359d970 (.)
=======
        if (! class_exists($action)) {
>>>>>>> 161e28f (Lint)
=======
        if (! class_exists($action)) {
>>>>>>> a8fbb3e (.)
=======
        if (! class_exists($action)) {
>>>>>>> 24eb066 (Lint)
            return [];
        }

        $actionInstance = app($action);
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        if (!is_object($actionInstance) || !method_exists($actionInstance, 'execute')) {
=======
        if (! is_object($actionInstance) || ! method_exists($actionInstance, 'execute')) {
>>>>>>> 359d970 (.)
=======
        if (! is_object($actionInstance) || ! method_exists($actionInstance, 'execute')) {
>>>>>>> 161e28f (Lint)
            return [];
        }

        $result = $actionInstance->execute($fetchInfo);
<<<<<<< HEAD
<<<<<<< HEAD
        if (!is_array($result)) {
            return [];
        }
        /** @var array<int, array<string, mixed>> $result */
=======
=======
>>>>>>> 161e28f (Lint)
        if (! is_array($result)) {
            return [];
        }

        /* @var array<int, array<string, mixed>> $result */
<<<<<<< HEAD
>>>>>>> 359d970 (.)
=======
>>>>>>> 161e28f (Lint)
=======
=======
>>>>>>> 24eb066 (Lint)
        if (! is_object($actionInstance) || ! method_exists($actionInstance, 'execute')) {
            return [];
        }

        $resultRaw = $actionInstance->execute($fetchInfo);

        if (! self::isValidEventsArray($resultRaw)) {
            return [];
        }

        /** @var array<int, array<string, mixed>> $result */
        $result = $resultRaw;

<<<<<<< HEAD
>>>>>>> a8fbb3e (.)
=======
>>>>>>> 24eb066 (Lint)
        return $result;
    }

    /**
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
     * @return array<int, \Filament\Forms\Components\TextInput|\Filament\Schemas\Components\Grid>
=======
     * @return array<int, TextInput|Grid>
>>>>>>> 359d970 (.)
=======
     * @return array<int, TextInput|Grid>
>>>>>>> 161e28f (Lint)
=======
=======
>>>>>>> 24eb066 (Lint)
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
<<<<<<< HEAD
>>>>>>> a8fbb3e (.)
=======
>>>>>>> 24eb066 (Lint)
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
                    /** @var array<int, \Filament\Forms\Components\TextInput|\Filament\Schemas\Components\Grid> $result */
                    $result = $resultRaw;
=======
                    /** @var array<int, TextInput|Grid> $result */
                    $result = $resultRaw;

>>>>>>> 359d970 (.)
=======
                    /** @var array<int, TextInput|Grid> $result */
                    $result = $resultRaw;

>>>>>>> 161e28f (Lint)
=======
                    /** @var array<int, TextInput|Grid> $result */
                    $result = $resultRaw;

>>>>>>> a8fbb3e (.)
=======
                    /** @var array<int, TextInput|Grid> $result */
                    $result = $resultRaw;

>>>>>>> 24eb066 (Lint)
                    return $result;
                }
            }
        }

        // Fallback schema
<<<<<<< HEAD
<<<<<<< HEAD
        $schema = [
=======
        return [
>>>>>>> a8fbb3e (.)
            TextInput::make('title'),

=======
        return [
            TextInput::make('title'),
>>>>>>> 24eb066 (Lint)
            Grid::make()
                ->schema([
                    DateTimePicker::make('starts_at'),
                    DateTimePicker::make('ends_at'),
                ]),
        ];
<<<<<<< HEAD

        return $schema;
    }

    /*
    protected function modalActions(): array
    {
        return [
            \Saade\FilamentFullCalendar\Actions\EditAction::make(),
            \Saade\FilamentFullCalendar\Actions\DeleteAction::make(),
        ];
    }
    */

    public function onDateSelect(string $start, ?string $end, bool $allDay, ?array $view, ?array $resource): void
    {
        // TODO: Implementare la logica per la selezione della data
        // dd('test');
=======
>>>>>>> 24eb066 (Lint)
    }

    public function onDateSelect(string $start, ?string $end, bool $allDay, ?array $view, ?array $resource): void
    {
        // TODO: Implementare la logica per la selezione della data
    }
}
