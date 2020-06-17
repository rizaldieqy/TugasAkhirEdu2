<?php

namespace App\Models\Users;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Gallery extends Model
{
    use SoftDeletes;
    protected $fillable = ['id','produk_id','nama_gambar','gambar'];
    
    public function data(){
        return $this->belongsTo(Product::class,'produk_id','id');
    }
}
