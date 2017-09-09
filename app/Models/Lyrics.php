<?php

namespace App\Models;

use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class Lyrics extends Eloquent
{

    protected $connection = 'mongodb';
    protected $collection = 'lyrics';
    protected $primaryKey = '_id';


    public function search($keyword)
    {
        $lyrics = Lyrics::where('song', 'like', "$keyword%")->get(array('song'))->sortBy('song');

        return $lyrics;
    }

    public function getLyrics()
    {
        $lyrics = Lyrics::first();

        return response()->json($lyrics);
    }


}
