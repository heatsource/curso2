<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    //return $this->belongsTo('App\User')

    /*public function getTitle(){
    	return $this->title
    }*/

    protected $fillable=['title', 'content','slug','status','user_id'];
}
