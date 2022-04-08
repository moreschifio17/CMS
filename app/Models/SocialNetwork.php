<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class SocialNetwork
 *
 * @property $social_net_id
 * @property $social_net_type
 * @property $created_at
 * @property $updated_at
 *
 * @property PageSocialNetwork[] $pageSocialNetworks
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class SocialNetwork extends Model
{
    
    static $rules = [
		'social_net_id' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['social_net_id','social_net_type'];
    protected $table = 'social_network';


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function pageSocialNetworks()
    {
        return $this->hasMany('App\Models\PageSocialNetwork', 'social_net_id', 'social_net_id');
    }
    

}
