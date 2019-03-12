<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Project
 * @package App
 */
class Project extends Model
{
    use AutoAliasTrait;

    /**
     * @var array
     */
    protected $fillable = ['producer_id', 'industry_id', 'name', 'title', 'description', 'text', 'preview', 'alias', 'in_main'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\MorphOne
     */
    public function image()
    {
        return $this->morphOne('App\Image', 'imageable');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function producer()
    {
        return $this->belongsTo('App\Producer');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function industry()
    {
        return $this->belongsTo('App\Industry');
    }

    /**
     * @return string
     */
    public function getUrlAttribute(): string
    {
        return route("project.show", $this->alias);
    }
}
