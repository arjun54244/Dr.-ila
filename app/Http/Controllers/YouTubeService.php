<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class YouTubeService extends Controller
{
    protected $youtubeService;

    public function __construct(\App\Services\YouTubeService $youtubeService)
    {
        $this->youtubeService = $youtubeService;
    }

    public function index()
    {
        $videos = $this->youtubeService->fetchVideos(10);
        return view('videos', compact('videos'));
    }
}
