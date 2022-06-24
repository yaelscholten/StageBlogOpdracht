<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;
class BlogController extends Controller
{
    public function home() {
        $blogs = Blog::latest()->get();

            return view('welcome', ['blogs' => $blogs]);
        }
    public function index() {
        $blogs = Blog::all();
            return view('blogs.index');
        }
        
    public function show($id) {
        $blog = Blog::findOrFail($id);
            return view('blogs.show', ['blog' => $blog]);
        }

    public function create() {
            return view('blogs.create');
    }  

    public function opslaan(Request $request) {
        
        $request->validate([
            'foto' => 'required|mimes:jpg,png,jpeg|max:5048'
        ]);
        $newImageName = time() . '-' . $request->titel . '.' . $request->foto->extension();
        $request->foto->move(public_path('fotos'), $newImageName);

        $blog = new Blog();

        $blog->titel = request('titel');
        $blog->tekst = request('tekst');
        $blog->image_path = $newImageName;

        $blog->save();

        return redirect('/')->with('geplaatst', 'Blog geplaatst!');
    }  

    public function verwijder($id) {
        
        $blog = Blog::findOrFail($id);
        $blog->delete();

        return redirect('/')->with('verwijderd', 'Blog verwijderd!');
    }  

    public function edit($id) {
        $blog = Blog::find($id);
        return view('blogs.edit', ['blog'=>$blog]);
    }  

    public function update(Request $request) {
        $blog=Blog::find($request->id);
        $blog->titel=$request->titel;   
        $blog->tekst=$request->tekst;
        $blog->save();
        return redirect('/');
    }  
    }

