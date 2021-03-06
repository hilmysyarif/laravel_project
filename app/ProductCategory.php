<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Harran\Slugit\SlugService;

class ProductCategory extends Model
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
        'title', 'icon', 'slug'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        ''
    ];

}
