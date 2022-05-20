<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Repository\CategoryRepository;
use App\Repository\DashboardRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function __construct(
        DashboardRepository $dashboardRepository,
        CategoryRepository $categoryRepository
    ) {
        $this->dashboardRepo = $dashboardRepository;
        $this->categoryRepo = $categoryRepository;
    }

    public function index(Request $request) {
//        print_r("here");exit;
        $userObj = Auth::user();
        $data = $this->dashboardRepo->index($userObj);

        return view('home')->with($data);
    }
}
