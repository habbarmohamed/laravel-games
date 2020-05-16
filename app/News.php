<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    //
    protected $table = 'news';
    protected $primaryKey = 'id_news';
    protected $fillable = [
        'id_news','title_news','author_news', 'most_read', 'desc_news', 'date_news','img_news', 'created_at', 'updated_at'
    ];
    protected $dates = [
    'created_at',
    'updated_at',
    // your other new column
];
}
