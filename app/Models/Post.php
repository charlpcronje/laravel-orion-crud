<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model {
    use HasFactory;

    protected $fillable = [
        'title',    
        'body',
        'category',
        'published'
    ];

   /**
     * Scope the query to published posts
     * Whenever you have a public method within a model that starts with the word `scope` it has a special meaning
     * It means you can scope other queries with the word following scope, in the case `published`
     */
    public function scopePublished($query) {
        return $query->where('published',true);

        /* now I can do the following
         * Instead of
         * Post::where('title','Nice Title')->where('published',true);
         * You can say
         * Post::where('title','Nice Title')->published();
         * That will give me all the post with a title of 'Nice Title' and that is published
         */
    }

    public function scopeWhereCategory($query, $category) {
        return $query->where('category',$category);
    }
}
