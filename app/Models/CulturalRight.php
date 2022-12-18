<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class CulturalRight
 *
 * @property $id
 * @property $cultural_rights
 *
 * @property Activity[] $activities
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class CulturalRight extends Model
{
    
    static $rules = [
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['cultural_rights'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function activities()
    {
        return $this->hasMany('App\Activity', 'cultural_rights', 'id');
    }
    

}
