<?php

namespace App\Http\Controllers;

use App\Models\tags;
use Illuminate\Http\Request;

class tagsController extends Controller
{
    //
    public function create(){
        return view('tags.create');
    }

    public function store(request $request){
        $formField = $request->validate([
            'tag' => 'required|unique:tags|max:30',
            'thumbnail' => 'required|image|mimes:jpg,jpeg,png,gif|max:2048',
                ]);

        if($request->hasFile('thumbnail')){
            $formField['thumbnail'] = $request->file('thumbnail')->store('thumbnail','public');
        }
        tags::create($formField);

        return redirect('/tags/create')->with('message', 'Listings created successfully');
    }
    public function show(){
        return view('tags.show',['tags'=>tags::all()]);
    }
    public function edit(tags $tag){
        return view('tags.edit',['tag' => $tag
        ]);
    }

    public function update(Request $request,tags $tag){
        $formField = $request->validate([
            'tag' => 'max:30',
            'thumbnail' => 'image|mimes:jpg,jpeg,png,gif|max:2048',
                ]);

        if($request->hasFile('thumbnail')){
            $formField['thumbnail'] = $request->file('thumbnail')->store('thumbnail','public');
        }

        $tag->update($formField);
        return back()->with('message', 'Listings Updated successfully');
    }
    public function destroy(tags $tag){

        $tag->delete();
        return redirect('/tags/mana');
    }

}
