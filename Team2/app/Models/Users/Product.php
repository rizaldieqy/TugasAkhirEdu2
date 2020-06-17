<?php

namespace App\Models\Users;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use SoftDeletes;
    protected $fillable=['id','nama_produk','slug','deskripsi','type'];
    public function galleries(){
        return $this->hasMany(Gallery::class,'produk_id','id');
    }
}
