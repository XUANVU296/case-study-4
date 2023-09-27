<?php

namespace App\Http\Controllers;
use App\Http\Requests\CategoryRequest;
use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    public function index() {
        $categories = Category::all();
        return view('study.category.index', compact(['categories']));
    }
    public function create() {
        return view('study.category.create');
    }
    public function store(CategoryRequest $request) {
        // $validated = $request->validate(
        //     [
        //         'name' => 'required|unique:categories|max:5',
        //     ],
        //     [
        //         'name.required' => 'Không được để trống',
        //         'name.unique' => 'Tên đã tồn tại',
        //         'name.max' => 'Tên quá dài, chỉ được nhập 5 kí tự thôi',
        //     ]
        // );
        
        // Tiếp tục xử lý khi dữ liệu đã được xác thực thành công
            // $.ajax(option)
            // alertify.success('Cập nhật thành công');
        $category = new Category();
        $category->name = $request->name;
        $category->description = $request->description;
        $category->save();
        return redirect()->route('category.index')->with('status','Thêm thành công');
    }
    public function edit($id) {
        $categories = Category::find($id);
        return view('study.category.edit', compact(['categories']));
    }
    public function update(CategoryRequest $request,$id){
        $category = Category::find($id);
        $category->name = $request->name;
        $category->description = $request->description;
        $category->save();
        return redirect()->route('category.index');
    }
    public function destroy($id) {
        $category = Category::destroy($id);
        return redirect()->route('category.index');
    }
    public function show($id) {
        $categories = Category::find($id);
        return view('study.category.show', compact(['categories']));
    }
}
