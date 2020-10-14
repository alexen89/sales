<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Admin\Products\ProductsModel;

class AdminProductController extends Controller
{
	protected $request;

    public function __construct(Request $request) {
        $this->request = $request;
    }


    public function index()
    {
    	$products = ProductsModel::paginate(10);
        return view('admin.product.list', compact('products'));
    }

    public function createProduct()
    {
        return view('admin.product.create');
    }

    public function productAdd(Request $request)
    {	
    	$request = $this->request->all();
    	$product = new ProductsModel;
        $product->name = $request['nameProduct'];
        $product->quantity = $request['qty'];
        $product->barcode = $request['barcode'];
        $product->amount = $request['amount'];
        $product->url_img = '';
        $product->id_provider = 0;
        $product->id_type_product = 0;
		$product->active = 1;
        $product->save();

        return \Response::json(array(
                    'success' => true
                )); 
    }

    public function loadProduct(Request $request)
    {
    	/*$request = $this->request->all();
    	$product = new ProductsModel::where('id_product' , '=' , $request['id'] )->get();
        echo '<pre>';
        print_r($product);
        echo '</pre>';
        return \Response::json(array(
                    'success' => $request['id']
                )); */
    }
}
