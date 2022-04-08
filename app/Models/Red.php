<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Red extends Model
{
    use HasFactory;
    protected $table = 'social_network';
    protected $primarykey = 'social_net_id';
    protected $fillable = ['social_net_type','created_at','updated_at'];
}
