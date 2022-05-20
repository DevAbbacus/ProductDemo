<?php

/**
 * Created by PhpStorm.
 * User: Sagar
 * Date: 20-05-2022
 * Time: 02:56 PM
 */
namespace App\Repository;

use App\Models\Category;

class CategoryRepository
{
    // Get Categories based on User Age Group
    public function getUserCategories($userObj) {
        $ageGroupId = $userObj->age_group_id;
        $categories = Category::whereRaw("find_in_set('".$ageGroupId."',age_group_id)")->get();

        return $categories;
    }

    // Get category Ids based on User age group
    public function getUserCategoryIds($userObj) {
        $ageGroupId = $userObj->age_group_id;
        $categories = Category::whereRaw("find_in_set('".$ageGroupId."',age_group_id)")->pluck('id');

        return $categories;
    }
}