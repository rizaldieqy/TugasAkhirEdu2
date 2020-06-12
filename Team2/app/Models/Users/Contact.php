<?php

namespace App\Models\Users;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $fillable = ['nama','email','no_hp','pesan'];
}
