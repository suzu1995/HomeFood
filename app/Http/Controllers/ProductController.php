<?php

namespace App\Http\Controllers;

// use Illuminate\Http\Request;
use App\Models\MProduct;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\Product\ProductRequest;


class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $product_list = MProduct::getProductList();
        return view('product/product_list', ['product_list' => $product_list]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('product/product_add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\ProductRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProductRequest $request)
    {
        $data = $request->all();
        $upload = $request->product_gazou;
        $gazou = $upload->store('public/images/product');
        $gazou = explode("public", $gazou);
        $data['product_gazou'] = $gazou[1];

        DB::beginTransaction();
        try{
            MProduct::saveProduct($data);
            DB::commit();
        }catch(Exception $e){
            DB::rollBack();
            return redirect()->action([ProductController::class, 'create'])->withInput()->withErrors(array('DB_ERROR'=> $e->getMessage()));
        }

        return redirect()->action([ProductController::class, 'index']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $product_data = MProduct::getProduct($id);
        return view('product/product_show', ['product_data' => $product_data]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
