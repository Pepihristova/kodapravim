<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SecondPlace extends Model
{
    use HasFactory;
    protected $fillable = [
        'name', 'place_id'
    ];
    public function place()
    {
        return $this->belongsTo('App\Models\Place');
    }
    public function big_table()
    {
        return $this->hasMany('App\Models\BigTable');
    }
}
