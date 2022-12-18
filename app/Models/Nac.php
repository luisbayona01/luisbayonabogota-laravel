<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Nac
 *
 * @property $id
 * @property $nacs
 *
 * @property Activity[] $activities
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Nac extends Model
{
    
    static $rules = [
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nacs'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function activities()
    {
        return $this->hasMany('App\Activity', 'nac_id', 'id');
    }
    

}
