<?php

namespace App\Http\Controllers;

use App\Models\Artists;
use App\Models\Lyrics;
use Illuminate\Http\Request;

class LyricsController extends Controller
{

    public function __construct()
    {
        //
    }

    public function search(Request $request) {

        $keyword = $request->input('q');
        $type = $request->input('type');

        $lyricsModel = new Lyrics();

        $lyrics = $lyricsModel->search($keyword);

        return response()->json($lyrics);

    }

    public function artists(Request $request)
    {
        $artistsModel = new Artists();

        return $artistsModel->getArtists();
    }

    public function lyrics(Request $request)
    {

        $keyword = $request->input('q');

        $lyricsModel = new Lyrics();

        return $lyricsModel->getLyrics();
    }
}
