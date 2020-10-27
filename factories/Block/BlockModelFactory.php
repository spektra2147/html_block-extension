<?php

namespace Database\Factories\Anomaly\HtmlBlockExtension\Block;

use Anomaly\HtmlBlockExtension\Block\BlockModel;
use Illuminate\Database\Eloquent\Factories\Factory;

class BlockModelFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = BlockModel::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [];
    }
}
