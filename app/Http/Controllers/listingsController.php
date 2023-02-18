<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\listings;
use App\Models\tags;
use App\Models\User;
class listingsController extends Controller
{
    //
    public function index(){
        if(request(['tag','page','search'])){
            return view('listings.search_index',['listings'=>listings::latest()->filter(request(['tag','search']))->paginate(6),
            ]);
        }else{
            return view('listings.index',['listings'=>listings::inRandomOrder()->limit(4)->get(),
        'newspapers'=>listings::orderBy('created_at', 'desc')->limit(5)->get(),
        'Suggestions'=>listings::inRandomOrder()->limit(5)->get(),
        'oldposts' => listings::all()->take(6),
        'tags' => tags::all()->take(6)]);

        }
    }
    public function posts(){
        return view('listings.search_index',['listings'=>listings::paginate(6),
            ]);
    }

    public function show(listings $listing){
        return view('listings.show',[
            'listing' =>$listing,
        ]);
    }

    public function create(){
        return view('listings.create',['tags'=>tags::all()]);
    }

    public function store(Request $request){
        $formField = $request->validate([
            'title' => 'required|unique:listings|max:255',
            'tags' => 'required',
            'body' => 'required',
            'thumbnail' => 'required|image|mimes:jpg,jpeg,png,gif|max:2048',
                ]);

        if($request->hasFile('thumbnail')){
            $formField['thumbnail'] = $request->file('thumbnail')->store('thumbnail','public');
        }

        $formField['user_id'] = auth()->id();

        listings::create($formField);

        return redirect('/post/create')->with('message', 'Listings created successfully');
    }

    public function management(){
        return view('listings.management',[
            'listings' => auth()->user()->listings()->get(),]
        );
    }
    public function edit(listings $listing){

        return view('listings.edit',[
            'listings' =>$listing,
            'tags'=>tags::all()
        ]);
    }

    public function update(Request $request,listings $listing){

        $formField = $request->validate([
            'title' => 'required|max:255',
            'tags' => 'required',
            'body' => 'required',
            'thumbnail' => 'image|mimes:jpg,jpeg,png,gif|max:2048',
                ]);

        if($request->hasFile('thumbnail')){
            $formField['thumbnail'] = $request->file('thumbnail')->store('thumbnail','public');
        }

        $listing->update($formField);
        return back()->with('message', 'Listings Updated successfully');
    }

    public function destroy(listings $listing){
        $listing->delete();
        return redirect('/management');
    }

    public function thanhvien(){
        return view('thanhvien.thanhvien');
    }




}
