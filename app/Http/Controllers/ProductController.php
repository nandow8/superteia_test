<?php

namespace App\Http\Controllers;

use App\Repositories\ProductRepository;
use App\Requests\ProductRequest;

class ProductController extends Controller
{
    private $product;

    public function __construct(ProductRepository $productRepository)
    {
        $this->product = $productRepository;
    }

    public function index()
    {
        return view('normal.products.index', ['products' => $this->product->listProducts()]);
    }

    public function create(){
        return view('normal.products.create');
    }

    public function store(ProductRequest $request)
    {
        $this->product->saveProduct($request);
        return redirect('products');
    }

    public function edit($id)
    {
        return view('normal.products.edit', ['product' => $this->product->findProduct($id)]);
    }

    public function update(ProductRequest $request, $id)
    {
        $this->product->updateProduct($request, $id);
        return redirect('products');
    }

    public function destroy($id)
    {
        $this->product->deleteProduct($id);
        return redirect('products');
    }
}
