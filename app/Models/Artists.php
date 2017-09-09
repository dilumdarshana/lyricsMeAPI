<?php

namespace App;

use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class Artists extends Eloquent
{

    protected $connection = 'mongodb';
    protected $collection = 'artists';
    protected $primaryKey = '_id';


    public function getArtists()
    {
        $artists = Artists::first();

        return response()->json($artists);
    }


}
