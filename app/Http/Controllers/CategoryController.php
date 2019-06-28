<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Categories;
class CategoryController extends Controller
{
    public function index()
    {
        return Categories::all();
    }

    public function topics($categoryId)
    {

        $topics = Categories::findOrFail($categoryId)
            ->topics()
            ->orderBy('created_at', 'desc');

        if ($topics->isEmpty()) {
            return response('The provided page exceeds the available number of pages', 404);
        }

        return $topics;

    }
}
