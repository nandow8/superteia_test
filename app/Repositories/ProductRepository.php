<?php

namespace App\Repositories;

use App\Models\Product;

class ProductRepository
{
    public function listProducts()
    {
        return Product::all();
    }

    public function saveProduct(object $request)
    {
        Product::create($request->all());
        
        toastr()->success('salvo com sucesso');
    }

    public function findProduct(int $id)
    {
        return Product::findOrFail($id);
    }

    public function updateProduct(object $request, int $id)
    {        
        $this->findProduct($id)->update($request->all());

        toastr()->success('Editado com sucesso');
    }

    public function deleteProduct(int $id)
    {
        Product::destroy($id);
        toastr()->error('Deletado com sucesso');
    }
}