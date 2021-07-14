<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    public function categoryBond(){
        return $this->belongsTo(ProductsCategories::class, 'productCategory');
    }
    public function productsDescTable(){
        return $this->hasMany(ProductsDescTable::class);
    }
    public function productsFiles(){
        return $this->hasMany(ProductsFiles::class);
    }
    public function productsFunctions(){
        return $this->hasMany(ProductsFunctions::class);
    }
    public function productsLinks(){
        return $this->hasMany(ProductsLinks::class);
    }
}
