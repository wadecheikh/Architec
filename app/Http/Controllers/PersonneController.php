<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PersonneController extends Controller
{
    public function add(){

        return view('personne.add');
    }
    
    public function edit($id){

        return view('personne.edit');
    }
    public function getAll(){

        return view('personne.list');
    }
    public function delete($id){

        return $this->getAll();

    }
    public function update(){

        return $this->getAll();
    }
    public function persist(Request $request){
$personne=new Personne();
$personne->parent_id=$request->parent_id;
$personne->order=$request->order;
$personne->nom=$request->nom;
$personne->save();

 return $this->add();
    }
}
