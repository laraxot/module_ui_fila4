<?php

declare(strict_types=1);

namespace Modules\UI\Datas;

use Spatie\LaravelData\Data;

class SliderData extends Data
{
    public function __construct(
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> b93ef594b4 (.)
>>>>>>> 1899c5f (.)
        public null|string $desktop_thumbnail,
        public null|string $mobile_thumbnail,
        public null|string $desktop_thumbnail_webp,
        public null|string $mobile_thumbnail_webp,
        public null|string $link,
        public null|string $title,
        public null|string $short_description,
        public null|string $description,
        public null|string $action_text,
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
=======
>>>>>>> origin/develop
        public ?string $desktop_thumbnail,
        public ?string $mobile_thumbnail,
        public ?string $desktop_thumbnail_webp,
        public ?string $mobile_thumbnail_webp,
        public ?string $link,
        public ?string $title,
        public ?string $short_description,
        public ?string $description,
        public ?string $action_text,
<<<<<<< HEAD
>>>>>>> a12f125f4a (.)
=======
>>>>>>> b93ef594b4 (.)
=======
>>>>>>> origin/develop
>>>>>>> 1899c5f (.)
    ) {
        $this->short_description = $this->description;
    }
}
