<?php

namespace App\Http\Controllers;

use App\Agenda;
use App\Equipment;
use App\Gallery;
use App\Ingredient;
use App\Review;
use App\Service;
use App\Story;
use App\Team;
use App\TutorialVideo;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $tutorial = TutorialVideo::first();
        $ingredients = Ingredient::all();
        $equipments = Equipment::all();
        $story = Story::first();
        $galleries = Gallery::all();
        $reviews = Review::all();
        return view('welcome',compact(
            'story',
            'galleries',
            'reviews',
            'tutorial',
            'ingredients',
            'equipments'
        ));
    }

     /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function about()
    {
        $story = Story::first();
        $teams = Team::all();
        $reviews = Review::all();
        return view('about', compact('teams', 'story','reviews'));
    }

     /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function services()
    {
        $agenda = Agenda::first();
        $services = Service::all();
        return view('services',compact('agenda','services'));
    }

     /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function contact()
    {
        return view('contact');
    }

     /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function gallery()
    {
        $galleries = Gallery::all();
        return view('gallery', compact('galleries'));
    }

     /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function blog()
    {
        return view('blog');
    }

     /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function singleBlog()
    {
        return view('single-blog');
    }
}
