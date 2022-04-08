<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PageRed extends Model
{
    use HasFactory;
    protected $table = 'page_social_network';
    protected $primarykey = 'id';
    protected $fillable = ['page_id','social_net_id','description','created_at','updated_at'];
}
