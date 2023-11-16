<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class People extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'province_id', 'avartar', 'birthday', 'gender'];
    protected $primary = 'id';

    public function provinces()
    {
        return $this->hasOne(Province::class, "id", "province_id");
    }
}
