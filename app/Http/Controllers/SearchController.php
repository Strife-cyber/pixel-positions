<?php

namespace App\Http\Controllers;

use App\Models\Job;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Foundation\Application;

class SearchController extends Controller
{
    public function __invoke(): View|Factory|Application
    {
        $jobs = Job::with(['employer', 'tags'])->where('title', 'like', '%' . request('q') . '%') -> get();

        return view('results', ['jobs' => $jobs]);
    }
}
