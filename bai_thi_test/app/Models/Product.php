<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'image', 'price', 'sale_price', 'category_id', 'status', 'description'];
    protected $primary = 'id';

    public function categories()
    {
        return $this->hasOne(Category::class, "id", "category_id");
    }

    // public function scopeSearch($query){
    //     if(request()->search){
    //         $search = request()->search;
    //         $query = $query->Where('name', 'Like', '%' . $search . '%');
    //     }
    //     return $query;
    // }

    // public function scopeFilter($query){
    //     if(request()->sort){
    //         $sort = request()->sort;
    //         $sortArr = explode('-', $sort);
    //         $query = $query->orderBy($sortArr[0], $sortArr[1]);
    //     }
    //     return $query;
    // }

    public function scopeSearch($query){
        if(request()->search){
            $search = request()->search;
            $query = $query->Where('name','like', '%' . $search . '%');
        }
        return $query;
    }

    public function scopeFilter($query){
        if(request()->sort){
            $sort = request()->sort;
            $sortArr = explode('-', $sort);
            $query = $query->orderBy($sortArr[0], $sortArr[1]);
        }
        return $query;
    }
}
