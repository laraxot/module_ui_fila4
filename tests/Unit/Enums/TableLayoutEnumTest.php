<?php

declare(strict_types=1);

<<<<<<< HEAD
<<<<<<< HEAD
=======
namespace Modules\UI\Tests\Unit\Enums\TableLayoutEnumTest;

>>>>>>> 727968c (.)
=======
>>>>>>> ef3c5fa (.)
namespace Modules\UI\Tests\Unit\Enums;

use Filament\Tables\Columns\Layout\Stack;
use Filament\Tables\Columns\TextColumn;
use Modules\UI\Enums\TableLayoutEnum;
<<<<<<< HEAD
<<<<<<< HEAD
use Tests\TestCase;
=======
>>>>>>> 727968c (.)
=======
use Tests\TestCase;
>>>>>>> ef3c5fa (.)

class TableLayoutEnumTest extends TestCase
{
    /**
     * Test enum values.
     */
    public function testEnumValues(): void
    {
<<<<<<< HEAD
<<<<<<< HEAD
        static::assertSame('list', TableLayoutEnum::LIST->value);
        static::assertSame('grid', TableLayoutEnum::GRID->value);
=======
        $this->assertEquals('list', TableLayoutEnum::LIST->value);
        $this->assertEquals('grid', TableLayoutEnum::GRID->value);
>>>>>>> 727968c (.)
=======
        static::assertSame('list', TableLayoutEnum::LIST->value);
        static::assertSame('grid', TableLayoutEnum::GRID->value);
>>>>>>> ef3c5fa (.)
    }

    /**
     * Test default layout.
     */
    public function testDefaultLayout(): void
    {
        $default = TableLayoutEnum::init();
<<<<<<< HEAD
<<<<<<< HEAD
        static::assertSame(TableLayoutEnum::LIST, $default);
=======
        $this->assertEquals(TableLayoutEnum::LIST, $default);
>>>>>>> 727968c (.)
=======
        static::assertSame(TableLayoutEnum::LIST, $default);
>>>>>>> ef3c5fa (.)
    }

    /**
     * Test toggle functionality.
     */
    public function testToggleFunctionality(): void
    {
        $list = TableLayoutEnum::LIST;
        $grid = TableLayoutEnum::GRID;

<<<<<<< HEAD
<<<<<<< HEAD
        static::assertSame($grid, $list->toggle());
        static::assertSame($list, $grid->toggle());
=======
        $this->assertEquals($grid, $list->toggle());
        $this->assertEquals($list, $grid->toggle());
>>>>>>> 727968c (.)
=======
        static::assertSame($grid, $list->toggle());
        static::assertSame($list, $grid->toggle());
>>>>>>> ef3c5fa (.)
    }

    /**
     * Test layout type checks.
     */
    public function testLayoutTypeChecks(): void
    {
        $list = TableLayoutEnum::LIST;
        $grid = TableLayoutEnum::GRID;

<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> ef3c5fa (.)
        static::assertTrue($list->isListLayout());
        static::assertFalse($list->isGridLayout());

        static::assertTrue($grid->isGridLayout());
        static::assertFalse($grid->isListLayout());
<<<<<<< HEAD
=======
        $this->assertTrue($list->isListLayout());
        $this->assertFalse($list->isGridLayout());

        $this->assertTrue($grid->isGridLayout());
        $this->assertFalse($grid->isListLayout());
>>>>>>> 727968c (.)
=======
>>>>>>> ef3c5fa (.)
    }

