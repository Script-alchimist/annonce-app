<?php

namespace App\Http\Controllers;

use App\Models\Annonce;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class AnnonceController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except(['index', 'show', 'search']);
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $annonces = Annonce::with('user', 'category')->latest()->paginate(10);
        $categories = Category::all();
        return view('pages.container', compact('annonces', 'categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $categories = Category::all();
        return view('pages.profile.manager.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'price' => 'required|numeric|min:0',
            'phone' => 'required|string|min:8',
            'location' => 'required|string|min:3',
            'category_id' => 'required|exists:categories,id',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $imagePath = null;
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('annonces_images', 'public');
        }
        Annonce::create([
            'user_id' => auth()->id(),
            'category_id' => $request->category_id,
            'title' => $request->title,
            'description' => $request->description,
            'price' => $request->price,
            'phone'=> $request->phone,
            'location'=>$request->location,
            'image' => $imagePath,
        ]);

        return redirect()->route('user-annonces')->with('success', 'Annonce créée avec succès !');
    }

    /**
     * Display the specified resource.
     */
    public function show(Annonce $annonce)
    {
        //
        $annonce->load('user', 'category');
        return view('pages.article', compact('annonce'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Annonce $annonce)
    {
        //
        $this->authorize('update', $annonce); 
        $categories = Category::all();
        return view('pages.profile.manager.edit', compact('annonce', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Annonce $annonce)
    {
        //
        $this->authorize('update', $annonce); 

        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'category_id' => 'required|exists:categories,id',
            'price' => 'required|numeric|min:0',
            'phone' => 'required|string|min:8',
            'location' => 'required|string|min:3',
            'image' => 'nullable|image|mimes:png,jpeg,jpg|max:3072',
        ]);

        $imagePath = $annonce->image;

        if ($request->hasFile('image')) {
            if ($annonce->image) {
                Storage::disk('public')->delete($annonce->image);
            }
            $imagePath = $request->file('image')->store('annonces_images', 'public');
        } elseif ($request->boolean('remove_image')) { // Ajout d'une case à cocher pour supprimer l'image
             if ($annonce->image) {
                Storage::disk('public')->delete($annonce->image);
            }
            $imagePath = null;
        }


        $annonce->update([
            'category_id' => $request->category_id,
            'title' => $request->title,
            'description' => $request->description,
            'price' => $request->price,
            'location' => $request->location,
            'image' => $imagePath,
        ]);

        return redirect()->route('article', $annonce)->with('success', 'Annonce mise à jour avec succès !');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Annonce $annonce)
    {
        $this->authorize('delete', $annonce); 
        if ($annonce->image) {
            Storage::disk('public')->delete($annonce->image);
        }

        $annonce->delete();

        return redirect()->route('user-profile')->with('success', 'Annonce supprimée avec succès !');
    }

    public function userAnnonces()
    {
        // Récupère les annonces de l'utilisateur authentifié
        $annonces = Auth::user()->annonces()->with('category')->latest()->paginate(10);
        return view('pages.profile.manager.annonces', compact('annonces'));
    }

    public function search(Request $request)
    {
        // Recherche d'annonces par titre ou description
        $query = Annonce::with('user', 'category')->latest();
        if ($request->has('search') && !empty($request->search)) {
            $searchTerm = $request->search;
            $query->where('titre', 'LIKE', '%' . $searchTerm . '%');
        }
        $annonces = $query->paginate(10);

        return view('Layout.partial.header', compact('annonces','searchTerm'));//
    }
}
