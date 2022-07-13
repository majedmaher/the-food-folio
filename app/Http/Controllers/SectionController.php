<?php

namespace App\Http\Controllers;

use App\Models\Section;
use Illuminate\Http\Request;

class SectionController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $sections = Section::orderBy('created_at', 'DESC')->get();
        return view('section.index')->with('sections', $sections);
    }

    public function create()
    {
        return view('section.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'title' =>  'required',
            'content' =>  'required',
        ]);


        Section::create([
            'title' =>  $request->title,
            'content' =>  $request->content,
        ]);
        return redirect()->back();
    }

    public function edit($id)
    {
        $section = Section::find($id);
        return view('section.edit')->with('section', $section);
    }

    public function update(Request $request,  $id)
    {

        $news = Section::find($id);

        $this->validate($request, [
            'title' => 'required',
            'content' => 'required',
        ]);
        $news->title = $request->title;
        $news->content = $request->content;
        $news->save();
        return redirect()->back();
    }

    public function destroy($id)
    {
        $section = Section::find($id);
        $section->delete();
        return redirect()->back();
    }
}
