<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable=[
        'title','description','user_id'
    ];


    /**
     * here if the user is capital it makes problem?
     */
    
    public function user()
    {
        return $this->belongsTo(User::class);
    }

}
