<?php

namespace Database\Factories;

use App\Models\News;
use Illuminate\Database\Eloquent\Factories\Factory;

class NewsFactory extends Factory
{
    protected $model = News::class;

    public function definition()
    {
        return [
            'title' => $this->faker->sentence,
            'slug' => $this->faker->unique()->slug,
            'description' => $this->faker->paragraph,
            'content' => $this->faker->text(2000),
            'keywords' => $this->faker->words(3, true),
            'image_url' => $this->faker->imageUrl(640, 480, 'news') ?: '/path/to/default/image.jpg',
        ];
    }
}
