<?php

/**
 * Created by PhpStorm.
 * User: Sagar
 * Date: 20-05-2022
 * Time: 02:53 PM
 */
namespace App\Repository;

class DashboardRepository
{
    public function __construct(
        CategoryRepository $categoryRepository,
        ProductRepository $productRepository
    )
    {
        $this->categoryRepo = $categoryRepository;
        $this->productRepo = $productRepository;
    }

    // Business logic of Dashboard Index Function
    public function index($userObj) {
        $data['userObj'] = $userObj;
        $data['categories'] = $this->categoryRepo->getUserCategories($userObj);
        $categoryIds = $this->categoryRepo->getUserCategoryIds($userObj);
        $data['products'] = $this->productRepo->getProductListFromCategoryIds($categoryIds);

        return $data;
    }
}