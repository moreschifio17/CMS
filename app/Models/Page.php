<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    use HasFactory;
    //Page table 
    protected $table = 'page';
    protected $primarykey = 'page_id';
    protected $fillable = ['page_title','page_description','created_at','updated_at'];
}
