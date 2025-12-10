<?php

declare(strict_types=1);

<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
namespace Modules\UI\Tests\Unit\Enums\TableLayoutEnumTest;

>>>>>>> a12f125f4a (.)
=======
>>>>>>> b93ef594b4 (.)
>>>>>>> 1899c5f (.)
namespace Modules\UI\Tests\Unit\Enums;

use Filament\Tables\Columns\Layout\Stack;
use Filament\Tables\Columns\TextColumn;
use Modules\UI\Enums\TableLayoutEnum;
<<<<<<< HEAD
use Tests\TestCase;
=======
<<<<<<< HEAD
<<<<<<< HEAD
use Tests\TestCase;
=======
>>>>>>> a12f125f4a (.)
=======
use Tests\TestCase;
>>>>>>> b93ef594b4 (.)
=======
namespace Modules\UI\Tests\Unit\Enums;

use Tests\TestCase;
use Modules\UI\Enums\TableLayoutEnum;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\Layout\Stack;
>>>>>>> origin/develop
>>>>>>> 1899c5f (.)

class TableLayoutEnumTest extends TestCase
{
    /**
     * Test enum values.
     */
    public function testEnumValues(): void
    {
<<<<<<< HEAD
        static::assertSame('list', TableLayoutEnum::LIST->value);
        static::assertSame('grid', TableLayoutEnum::GRID->value);
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        static::assertSame('list', TableLayoutEnum::LIST->value);
        static::assertSame('grid', TableLayoutEnum::GRID->value);
=======
        $this->assertEquals('list', TableLayoutEnum::LIST->value);
        $this->assertEquals('grid', TableLayoutEnum::GRID->value);
>>>>>>> a12f125f4a (.)
=======
        static::assertSame('list', TableLayoutEnum::LIST->value);
        static::assertSame('grid', TableLayoutEnum::GRID->value);
>>>>>>> b93ef594b4 (.)
=======
        $this->assertEquals('list', TableLayoutEnum::LIST->value);
        $this->assertEquals('grid', TableLayoutEnum::GRID->value);
>>>>>>> origin/develop
>>>>>>> 1899c5f (.)
    }

    /**
     * Test default layout.
     */
    public function testDefaultLayout(): void
    {
        $default = TableLayoutEnum::init();
<<<<<<< HEAD
        static::assertSame(TableLayoutEnum::LIST, $default);
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        static::assertSame(TableLayoutEnum::LIST, $default);
=======
        $this->assertEquals(TableLayoutEnum::LIST, $default);
>>>>>>> a12f125f4a (.)
=======
        static::assertSame(TableLayoutEnum::LIST, $default);
>>>>>>> b93ef594b4 (.)
=======
        $this->assertEquals(TableLayoutEnum::LIST, $default);
>>>>>>> origin/develop
>>>>>>> 1899c5f (.)
    }

    /**
     * Test toggle functionality.
     */
    public function testToggleFunctionality(): void
    {
        $list = TableLayoutEnum::LIST;
        $grid = TableLayoutEnum::GRID;

<<<<<<< HEAD
        static::assertSame($grid, $list->toggle());
        static::assertSame($list, $grid->toggle());
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        static::assertSame($grid, $list->toggle());
        static::assertSame($list, $grid->toggle());
=======
        $this->assertEquals($grid, $list->toggle());
        $this->assertEquals($list, $grid->toggle());
>>>>>>> a12f125f4a (.)
=======
        static::assertSame($grid, $list->toggle());
        static::assertSame($list, $grid->toggle());
>>>>>>> b93ef594b4 (.)
=======
        $this->assertEquals($grid, $list->toggle());
        $this->assertEquals($list, $grid->toggle());
>>>>>>> origin/develop
>>>>>>> 1899c5f (.)
    }

