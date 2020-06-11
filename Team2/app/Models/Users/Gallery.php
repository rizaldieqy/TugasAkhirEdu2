<?php

namespace App\Models\Users;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Gallery extends Model
{
    use SoftDeletes;
    protected $guarded = [];
    
    public function product(){
        return $this->belongsTo( Product::class, 'product_id', 'id' );
    }
}
