<?php

namespace App;

use Illuminate\Database\Eloquent\Model;



class role extends Model
{
    //
        protected $fillable = [
        'id', 'name', 'created_at', 'updated_at'
    ];
}

    // public function isActive(){
    //     if($this->role()->name =='administrator' && $this->is_active == 1){
    //         return true;
    //     }

    //         return false;
    // }

    // public function user(){

    //     return $this->belongsTo('App\User','role_id');

    // }