<?php

declare(strict_types=1);

namespace Modules\UI\Filament\Forms\Components;

<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> 1899c5f (.)
use Filament\Forms\Components\Field;
use Filament\Schemas\Components\Grid;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
<<<<<<< HEAD
=======
=======
>>>>>>> origin/develop
>>>>>>> 1899c5f (.)
use Filament\Forms;
use Illuminate\Database\Eloquent\Model;
use Webmozart\Assert\Assert;

// use Squire\Models\Country;

<<<<<<< HEAD
class AddressField extends Field
=======
<<<<<<< HEAD
class AddressField extends Field
=======
class AddressField extends Forms\Components\Field
>>>>>>> origin/develop
>>>>>>> 1899c5f (.)
{
    /** @var string|callable|null */
    public $relationship;

<<<<<<< HEAD
    protected string $view = 'filament-schemas::components.grid';
=======
<<<<<<< HEAD
    protected string $view = 'filament-schemas::components.grid';
=======
    protected string $view = 'filament-forms::components.group';
>>>>>>> origin/develop
>>>>>>> 1899c5f (.)

    protected function setUp(): void
    {
        parent::setUp();

<<<<<<< HEAD
        $this->afterStateHydrated(function (AddressField $_component, null|Model $record) {
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        $this->afterStateHydrated(function (AddressField $_component, null|Model $record) {
=======
        $this->afterStateHydrated(function (AddressField $component, ?Model $record) {
>>>>>>> a12f125f4a (.)
=======
        $this->afterStateHydrated(function (AddressField $_component, null|Model $record) {
>>>>>>> b93ef594b4 (.)
=======
        $this->afterStateHydrated(function (AddressField $component, ?Model $record) {
>>>>>>> origin/develop
>>>>>>> 1899c5f (.)
            $data = [
                'country' => null,
                'street' => null,
                'city' => null,
                'state' => null,
                'zip' => null,
            ];
<<<<<<< HEAD

            //if ($record && method_exists($record, 'getRelationValue')) {
=======
<<<<<<< HEAD

            //if ($record && method_exists($record, 'getRelationValue')) {
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> b93ef594b4 (.)
>>>>>>> 1899c5f (.)
            $relationship = $this->getRelationship();
            if ($relationship && $record?->relationLoaded($relationship)) {
                $address = $record->getRelationValue($relationship);
                if (null !== $address && is_object($address) && method_exists($address, 'toArray')) {
                    $data = $address->toArray();
<<<<<<< HEAD
                }
            }

=======
<<<<<<< HEAD
                }
            }

=======
=======
            
            //if ($record && method_exists($record, 'getRelationValue')) {
>>>>>>> origin/develop
                $relationship = $this->getRelationship();
                if ($relationship && $record?->relationLoaded($relationship)) {
                    $address = $record->getRelationValue($relationship);
                    if (null !== $address && is_object($address) && method_exists($address, 'toArray')) {
                        $data = $address->toArray();
                    }
                }
<<<<<<< HEAD
>>>>>>> a12f125f4a (.)
=======
                }
            }

>>>>>>> b93ef594b4 (.)
=======
>>>>>>> origin/develop
>>>>>>> 1899c5f (.)
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
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 1899c5f (.)
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
=======
        $record?->touch();
=======
        if ($record instanceof Model) {
            $record->touch();
        }
>>>>>>> b93ef594b4 (.)
    }

    public function getDefaultChildComponents(?string $key = null): array
    {
        return [
<<<<<<< HEAD
            Grid::make()
                ->schema([
                    Select::make('country')
=======
        $record?->touch();
    }

    public function getChildComponents(): array
    {
        return [
            Forms\Components\Grid::make()
                ->schema([
                    Forms\Components\Select::make('country')
>>>>>>> origin/develop
                        ->searchable(),
                    // ->getSearchResultsUsing(fn (string $query) => Country::where('name', 'like', "%{$query}%")->pluck('name', 'id'))
                    // ->getOptionLabelUsing(fn ($value): ?string => Country::firstWhere('id', $value)->getAttribute('name')),
                ]),
<<<<<<< HEAD
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
>>>>>>> a12f125f4a (.)
=======
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
>>>>>>> b93ef594b4 (.)
=======
            Forms\Components\TextInput::make('street')

                ->maxLength(255),
            Forms\Components\Grid::make(3)
                ->schema([
                    Forms\Components\TextInput::make('city')
                        ->maxLength(255),
                    Forms\Components\TextInput::make('state')

                        ->maxLength(255),
                    Forms\Components\TextInput::make('zip')

                        ->maxLength(255),
                ]),
>>>>>>> origin/develop
>>>>>>> 1899c5f (.)
        ];
    }

    public function getRelationship(): string
    {
        Assert::string($res = $this->evaluate($this->relationship) ?? $this->getName());

        return $res;
    }
}
