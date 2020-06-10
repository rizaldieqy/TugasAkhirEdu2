<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
    protected $guarded = [];
    protected $hidden = [

    ]; 
    public function product(){
        return $this->belongsTo( Product::class, 'product_id', 'id' );
    }
}
