<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BigTable extends Model
{
    use HasFactory;
    protected $fillable = [
        'place_id', 'type_id', 'second_place_id', 'activity_id', 'description', 'filename', 'is_valid'
    ];
    public function type()
    {
        return $this->belongsTo('App\Models\Type');
    }
    public function place()
    {
        return $this->belongsTo('App\Models\Place');
    }
    public function activity()
    {
        return $this->belongsTo('App\Models\Activity');
    }
    public function second_place()
    {
        return $this->belongsTo('App\Models\SecondPlace');
    }
}
