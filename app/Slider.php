<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Slider extends Model
{
    //
    protected $table = 'sliders';
    protected $primaryKey = 'id_slider';
     protected $fillable = [
        'title_slider', 'type_slider', 'desc_slider', 'lien_slider','img_slider', 'created_at', 'updated_at'
    ];

    protected $dates = [
    'created_at',
    'updated_at',
    // your other new column
];
}
