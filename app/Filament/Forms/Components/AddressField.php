<?php

declare(strict_types=1);

namespace Modules\UI\Filament\Forms\Components;

use Filament\Forms\Components\Field;
use Filament\Schemas\Components\Grid;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms;
use Illuminate\Database\Eloquent\Model;
use Webmozart\Assert\Assert;

// use Squire\Models\Country;

class AddressField extends Field
{
    /** @var string|callable|null */
    public $relationship;

    protected string $view = 'filament-schemas::components.grid';

    protected function setUp(): void
    {
        parent::setUp();

<<<<<<< HEAD
<<<<<<< HEAD
        $this->afterStateHydrated(function (AddressField $_component, null|Model $record) {
=======
        $this->afterStateHydrated(function (AddressField $component, ?Model $record) {
>>>>>>> 727968c (.)
=======
        $this->afterStateHydrated(function (AddressField $_component, null|Model $record) {
>>>>>>> ef3c5fa (.)
            $data = [
                'country' => null,
                'street' => null,
                'city' => null,
                'state' => null,
                'zip' => null,
            ];

            //if ($record && method_exists($record, 'getRelationValue')) {
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> ef3c5fa (.)
            $relationship = $this->getRelationship();
            if ($relationship && $record?->relationLoaded($relationship)) {
                $address = $record->getRelationValue($relationship);
                if (null !== $address && is_object($address) && method_exists($address, 'toArray')) {
                    $data = $address->toArray();
                }
            }

<<<<<<< HEAD
=======
                $relationship = $this->getRelationship();
                if ($relationship && $record?->relationLoaded($relationship)) {
                    $address = $record->getRelationValue($relationship);
                    if (null !== $address && is_object($address) && method_exists($address, 'toArray')) {
                        $data = $address->toArray();
                    }
                }
>>>>>>> 727968c (.)
=======
>>>>>>> ef3c5fa (.)
            //}
        });

        $this->dehydrated(false);
    }

    public function relationship(string|callable $relationship): static
    {
        $this->relationship = $relationship;

        return $this;
    }

    public function saveRelationships(): void
    {
        $state = $this->getState();
        $record = $this->getRecord();
        $relationship = $record->{$this->getRelationship()}();

        if (null === $relationship) {
            return;
        }
        if ($address = $relationship->first()) {
            $address->update($state);
        } else {
            $relationship->updateOrCreate($state);
        }

<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> ef3c5fa (.)
        if ($record instanceof Model) {
            $record->touch();
        }
    }

    public function getDefaultChildComponents(?string $key = null): array
    {
        return [
            Grid::make()->schema([
                Select::make('country')->searchable(),
                // ->getSearchResultsUsing(fn (string $query) => Country::where('name', 'like', "%{$query}%")->pluck('name', 'id'))
                // ->getOptionLabelUsing(fn ($value): ?string => Country::firstWhere('id', $value)->getAttribute('name')),
            ]),
            TextInput::make('street')->maxLength(255),
            Grid::make(3)->schema([
                TextInput::make('city')->maxLength(255),
                TextInput::make('state')->maxLength(255),
                TextInput::make('zip')->maxLength(255),
            ]),
<<<<<<< HEAD
=======
        $record?->touch();
    }

    public function getChildComponents(): array
    {
        return [
            Grid::make()
                ->schema([
                    Select::make('country')
                        ->searchable(),
                    // ->getSearchResultsUsing(fn (string $query) => Country::where('name', 'like', "%{$query}%")->pluck('name', 'id'))
                    // ->getOptionLabelUsing(fn ($value): ?string => Country::firstWhere('id', $value)->getAttribute('name')),
                ]),
            TextInput::make('street')

                ->maxLength(255),
            Grid::make(3)
                ->schema([
                    TextInput::make('city')
                        ->maxLength(255),
                    TextInput::make('state')

                        ->maxLength(255),
                    TextInput::make('zip')

                        ->maxLength(255),
                ]),
>>>>>>> 727968c (.)
=======
>>>>>>> ef3c5fa (.)
        ];
    }

    public function getRelationship(): string
    {
        Assert::string($res = $this->evaluate($this->relationship) ?? $this->getName());

        return $res;
    }
}
