<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia\HasMedia;
use Spatie\MediaLibrary\HasMedia\HasMediaTrait;

class EmployeeDetail extends Model implements HasMedia{
    use HasMediaTrait;

    public function registerMediaCollections(){
    $this
        ->addMediaCollection('avatar')
        ->singleFile();
}

public function user(){
    return $this->belongsTo('App\User');
}
    //
}
