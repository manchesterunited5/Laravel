<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'image', 'price', 'sale_price', 'status', 'category_id'];
    protected $primary = 'id';

    public function categoris()
    {
        return $this->hasOne(Category::class, "id", "category_id");
    }

    public function scopeSearch($query){
        if(request()->search){
            $search = request()->search;
            $query = $query->where('name', 'like', '%' . $search . '%');
        }
        return $query;
    }

    public function scopeFilter($query){
        if(request()->filter){
            $filter = request()->filter;
            $AllProductArr = explode('-', $filter);
            $query = $query->orderBy($AllProductArr[0], $AllProductArr[1]);
        }
        return $query;
    }
}
