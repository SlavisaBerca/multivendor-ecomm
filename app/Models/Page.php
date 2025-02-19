<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    protected $fillable = ['title', 'slug', 'details','meta_tag','meta_description'];
    public $timestamps = false;

    public function pageSections()
    {
        return $this->morphMany('App\Models\PageSection','attributable');
    }
}
