<?php

declare(strict_types=1);

namespace Modules\UI\Filament\Tables\Columns;

<<<<<<< HEAD
use Modules\Xot\Filament\Tables\Columns\XotBaseColumnGroup;

final class DummyActionsColumn extends XotBaseColumnGroup
{
    protected string $view = 'ui::filament.tables.columns.dummy-actions-column';
=======
<<<<<<< HEAD
use Modules\Xot\Filament\Tables\Columns\XotBaseColumnGroup;
=======
<<<<<<< HEAD
use Filament\Actions\Action;
use Filament\Tables\Columns\Column;
=======
<<<<<<< HEAD
use Filament\Actions\Action;
use Filament\Tables\Columns\Column;
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 1899c5f (.)
use Filament\Tables\Columns\ColumnGroup;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\ViewColumn;
>>>>>>> 6c0b3515 (.)

final class DummyActionsColumn extends XotBaseColumnGroup
{
<<<<<<< HEAD
    protected string $view = 'ui::filament.tables.columns.dummy-actions-column';
=======
<<<<<<< HEAD
=======
=======
=======
use Filament\Tables\Columns\ColumnGroup;
>>>>>>> b93ef594b4 (.)
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\ViewColumn;

class DummyActionsColumn extends ColumnGroup
{
<<<<<<< HEAD
    

>>>>>>> a12f125f4a (.)
=======
>>>>>>> b93ef594b4 (.)
=======
use Filament\Tables\Actions\Action;
use Filament\Tables\Columns\Column;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\ViewColumn;
use Filament\Tables\Columns\ColumnGroup;

class DummyActionsColumn extends ColumnGroup
{
    

>>>>>>> origin/develop
>>>>>>> 1899c5f (.)
    protected array $actions = [];

    public function actions(array $actions): static
    {
        $this->actions = $actions;

        return $this;
    }

    public function getActions(): array
    {
        return $this->actions;
    }

    protected function setUp(): void
    {
        parent::setUp();
        $this->wrapHeader(true);
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 1899c5f (.)

        $this->extraHeaderAttributes(['class' => 'hidden no-header-group', 'style' => 'display: none']);
        $this->columns([
            IconColumn::make('uno')
                ->label('')
                ->default(false)
                ->boolean()
                ->extraCellAttributes(['class' => 'px-0'])
                ->action(Action::make('uno-action')
                    ->label('Prova Action')
                    ->action(function () {
                        dddx('Azione prova eseguita1!');
                    })),
            IconColumn::make('due')
                ->label('')
                ->default(true)
                ->boolean()
                ->extraCellAttributes(['class' => 'px-0'])
                ->action(Action::make('due-action')
                    ->label('Prova Action')
                    ->action(function () {
                        dddx('Azione prova eseguita2!');
                    })),
<<<<<<< HEAD
=======
=======
        
        $this->extraHeaderAttributes(['class' => 'hidden no-header-group','style' => 'display: none']); 
=======

        $this->extraHeaderAttributes(['class' => 'hidden no-header-group', 'style' => 'display: none']);
>>>>>>> b93ef594b4 (.)
        $this->columns([
            IconColumn::make('uno')
                ->label('')
                ->default(false)
                ->boolean()
                ->extraCellAttributes(['class' => 'px-0'])
                ->action(Action::make('uno-action')
                    ->label('Prova Action')
                    ->action(function () {
                        dddx('Azione prova eseguita1!');
                    })),
            IconColumn::make('due')
<<<<<<< HEAD
=======
        
        $this->extraHeaderAttributes(['class' => 'hidden no-header-group','style' => 'display: none']); 
        $this->columns([
            IconColumn::make('uno')
            ->label('')
            ->default(false)
            ->boolean()
            ->extraCellAttributes(['class' => 'px-0'])
            ->action(Action::make('uno-action')
                ->label('Prova Action')
                
                ->action(function () {
                    dddx('Azione prova eseguita1!');
                })),
            IconColumn::make('due')
>>>>>>> origin/develop
            ->label('')
            ->default(true)
            ->boolean()
            ->extraCellAttributes(['class' => 'px-0'])
            ->action(Action::make('due-action')
                ->label('Prova Action')
                ->action(function () {
                    dddx('Azione prova eseguita2!');
                })),
<<<<<<< HEAD
>>>>>>> a12f125f4a (.)
=======
                ->label('')
                ->default(true)
                ->boolean()
                ->extraCellAttributes(['class' => 'px-0'])
                ->action(Action::make('due-action')
                    ->label('Prova Action')
                    ->action(function () {
                        dddx('Azione prova eseguita2!');
                    })),
>>>>>>> b93ef594b4 (.)
=======
>>>>>>> origin/develop
>>>>>>> 1899c5f (.)
        ]);
    }
>>>>>>> 6c0b3515 (.)
>>>>>>> laraxot/develop
}
