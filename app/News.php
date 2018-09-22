<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Harran\Slugit\SlugService;

class News extends Model
{
    use SlugService;

    /**
    * Setting which field is the slug and which field is the source for generating the slug
    * @return array
    */

    public function slugSettings(){
      return [
        'slug' => 'title'
      ];
    }

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title', 'category_id', 'description', 'file'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'slug', 'file'
    ];
}
