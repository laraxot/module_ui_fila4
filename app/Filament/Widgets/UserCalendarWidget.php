<?php

namespace Modules\UI\Filament\Widgets;

use Filament\Forms\Components\DateTimePicker;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Components\Grid;
// use Saade\FilamentFullCalendar\Widgets\FullCalendarWidget;
use Filament\Widgets\Widget;
use Illuminate\Support\Str;
use Modules\Xot\Datas\XotData;

class UserCalendarWidget extends Widget
{
    // use InteractsWithEvents;
    protected string $view = 'ui::filament.widgets.user-calendar';

    public string $type;

    public function getActionName(string $function): string
    {
        $action_suffix = Str::of((string) $function)->studly()->append('Action')->toString();
        $resource = XotData::make()->getUserResourceClassByType($this->type);
        $model = $resource::getModel();
        $action = Str::of((string) $model)
            ->replace('\Models\\', '\Actions\\')
            ->append('\Calendar\\'.$action_suffix)
            ->toString();

        return $action;
    }

    /**
     * @return array<string, mixed>
     */
    public function fetchEvents(array $fetchInfo): array
    {
        $action = $this->getActionName(__FUNCTION__);

        $actionInstance = app($action);
        if (is_object($actionInstance) && method_exists($actionInstance, 'execute')) {
            $result = $actionInstance->execute($fetchInfo);
            /** @var array<string, mixed> */
            return is_array($result) ? $result : [];
        }

        return [];
    }

    /**
     * @return array<string, mixed>
     */
    public function getFormSchema(): array
    {
        $action = $this->getActionName(__FUNCTION__);

        if (class_exists($action)) {
            $actionInstance = app($action);
            if (is_object($actionInstance) && method_exists($actionInstance, 'execute')) {
                $result = $actionInstance->execute();
                /** @var array<string, mixed> */
                return is_array($result) ? $result : [];
            }
        }

        // Fallback schema
        $schema = [
            TextInput::make('title'),

            Grid::make()
                ->schema([
                    DateTimePicker::make('starts_at'),
                    DateTimePicker::make('ends_at'),
                ]),
        ];
        
        /** @phpstan-ignore return.type */
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
    }
}
