<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Expertise
 *
 * @property $id
 * @property $expertises
 *
 * @property Activity[] $activities
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Expertise extends Model
{
    
    static $rules = [
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['expertises'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function activities()
    {
        return $this->hasMany('App\Activity', 'expertises', 'id');
    }
    

}
