<?php

namespace App\Services;

use App\Repositories\ProductRepository;
use Dovutuan\Laracom\DomRepository\Exception\NotFoundException;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class ProductService
{
    public function __construct(private readonly ProductRepository $productRepository)
    {
    }

    /**
     * @param $slug
     * @return Model
     * @throws NotFoundException
     */
    public function find($slug): Model
    {
        return $this->productRepository->findByConditions(['slug' => $slug]);
    }

    /**
     * @param Request $request
     * @return array
     */
    public function paginate(Request $request): array
    {
        return $this->productRepository->paginate($request->only(['name', 'id']));
    }

    /**
     * @param Request $request
     * @return Model
     */
    public function store(Request $request): Model
    {
        return $this->productRepository->create($request->only(['name', 'id']));
    }

    /**
     * @param Request $request
     * @param $id
     * @return Model|null
     * @throws NotFoundException
     */
    public function update(Request $request, $id): Model|null
    {
        return $this->productRepository->update($id, $request->only(['name', 'id']));
    }
}
