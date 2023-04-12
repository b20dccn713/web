<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Customers extends Authenticatable
{
    use HasFactory;
    public $table='customers';
    protected $fillable=[
        'name',
        'email',
        'phone',
        'password'
    ];
}
