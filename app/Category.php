<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    //
    protected $table = 'categories';
    protected $primaryKey = 'id_cat';
    protected $fillable = [
        'id_cat', 'name_cat', 'color_cat', 'status', 'created_at', 'updated_at'
    ];

    public function jeux()
{
    return $this->belongsTo('App\Jeux', 'id_cat');
}

  
}