    /**
     * Test layout type checks.
     */
    public function testLayoutTypeChecks(): void
    {
        $list = TableLayoutEnum::LIST;
        $grid = TableLayoutEnum::GRID;

<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 1899c5f (.)
        static::assertTrue($list->isListLayout());
        static::assertFalse($list->isGridLayout());

        static::assertTrue($grid->isGridLayout());
        static::assertFalse($grid->isListLayout());
<<<<<<< HEAD
=======
=======
=======
>>>>>>> origin/develop
        $this->assertTrue($list->isListLayout());
        $this->assertFalse($list->isGridLayout());

        $this->assertTrue($grid->isGridLayout());
        $this->assertFalse($grid->isListLayout());
<<<<<<< HEAD
>>>>>>> a12f125f4a (.)
=======
        static::assertTrue($list->isListLayout());
        static::assertFalse($list->isGridLayout());

        static::assertTrue($grid->isGridLayout());
        static::assertFalse($grid->isListLayout());
>>>>>>> b93ef594b4 (.)
=======
>>>>>>> origin/develop
>>>>>>> 1899c5f (.)
    }

    /**
     * Test grid configuration.
     */
    public function testGridConfiguration(): void
    {
        $grid = TableLayoutEnum::GRID;
        $config = $grid->getTableContentGrid();

<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> b93ef594b4 (.)
>>>>>>> 1899c5f (.)
        static::assertIsArray($config);
        static::assertArrayHasKey('sm', $config);
        static::assertArrayHasKey('md', $config);
        static::assertArrayHasKey('lg', $config);
        static::assertArrayHasKey('xl', $config);
        static::assertArrayHasKey('2xl', $config);
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
=======
>>>>>>> origin/develop
        $this->assertIsArray($config);
        $this->assertArrayHasKey('sm', $config);
        $this->assertArrayHasKey('md', $config);
        $this->assertArrayHasKey('lg', $config);
        $this->assertArrayHasKey('xl', $config);
        $this->assertArrayHasKey('2xl', $config);
<<<<<<< HEAD
>>>>>>> a12f125f4a (.)
=======
>>>>>>> b93ef594b4 (.)
=======
>>>>>>> origin/develop
>>>>>>> 1899c5f (.)
    }

    /**
     * Test table columns method.
     */
    public function testTableColumnsMethod(): void
    {
        $list = TableLayoutEnum::LIST;
        $grid = TableLayoutEnum::GRID;

        $listColumns = [
            TextColumn::make('name'),
            TextColumn::make('email'),
        ];

        $gridColumns = [
            Stack::make([
                TextColumn::make('name'),
                TextColumn::make('email'),
            ]),
        ];

        // Test list layout
        $result = $list->getTableColumns($listColumns, $gridColumns);
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 1899c5f (.)
        static::assertSame($listColumns, $result);

        // Test grid layout
        $result = $grid->getTableColumns($listColumns, $gridColumns);
        static::assertSame($gridColumns, $result);
<<<<<<< HEAD
=======
=======
=======
>>>>>>> origin/develop
        $this->assertEquals($listColumns, $result);

        // Test grid layout
        $result = $grid->getTableColumns($listColumns, $gridColumns);
        $this->assertEquals($gridColumns, $result);
<<<<<<< HEAD
>>>>>>> a12f125f4a (.)
=======
        static::assertSame($listColumns, $result);

        // Test grid layout
        $result = $grid->getTableColumns($listColumns, $gridColumns);
        static::assertSame($gridColumns, $result);
>>>>>>> b93ef594b4 (.)
=======
>>>>>>> origin/develop
>>>>>>> 1899c5f (.)
    }

    /**
     * Test options method.
     */
    public function testOptionsMethod(): void
    {
        $options = TableLayoutEnum::getOptions();

<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> b93ef594b4 (.)
>>>>>>> 1899c5f (.)
        static::assertIsArray($options);
        static::assertArrayHasKey('list', $options);
        static::assertArrayHasKey('grid', $options);
        static::assertSame(TableLayoutEnum::LIST, $options['list']);
        static::assertSame(TableLayoutEnum::GRID, $options['grid']);
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
=======
>>>>>>> origin/develop
        $this->assertIsArray($options);
        $this->assertArrayHasKey('list', $options);
        $this->assertArrayHasKey('grid', $options);
        $this->assertEquals(TableLayoutEnum::LIST, $options['list']);
        $this->assertEquals(TableLayoutEnum::GRID, $options['grid']);
<<<<<<< HEAD
>>>>>>> a12f125f4a (.)
=======
>>>>>>> b93ef594b4 (.)
=======
>>>>>>> origin/develop
>>>>>>> 1899c5f (.)
    }

