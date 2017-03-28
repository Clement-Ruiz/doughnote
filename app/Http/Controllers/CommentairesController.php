<?php

namespace App\Http\Controller;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CommentairesController extends Controller
{
    public function store(Request $request, $id)
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

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
