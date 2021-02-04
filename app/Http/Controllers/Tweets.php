<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Twitter;

class Tweets extends Controller
{
    /**
     * Liste de tous les tweets
     *
     * @return $tweets
     */
    public function twitterUserTimeLine()
    {
    	$tweets = Twitter::getUserTimeline(['count' => 3, 'format' => 'array']);

    	return $tweets;
    }
}
