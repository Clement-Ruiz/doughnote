<?php

namespace App\Http\Controllers\prof;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UsersController extends Controller
{
    public function index()
    {
        $users = User::get();
        return view("UserList", compact("users"));
    }

    public function show($id)
    {
        $user = User::findOrFail($id);
        return view("/users/show", compact("user"));
    }

    public function edit($id)
    {
        if(Auth::user()->id == $id){
            $user = User::findOrFail($id);
            return view("/users/edit", compact("user"));
        }
        else{
            redirect()->back("Vous ne pouvez pas modifier cet Utilisateur");
        }
    }

    public function update(Request $request, $id)
    {
        if(Auth::user()->id == $id){
            $input = $request->all(); //Récupère tous les POST
            $user_update = User::findOrFail($id);
            $this->validate($request, User::$rules["update"]);  //On vérifie tous les champs du POST
            $status_update = $user_update->update($input);
            if($status_update){
                return redirect(route("profile/".$id, $user_update))->with("success", "Le compte a bien été modifié");
            } else{
                return redirect()->back()->with("danger",  "Une erreur est survenue. Surveillez votre saisie");
            }
        }
        else{
            redirect()->back("Vous ne pouvez pas modifier cet Utilisateur");
        }
    }
}
