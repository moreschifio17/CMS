<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Image
 *
 * @property $image_id
 * @property $image_name
 * @property $image_extention
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Image extends Model
{
    
    static $rules = [
		'image_id' => 'required',
		'image_name' => 'required',
		'image_extention' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['image_name','image_extention','created_at','updated_at'];
    protected $primarykey ='image_id';
    protected $table = 'images';



}
