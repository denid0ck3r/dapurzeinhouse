<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    
         /* Get all of the comments for the Category
         *
         * @return \Illuminate\Database\Eloquent\Relations\HasMany
         */
        public function posts()
        {
            return $this->hasMany(Post::class);
        }
    

}
