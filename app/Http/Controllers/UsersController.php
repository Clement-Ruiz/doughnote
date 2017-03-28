<?php

namespace App\Http\Controllers;


use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UsersController extends Controller
{
    public function index()
    {
        $users = User::get();
        return view("UserList", compact("users"));
    }

    public function create(){
        return view('UserCreate');
    }

    public function store($request){
        $input = $request->all(); //Récupère tous les POST
        $this->validate($request, User::$rules["create"]);  //On vérifie tous les champs du POST
        $status_create = User::create($input);          //On crée l'User
        if($status_create){
            return redirect(route("users.show", $status_create))->with("success", "L'utilisateur a bien été créé");
        } else{
            return redirect()->back()->with("danger",  "Une erreur est survenue. Surveillez votre saisie");
        }
    }

    public function show($id)
    {
        $user = User::findOrFail($id);
        return view("/users/profile", compact("user"));
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
        $input = $request->all(); //Récupère tous les POST
        $user_update = User::findOrFail($id);
        $this->validate($request, User::$rules["update"]);  //On vérifie tous les champs du POST
        $status_update = $user_update->update($input);
        if($status_update){
            return redirect(route("users.show", $user_update))->with("success", "Le compte a bien été modifié");
        } else{
            return redirect()->back()->with("danger",  "Une erreur est survenue. Surveillez votre saisie");
        }
    }

    public function destroy($id)
    {
        $count= User::destroy($id);
        if($count ==1){
            return redirect()->back()->with("success", "Votre Utilisateur a bien été supprimé");
        }
        else{
            return redirect()->back()->with("danger", "Une erreur est survenue =/");
        }
    }
}
