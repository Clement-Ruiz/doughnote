<?php

namespace App\Http\Controller;

use App\Commentaire;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CommentairesController extends Controller
{
    public function store($request, $author_id)
    {
        if(Auth::user()->id == $author_id){
            $input = $request->all(); //Récupère tous les POST
            $this->validate($request, Commentaire::$rules["create"]);  //On vérifie tous les champs du POST
            $status_create = Commentaire::create($input);          //On crée l'User
            if($status_create){
                return redirect()->back();
            } else{
                return redirect()->back()->with("danger",  "Une erreur est survenue. Surveillez votre saisie");
            }
        }
    }

    public function update(Request $request, $id, $author_id)
    {
        if(Auth::user()->id == $author_id){
            $input = $request->all(); //Récupère tous les POST
            $user_update = Commentaire::findOrFail($id);
            $this->validate($request, User::$rules["update"]);  //On vérifie tous les champs du POST
            $status_update = $user_update->update($input);
            if($status_update){
                return redirect()->back()->with("success", "Le compte a bien été modifié");
            } else{
                return redirect()->back()->with("danger",  "Une erreur est survenue. Surveillez votre saisie");
            }
        }
        else{
            redirect()->back("Vous ne pouvez pas modifier cet Utilisateur");
        }
    }


    public function destroy($id)
    {
        $count= Commentaire::destroy($id);
        if($count ==1){
            return redirect()->back()->with("success", "Votre Utilisateur a bien été supprimé");
        }
        else{
            return redirect()->back()->with("danger", "Une erreur est survenue =/");
        }
    }
}
