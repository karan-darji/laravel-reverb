<?php

namespace App\Http\Controllers;

use App\Jobs\PublishPodcast;
use App\Models\Podcast;
use App\PodcastStatus;
use Illuminate\Http\Request;
use Inertia\Inertia;

class PodcastsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $podcasts = auth()->user()->podcasts()->latest()->simplePaginate(10);
        return Inertia::render('Podcasts/Index',['podcasts'=>$podcasts]);
    }

    public function publish(Request $request, Podcast $podcast)
    {
        $podcast->update(['status'=>PodcastStatus::Publishing]);
        PublishPodcast::dispatch($podcast);
        return back();
    }

}
