<?php

namespace App\Http\Controllers;

use App\Models\Slider;
use Illuminate\Http\Request;

class SliderController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $slides = Slider::orderBy('created_at', 'DESC')->get();

        return view('slide.index')->with('slides', $slides);
    }

    public function create()
    {
        return view('slide.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'title' =>  'required',
            'description' =>  'required',
            'image' =>  'required|image',
        ]);

        $image = $request->image;
        $newimage = $image->getClientOriginalName();
        $image->move('uploads/slides', $newimage);


        Slider::create([
            'title' =>  $request->title,
            'description' =>   $request->description,
            'image' =>  'uploads/slides/' . $newimage,
        ]);
        return redirect()->back();
    }

    public function edit($id)
    {
        $slide = Slider::find($id);
        return view('slide.edit')->with('slide', $slide);
    }

    public function update(Request $request, $id)
    {

        $slide = Slider::find($id);
        $this->validate($request, [
            'title' =>  'required',
            'description' =>  'required',
        ]);


        if ($request->has('image')) {

            $image = $request->image;
            $newimage = $image->getClientOriginalName();
            $image->move('uploads/slides', $newimage);
            $slide->image = 'uploads/slides/' . $newimage;
        }

        $slide->title = $request->title;
        $slide->description = $request->description;
        $slide->save();
        return redirect()->back();
    }

    public function destroy($id)
    {
        $slide = Slider::find($id);
        $slide->delete();
        return redirect()->back();
    }
}