    /**
     * Test container classes.
     */
    public function testContainerClasses(): void
    {
        $list = TableLayoutEnum::LIST;
        $grid = TableLayoutEnum::GRID;

        $listClasses = $list->getContainerClasses();
        $gridClasses = $grid->getContainerClasses();

<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> b93ef594b4 (.)
>>>>>>> 1899c5f (.)
        static::assertIsString($listClasses);
        static::assertIsString($gridClasses);
        static::assertNotEmpty($listClasses);
        static::assertNotEmpty($gridClasses);
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
=======
>>>>>>> origin/develop
        $this->assertIsString($listClasses);
        $this->assertIsString($gridClasses);
        $this->assertNotEmpty($listClasses);
        $this->assertNotEmpty($gridClasses);
<<<<<<< HEAD
>>>>>>> a12f125f4a (.)
=======
>>>>>>> b93ef594b4 (.)
=======
>>>>>>> origin/develop
>>>>>>> 1899c5f (.)
    }

    /**
     * Test translation support.
     */
    public function testTranslationSupport(): void
    {
        $list = TableLayoutEnum::LIST;
        $grid = TableLayoutEnum::GRID;

        // Test that labels are translatable
        $listLabel = $list->getLabel();
        $gridLabel = $grid->getLabel();

<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> b93ef594b4 (.)
>>>>>>> 1899c5f (.)
        static::assertIsString($listLabel);
        static::assertIsString($gridLabel);
        static::assertNotEmpty($listLabel);
        static::assertNotEmpty($gridLabel);
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
=======
>>>>>>> origin/develop
        $this->assertIsString($listLabel);
        $this->assertIsString($gridLabel);
        $this->assertNotEmpty($listLabel);
        $this->assertNotEmpty($gridLabel);
<<<<<<< HEAD
>>>>>>> a12f125f4a (.)
=======
>>>>>>> b93ef594b4 (.)
=======
>>>>>>> origin/develop
>>>>>>> 1899c5f (.)
    }

    /**
     * Test color and icon methods.
     */
    public function testColorAndIconMethods(): void
    {
        $list = TableLayoutEnum::LIST;
        $grid = TableLayoutEnum::GRID;

        // Test colors
        $listColor = $list->getColor();
        $gridColor = $grid->getColor();

<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> b93ef594b4 (.)
>>>>>>> 1899c5f (.)
        static::assertIsString($listColor);
        static::assertIsString($gridColor);
        static::assertNotEmpty($listColor);
        static::assertNotEmpty($gridColor);
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
=======
>>>>>>> origin/develop
        $this->assertIsString($listColor);
        $this->assertIsString($gridColor);
        $this->assertNotEmpty($listColor);
        $this->assertNotEmpty($gridColor);
<<<<<<< HEAD
>>>>>>> a12f125f4a (.)
=======
>>>>>>> b93ef594b4 (.)
=======
>>>>>>> origin/develop
>>>>>>> 1899c5f (.)

        // Test icons
        $listIcon = $list->getIcon();
        $gridIcon = $grid->getIcon();

<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> b93ef594b4 (.)
>>>>>>> 1899c5f (.)
        static::assertIsString($listIcon);
        static::assertIsString($gridIcon);
        static::assertNotEmpty($listIcon);
        static::assertNotEmpty($gridIcon);
<<<<<<< HEAD
    }
}
=======
<<<<<<< HEAD
=======
=======
>>>>>>> origin/develop
        $this->assertIsString($listIcon);
        $this->assertIsString($gridIcon);
        $this->assertNotEmpty($listIcon);
        $this->assertNotEmpty($gridIcon);
<<<<<<< HEAD
>>>>>>> a12f125f4a (.)
=======
>>>>>>> b93ef594b4 (.)
    }
}
=======
    }
} 
>>>>>>> origin/develop
>>>>>>> 1899c5f (.)
