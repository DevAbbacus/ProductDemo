<?php

/**
 * Created by PhpStorm.
 * User: Sagar
 * Date: 20-05-2022
 * Time: 03:49 PM
 */

namespace App\Repository;

use App\Models\Product;
use Illuminate\Support\Facades\Auth;

class ProductRepository
{

    public function __construct(
        CategoryRepository $categoryRepository
    )
    {
        $this->categoryRepo = $categoryRepository;
    }

    public function getProductListFromCategoryIds($categoryIds) {

        if (isset($categoryIds) && sizeof($categoryIds) > 0) {
            $products = Product::whereIn('category_id', $categoryIds)->get();
        } else {
            $userObj = Auth::user();
            $categoryIds = $this->categoryRepo->getUserCategoryIds($userObj);
            $products = Product::whereIn('category_id', $categoryIds)->get();
        }

        return $products;
    }

    public function getProductDetail($productId) {
        $productObj = Product::find($productId);

        return $productObj;
    }
}