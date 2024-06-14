<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreRealisationRequest;
use App\Http\Requests\UpdateRealisationRequest;
use App\Models\Realisation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Str;

class RealisationController extends Controller
{
    public function index()
    {
        $realisations = Realisation::paginate(9);
        $realisations->transform(function ($realisation) {
            $realisation->slug = Str::slug($realisation->titre);
            return $realisation;
        });

        return view('realisation.index', compact('realisations'));
    }

    public function create(Realisation $realisation)
    {
        return view('realisation.create', ['realisation' => $realisation]);
    }


    public function store(StoreRealisationRequest $request)
    {
        $input = $request->only(['titre', 'categorie', 'localisation', 'annee', 'duree', 'contexte-objectif', 'participation-individuelle', 'analyse-critique', 'resultats']);

        if ($image = $request->file('image')) {
            $destinationPath = 'picture/';
            $profileImage = $image->getClientOriginalName();
            $image->move($destinationPath, $profileImage);
            $input['image'] = $profileImage;
        }

        Realisation::create($input);

        return redirect()->route('realisations');
    }

    public function show($title)
    {
        $realisation = Realisation::where('titre', str_replace('-', ' ', $title))->firstOrFail();
        $images = json_decode($realisation->images, true);
        return view('realisation.show', compact('realisation', 'images'));
    }

    public function edit(Realisation $realisation)
    {
        return view('realisation.edit', [
            'realisation' => $realisation,
            'currentImage' => $realisation->image
        ]);
    }


    public function update(Request $request, Realisation $realisation)
    {
        $input = $request->only(['titre', 'categorie', 'localisation', 'annee', 'duree', 'contexte-objectif', 'participation-individuelle', 'analyse-critique', 'resultats']);

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $destinationPath = 'picture/';
            $imageName = $image->getClientOriginalName();
            $image->move($destinationPath, $imageName);
            $input['image'] = $imageName;
        } elseif ($request->has('current_image')) {
            $input['image'] = $request->input('current_image');
        }

        $realisation->update($input);

        if ($request->hasFile('images')) {
            $currentImages = json_decode($realisation->images, true) ?? []; // Convertir la chaîne JSON en tableau ou assigner un tableau vide
            $newImages = [];

            foreach ($request->file('images') as $image) {
                $imageName = $image->getClientOriginalName();
                $destinationPath = 'picture/';
                $image->move($destinationPath, $imageName);
                $newImages[] = $imageName;
            }

            $updatedImages = array_merge($currentImages, $newImages); // Fusionner les images actuelles et les nouvelles images

            $realisation->images = json_encode($updatedImages); // Convertir le tableau en chaîne JSON
            $realisation->save();
        }

        return redirect()->route('realisations');
    }

    public function delete(Realisation $realisation)
    {
        return view('realisation.delete', ['realisation' => $realisation]);
    }

    public function destroy(Realisation $realisation)
    {
        if (Auth::user()) {
            $realisation->delete();
            return redirect()->route('realisations');
        }
    }

    public function removeImage(Request $request, Realisation $realisation, $image)
    {
        $images = json_decode($realisation->images, true); // Convertir la chaîne JSON en tableau

        // Rechercher l'index de l'image à supprimer
        $index = array_search($image, $images);

        if ($index !== false) {
            unset($images[$index]); // Supprimer l'image du tableau

            // Mettre à jour la colonne "images" avec le tableau mis à jour
            $realisation->images = json_encode(array_values($images));
            $realisation->save();
        }

        return redirect()->back();
    }
}
