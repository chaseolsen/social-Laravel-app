<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    // Table Name
    protected $table = 'posts'; // <- Just for reference
    // Primary Key
    public $primaryKey = 'id';
    // Timestamps
    public $timestamps = true; // <- also not required, was created by default just reference

    public function user(){
      return $this->belongsTo('App\User');
    }

}
