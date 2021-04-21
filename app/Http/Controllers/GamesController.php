<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Redis;

class GamesController extends BaseController
{
    private static $words = [
        'games',
        'car',
        'watch',
        'pencil',
        'notes',
        'monitor',
        'table',
        'office',
        'notebook',
        'handphone',
        'motorcycle'
    ];

    public function index() {
        $firstWords = self::$words;
        $words = $firstWords[0];
        $idx = 0;

        $scramble_words = $this->shuffleWord($words);
        
        return view('games')
            ->with('idx',$idx)
            ->with('point',0)
            ->with('scramble_words', $scramble_words);
    }

    public function shuffleWord($word) {
        $wordArray = str_split($word);
        shuffle($wordArray);
        return strtoupper(implode(' ',$wordArray));
    }

    public function submit(Request $request) {
        $words = self::$words;
        $idx = $request->idx;
        $answer = strtolower($this->clean($request->answer));
        
        if(isset($words[$idx]) && strtolower($words[$idx]) == $answer) {
            return true;
        }

        return false;
    }

    public function clean($string) {
        $string = str_replace(' ', '-', $string); // Replaces all spaces with hyphens.
     
        return preg_replace('/[^A-Za-z]/', '', $string); // Removes special chars.
     }

     public function generate(Request $request) {
         $idx = $request->idx;
         $words = self::$words;
         $scramble_words = $this->shuffleWord($words[$idx+1]);

         return $scramble_words;
     }

     public function reset(Request $request) {
        Redis::hset('top_score',$request->name,$request->point);
     }

     public function topscore() {
        $redisItems = Redis::hgetall('top_score');
        arsort($redisItems);

        return view('dashboard')
            ->with('data',$redisItems);
     }
}
