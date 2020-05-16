<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tournois extends Model
{
    //
    protected $table = 'tournois';
    protected $primaryKey = 'id_tour';
      protected $fillable = [
        'title_tour', 'type_tour', 'author_tour', 'img_tour', 'start_tour', 'end_tour', 'price_tour'
    ];
    protected $dates = [
    'created_at',
    'updated_at',
    // your other new column
];
}
