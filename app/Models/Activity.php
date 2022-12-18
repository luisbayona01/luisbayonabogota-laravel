<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Activity
 *
 * @property $id
 * @property $activity_name
 * @property $start_time
 * @property $final_hour
 * @property $activity_date
 * @property $cultural_rights
 * @property $nac_id
 * @property $expertises
 *
 * @property CulturalRight $culturalRight
 * @property Expertise $expertise
 * @property Nac $nac
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Activity extends Model
{
     public $timestamps = false;
    protected $table = 'activity';
    static $rules = [
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['activity_name','start_time','final_hour','activity_date','cultural_rights','nac_id','expertises'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function culturalRight()
    {
        return $this->hasOne('App\CulturalRight', 'id', 'cultural_rights');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function expertise()
    {
        return $this->hasOne('App\Expertise', 'id', 'expertises');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function nac()
    {
        return $this->hasOne('App\Nac', 'id', 'nac_id');
    }
    

}
