<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ProductCategory;

class AdminCatarogyController extends Controller
{
    public function index(){
        $guarded['product_categories']=ProductCategory::All();
    return view('admin.category.index')->with("guarded",$guarded);
    }
    public function store(Request $request)
        {
        $request->validate([
        "name" => "required|max:255",
     
        ]);
        $creationData = $request->only(["name",]);
     
      
        ProductCategory::create($creationData);
    
        return back();
    
        }
    public function create(){
        return view('admin.category.create');
    }
    public function delete($id)
    {
   ProductCategory::destroy($id);
    return back();
    }
    public function edit($id){
   
        $guarded['product_categories']=ProductCategory::findOrFail($id);
        return view('admin.category.edit')->with("guarded",$guarded);
    }
    public function update(Request $request,$id){
        $request->validate([
            "name" => "required|max:255",
        ]);
        $catarogy=ProductCategory::findOrFail($id);
        $catarogy->setName($request->input('name'));
        $catarogy->save();
        return redirect()->route('admin.category.index');
    }
}
