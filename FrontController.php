<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Inscrire;
class FrontController extends Controller
{
    public function index()
    {
        return  view("admin.index");
    }
    public function test()
    {
        return view("admin.test");
    }
    public function inscription()
    {
        return view("admin.inscription");
    }
    public function inscrire(Request $request)
    {
        
        $inscrire= new Inscrire();
        $inscrire->noms= $request->noms;
        $inscrire->prenoms= $request->prenoms;
        $inscrire->birthday= $request->birthday;
        $inscrire->lieunaissance= $request->lieunaissance;
        $inscrire->pays= $request->pays;
        $inscrire->nationalite= $request->nationalite;
        $inscrire->profession= $request->profession;
        $inscrire->email= $request->email;
        $inscrire->tel= $request->tel;
        $inscrire->numerowhatsapp= $request->numerowhatsapp;
        $inscrire->sexe= $request->M;
        $inscrire->sexe1= $request->F;
        $inscrire->Module= $request->dropdown;
        $inscrire->Cours= $request->jour;
        $inscrire->Cours= $request->soir;
        $inscrire->Lieuformation=$request->dropdown;
        
    
        $inscrire->save();
        return view("admin.inscrire");
    
        
        
    }
}
