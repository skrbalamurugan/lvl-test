<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Products;
use App\Http\Requests\ProductRequest;

class ProductsController extends Controller
{
    public function index(){
        $title = 'Create Product';
        return view('layouts.create-product', compact('title'));
    }

    public function save(ProductRequest $request){
        $title = 'Peoducts';
        Products::create($request->all());
        return redirect()->route('list-product', compact('title'));
    }

    public function edit($id){
        $title = 'Products';
        $data = Products::where('id', $id)->first();
        return view('layouts.edit-product', compact('title', 'data'));
    }

    public function update(ProductRequest $request, $id){
        Products::where('id', $id)->update($request->except('_token'));
        return redirect()->back();
    }

    public function list(){
        $title = 'Products';
        $data = Products::all();
        return view('layouts.list-products', compact('title', 'data'));
    }

    public function view($id){
        $title = 'Products';
        $data = Products::where('id', $id)->first();
        return view('layouts.view-product', compact('title', 'data'));
    }
}
