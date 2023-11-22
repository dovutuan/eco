<?php

namespace App\Repositories;

use App\Models\Product;
use Dovutuan\Laracom\DomRepository\BaseRepository;

class ProductRepository extends BaseRepository
{
    protected array $base_search = [
        'id' => [
            ['column' => 'id']
        ],
        'name' => [
            ['column' => 'name', 'operator' => OPERATOR_LIKE],
        ],
        'slug' => [
            ['column' => 'slug']
        ]
    ];

    public function model(): string
    {
        return Product::class;
    }
}
