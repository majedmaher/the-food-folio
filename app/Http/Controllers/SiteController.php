<?php

namespace App\Http\Controllers;

use App\Models\Layer;
use App\Models\Section;
use App\Models\Slider;
use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function index()
    {
        $slides = Slider::orderBy('created_at', 'DESC')->take(4)->get();
        $firstLayers = Layer::orderBy('created_at', 'DESC')->take(9)->get();
        $secondLayers = Layer::orderBy('created_at', 'DESC')->skip(9)->take(9)->get();
        $section = Section::first();
        $sections = Section::all()->skip(1)->take(Section::count() - 1);
        return view('index', compact('slides', 'sections', 'section', 'firstLayers', 'secondLayers'));
    }
}
