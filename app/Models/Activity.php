<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Activity extends Model
{
    use HasFactory;
    protected $fillable = [
        'name', 'type_id'
    ];
    public function type()
    {
        return $this->belongsTo('App\Models\Type');
    }
    public function big_table()
    {
        return $this->hasMany('App\Models\BigTable');
    }
}
