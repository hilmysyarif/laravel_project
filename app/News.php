<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Harran\Slugit\SlugService;

class News extends Model
{
<<<<<<< HEAD
  use SlugService;

  /**
   * Setting which field is the slug and which field is the source for generating the slug
   * @return array
   */
=======
    use SlugService;

    /**
    * Setting which field is the slug and which field is the source for generating the slug
    * @return array
    */
>>>>>>> d5366c8da7de130edc7f4af1e5fa43984e3c4ef8
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
        'title', 'url', 'category_id', 'description', 'featured'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'slug', 'file', 'ext'
    ];
}
