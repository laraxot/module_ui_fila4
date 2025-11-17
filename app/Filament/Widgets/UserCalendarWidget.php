<?php

declare(strict_types=1);

namespace Modules\UI\Filament\Widgets;

use Filament\Forms\Components\DateTimePicker;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Components\Component;
use Filament\Schemas\Components\Grid;
use Illuminate\Support\Str;
use Modules\Xot\Datas\XotData;
use Modules\Xot\Filament\Widgets\XotBaseWidget;

final class UserCalendarWidget extends XotBaseWidget
{
    public string $type;

    protected string $view = 'ui::filament.widgets.user-calendar';

    public function getActionName(string $function): string
    {
        $actionSuffix = $this->createActionSuffix($function);
        $model = $this->resolveModelClass();

        if ($model === '') {
            return '';
        }

        return $this->buildActionClass($model, $actionSuffix);
    }

    public function fetchEvents(array $fetchInfo): array
    {
        $action = $this->getActionName(__FUNCTION__);

        if (! $this->isActionValid($action)) {
            return [];
        }

        return $this->executeAction($action, $fetchInfo);
    }

    /**
     * @return array<int|string, Component>
     */
    public function getFormSchema(): array
    {
        $action = $this->getActionName(__FUNCTION__);

        if (! $this->isActionValid($action)) {
            return $this->getFallbackFormSchema();
        }

        $result = $this->executeAction($action);

        // PHPStan L10: Type narrowing per assicurare che tutti gli elementi siano Component
        /** @var array<int|string, Component> $schema */
        $schema = [];
        foreach ($result as $key => $item) {
            if ($item instanceof Component) {
                $schema[$key] = $item;
            }
        }

        return $schema;
    }

    public function onDateSelect(string $_start, ?string $_end, bool $_allDay, ?array $_view, ?array $_resource): void
    {
        // Placeholder for future implementation
    }

    /**
     * Crea il suffisso dell'action dal nome della funzione
     */
    private function createActionSuffix(string $function): string
    {
        return Str::of($function)->studly()->append('Action')->toString();
    }

    /**
     * Risolve la classe del model dal resource
     */
    private function resolveModelClass(): string
    {
        $resource = XotData::make()->getUserResourceClassByType($this->type);
        $model = (string) $resource;

        if ($model === '' || ! class_exists($model)) {
            return '';
        }

        return $this->extractModelFromInstance($model);
    }

    /**
     * Estrae il model dall'istanza del resource
     */
    private function extractModelFromInstance(string $model): string
    {
        $modelInstance = app($model);

        if (! is_object($modelInstance) || ! method_exists($modelInstance, 'getModel')) {
            return $model;
        }

        $modelResult = $modelInstance->getModel();

        return is_string($modelResult) ? $modelResult : $model;
    }

    /**
     * Costruisce il nome della classe action
     */
    private function buildActionClass(string $model, string $actionSuffix): string
    {
        return Str::of($model)
            ->replace('\\Models\\', '\\Actions\\')
            ->append('\\Calendar\\'.$actionSuffix)
            ->toString();
    }

    /**
     * Verifica se l'action è valida
     */
    private function isActionValid(string $action): bool
    {
        return $action !== '' && class_exists($action);
    }

    /**
     * Esegue l'action con i parametri forniti
     *
     * @return array<int|string, mixed>
     */
    private function executeAction(string $action, mixed $parameters = null): array
    {
        $instance = app($action);

        if (! is_object($instance) || ! method_exists($instance, 'execute')) {
            return $parameters === null ? $this->getFallbackFormSchema() : [];
        }

        /** @var mixed $result */
        $result = $parameters !== null
            ? $instance->execute($parameters)
            : $instance->execute();

        return is_array($result) ? $result : ($parameters === null ? $this->getFallbackFormSchema() : []);
    }

    /**
     * Schema di fallback per il form
     *
     * @return array<int|string, Component>
     */
    private function getFallbackFormSchema(): array
    {
        return [
            TextInput::make('title'),
            Grid::make()
                ->schema([
                    DateTimePicker::make('starts_at'),
                    DateTimePicker::make('ends_at'),
                ]),
        ];
    }
}
