<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    protected $fillable=[
        'name','image','intro','published_on','genre','author_id','store_id'
        
    ];
    protected $table='books';
    protected $primaryKey='id';


}
