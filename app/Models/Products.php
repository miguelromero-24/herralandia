<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'products';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['description', 'brand', 'feature', 'category_id'];

    protected $dates = ['created_at', 'updated_at'];

    public function category(){
        return $this->belongsTo('App/Models/Category', 'category_id');
    }
}

