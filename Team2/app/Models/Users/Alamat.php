<?php

namespace App\Models\Users;

use Illuminate\Database\Eloquent\Model;

class Alamat extends Model
{
    protected $table = 'alamat';
    protected $fillable = ['alamat','no_hp','email'];
}
