<?php

namespace App\Models\Admin\Products;

use Illuminate\Database\Eloquent\Model;

class ProductsModel extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'products';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['id_product', 'name', 'quantity', 'amount', 'barcode', 'url_img'];
}
