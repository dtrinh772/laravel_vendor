<?php

namespace App\Http\Controllers;

use App\Repositories\ProductsRepository;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public $productsRepo;
    public function __construct(ProductsRepository $productsRepository)
    {

        return $this->productsRepo = $productsRepository;

    }

    public function getAllProducts(){
        $products = $this->productsRepo->getAll();

        return view('productsAll', compact('products'));
    }
}
