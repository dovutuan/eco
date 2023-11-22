<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Services\ProductService;
use Dovutuan\Laracom\DomRepository\Exception\NotFoundException;
use Illuminate\Contracts\View\View;

class ProductController extends Controller
{
    public function __construct(private readonly ProductService $productService)
    {
    }

    /**
     * @param $slug
     * @return View
     * @throws NotFoundException
     */
    public function index($slug): View
    {
        $result = $this->productService->find($slug);

        return view('client.product', compact('result'));
    }
}