    /**
     * Test grid configuration.
     */
    public function testGridConfiguration(): void
    {
        $grid = TableLayoutEnum::GRID;
        $config = $grid->getTableContentGrid();

<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> ef3c5fa (.)
        static::assertIsArray($config);
        static::assertArrayHasKey('sm', $config);
        static::assertArrayHasKey('md', $config);
        static::assertArrayHasKey('lg', $config);
        static::assertArrayHasKey('xl', $config);
        static::assertArrayHasKey('2xl', $config);
<<<<<<< HEAD
=======
        $this->assertIsArray($config);
        $this->assertArrayHasKey('sm', $config);
        $this->assertArrayHasKey('md', $config);
        $this->assertArrayHasKey('lg', $config);
        $this->assertArrayHasKey('xl', $config);
        $this->assertArrayHasKey('2xl', $config);
>>>>>>> 727968c (.)
=======
>>>>>>> ef3c5fa (.)
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
<<<<<<< HEAD
=======
>>>>>>> ef3c5fa (.)
        static::assertSame($listColumns, $result);

        // Test grid layout
        $result = $grid->getTableColumns($listColumns, $gridColumns);
        static::assertSame($gridColumns, $result);
<<<<<<< HEAD
=======
        $this->assertEquals($listColumns, $result);

        // Test grid layout
        $result = $grid->getTableColumns($listColumns, $gridColumns);
        $this->assertEquals($gridColumns, $result);
>>>>>>> 727968c (.)
=======
>>>>>>> ef3c5fa (.)
    }

    /**
     * Test options method.
     */
    public function testOptionsMethod(): void
    {
        $options = TableLayoutEnum::getOptions();

<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> ef3c5fa (.)
        static::assertIsArray($options);
        static::assertArrayHasKey('list', $options);
        static::assertArrayHasKey('grid', $options);
        static::assertSame(TableLayoutEnum::LIST, $options['list']);
        static::assertSame(TableLayoutEnum::GRID, $options['grid']);
<<<<<<< HEAD
=======
        $this->assertIsArray($options);
        $this->assertArrayHasKey('list', $options);
        $this->assertArrayHasKey('grid', $options);
        $this->assertEquals(TableLayoutEnum::LIST, $options['list']);
        $this->assertEquals(TableLayoutEnum::GRID, $options['grid']);
>>>>>>> 727968c (.)
=======
>>>>>>> ef3c5fa (.)
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
<<<<<<< HEAD
=======
>>>>>>> ef3c5fa (.)
        static::assertIsString($listClasses);
        static::assertIsString($gridClasses);
        static::assertNotEmpty($listClasses);
        static::assertNotEmpty($gridClasses);
<<<<<<< HEAD
=======
        $this->assertIsString($listClasses);
        $this->assertIsString($gridClasses);
        $this->assertNotEmpty($listClasses);
        $this->assertNotEmpty($gridClasses);
>>>>>>> 727968c (.)
=======
>>>>>>> ef3c5fa (.)
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
<<<<<<< HEAD
=======
>>>>>>> ef3c5fa (.)
        static::assertIsString($listLabel);
        static::assertIsString($gridLabel);
        static::assertNotEmpty($listLabel);
        static::assertNotEmpty($gridLabel);
<<<<<<< HEAD
=======
        $this->assertIsString($listLabel);
        $this->assertIsString($gridLabel);
        $this->assertNotEmpty($listLabel);
        $this->assertNotEmpty($gridLabel);
>>>>>>> 727968c (.)
=======
>>>>>>> ef3c5fa (.)
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
<<<<<<< HEAD
=======
>>>>>>> ef3c5fa (.)
        static::assertIsString($listColor);
        static::assertIsString($gridColor);
        static::assertNotEmpty($listColor);
        static::assertNotEmpty($gridColor);
<<<<<<< HEAD
=======
        $this->assertIsString($listColor);
        $this->assertIsString($gridColor);
        $this->assertNotEmpty($listColor);
        $this->assertNotEmpty($gridColor);
>>>>>>> 727968c (.)
=======
>>>>>>> ef3c5fa (.)

        // Test icons
        $listIcon = $list->getIcon();
        $gridIcon = $grid->getIcon();

<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> ef3c5fa (.)
        static::assertIsString($listIcon);
        static::assertIsString($gridIcon);
        static::assertNotEmpty($listIcon);
        static::assertNotEmpty($gridIcon);
<<<<<<< HEAD
=======
        $this->assertIsString($listIcon);
        $this->assertIsString($gridIcon);
        $this->assertNotEmpty($listIcon);
        $this->assertNotEmpty($gridIcon);
>>>>>>> 727968c (.)
=======
>>>>>>> ef3c5fa (.)
    }
}
