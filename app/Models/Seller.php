<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Seller extends Model
{
    use HasFactory;

    protected $table = 'sellers';
    protected $fillable = ['name', 'cc', 'phone', 'email', 'password', 'namestore', 'ubicacion', 'category', 'imgportada', 'imgperfil', 'productservice', 'optiontrade', 'numberrecord'];
}
