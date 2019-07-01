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
    public function create(){
        $data = request()->all();
        dd($data);
//        Categories::create($request->all());
        return response()
            ->json(['message' => 'Success: You have added an user']);

    }
}
