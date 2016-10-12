<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $fillable =[
       'title',
        'body',
        'published_at'

        ];

    public function scopepublished($query){

        $query->where('published_at','<=',Carbon::now());


    }
    public function setPublishedAtattribute($date){
        $this->attributes['published_at'] =Carbon::createFromFormat('Y-m-d',$date);


    }
}
