<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Storage;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Http\Requests\ProductRequest;
use App\Http\Requests\UpdateproductRequest;

class ProductController extends Controller
{
    public function index() {
        $products = Product::with('category')->get();
        return view('study.product.index', compact(['products']));
    }
    public function create() {
         $categories = Category::all();
        return view('study.product.create', compact(['categories']));
    }
    public function store(ProductRequest $request) {
        $products = new Product();
        $products->category_id = $request->category_id;
        $products->name = $request->name;
        $products->description = $request->description;
        $products->price = $request->price;
        $products->quantity = $request->quantity;
        $products->status = $request->status;
        $fieldName = 'image';
        if ($request->hasFile($fieldName)) {
            $fullFileNameOrigin = $request->file($fieldName)->getClientOriginalName();
            $fileNameOrigin = pathinfo($fullFileNameOrigin, PATHINFO_FILENAME);
            $extenshion = $request->file($fieldName)->getClientOriginalExtension();
            $fileName = $fileNameOrigin . '-' . rand() . '_' . time() . '.' . $extenshion;
            $path = 'storage/' . $request->file($fieldName)->storeAs('public/images', $fileName);
            $path = str_replace('public/', '', $path);
            $products->image = $path;
        }
        $products->save();
        return redirect()->route('product.index');
    }
    public function edit($id) {
        $products = Product::find($id);
        $categories = Category::all();
        return view('study.product.edit', compact(['products','categories']));
    }
    public function update(UpdateproductRequest $request,$id) {
        $products = Product::find($id);
        $products->category_id = $request->category_id;
        $products->name = $request->name;
        $products->description = $request->description;
        $products->price = $request->price;
        $products->quantity = $request->quantity;
        $products->status = $request->status;
        $fieldName = 'image';
        if ($request->hasFile($fieldName)) {
            $fullFileNameOrigin = $request->file($fieldName)->getClientOriginalName();
            $fileNameOrigin = pathinfo($fullFileNameOrigin, PATHINFO_FILENAME);
            $extenshion = $request->file($fieldName)->getClientOriginalExtension();
            $fileName = $fileNameOrigin . '-' . rand() . '_' . time() . '.' . $extenshion;
            $path = 'storage/' . $request->file($fieldName)->storeAs('public/images', $fileName);
            $path = str_replace('public/', '', $path);
            $products->image = $path;
        }
        $products->save();
        return redirect()->route('product.index');
    }
    public function destroy($id) {
        $products = Product::destroy($id);
        return redirect()->route('product.index');
    }
    public function show($id) {
        $products = Product::find($id);
        $categories = Category::find($products->category_id);
        return view('study.product.show', compact(['products','categories']));
    }
}
