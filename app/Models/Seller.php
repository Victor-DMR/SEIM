<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Seller extends Model
{
    use HasFactory;

    protected $table = 'sellers';
    protected $fillable = ['name', 'cc', 'email', 'password', 'namestore', 'category', 'productservice', 'optiontrade', 'numberrecord'];
}
