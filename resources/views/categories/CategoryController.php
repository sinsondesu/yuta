<?php
use App\Models\Category;

class Post extends Model {
public function index(Category $category)
{
    return view('categories.index')->with(['posts' => $category->getByCategory()]);
}
}