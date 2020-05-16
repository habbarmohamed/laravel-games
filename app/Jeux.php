<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jeux extends Model
{
    //
    protected $table = 'jeuxes';
    protected $primaryKey = 'id_jeu';
     protected $fillable = [
        'id_jeu', 'desc_jeu', 'name_jeu', 'version_jeu','price_jeu', 'img_jeu', 'n_rate',' views_count', 'sortie_jeu', 'genre_jeu', 'rewards_jeu', 'composer_jeu','id_cat', 'cover', 'trailer', 'link',  'created_at', 'updated_at'
    ];

    public function category()
    {
        return $this->belongsTo('App\Category','id_cat');
    }

   
}

