<?php

namespace App\Http\Controllers\ApiLaren;

use App\Models\Form;
use App\Models\Category;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Request;
use App\Http\Controllers\ApiLaren\Traits\GeneralTrait;

class CategoryController extends Controller
{
    use GeneralTrait;


    public function index(){

        $categories = Category::select('id','name')->get();

        return $this->returnData('categories',$categories,'success get categories');

    }

    public function forms($id) {
        // $category = Category::select('id','name')->where('id',$id)->get();
        // foreach($category as $category){
        //     return  response()->json([
        //     'Category'=> $category,
        //     'Category Forms'=> $category->forms()->select('id','name')->get()

        //     ]);
        // };
        $category = Category::find($id);
        $forms=$category->forms()->get();
        $forms->catogryName=$category->name;
        return $this->returnData('categories',$forms,'success get categories');



    }
}
