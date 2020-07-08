<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Resip;

use App\Contact;

use App\Restorant;

class frontendController extends Controller
{
    public function indexRicipes (){
        $allRicipes = Resip::all();
        return view("index")->with(["recipes"=>$allRicipes]);
    }
    public function detailsRicipes ($id){
        $Ricipe = Resip::find($id);
        return view("post")->with(["recipe"=>$Ricipe]);
    }
    public function generalRecipes (){
        $allRicipes = Resip::where("category","General Recipes")->get();
        $count = Resip::where("category","General Recipes")->count();
        return view("generalRecipes")->with(["recipes"=>$allRicipes,"count"=>$count]);
    }
    public function healthyRecipes (){
        $allRicipes = Resip::where("category","Healthy Recipes")->get();
        $count = Resip::where("category","Healthy Recipes")->count();
        return view("healthyRecipes")->with(["recipes"=>$allRicipes,"count"=>$count]);
    }
    public function recipesForKids (){
        $allRicipes = Resip::where("category","Recipes For Kids")->get();
        $count = Resip::where("category","Recipes For Kids")->count();
        return view("recipesForKids")->with(["recipes"=>$allRicipes,"count"=>$count]);
    }


    public function about (){
        $countRicipes = Resip::all();
        $countRestorant = Restorant::all();
        return view("about")->with(["countRicipes"=>$countRicipes,"countRestorant"=>$countRestorant]);
    }
    public function contact (){
        return view("contact");
    }


    public function storeContact (Request $request){
        $contact = new Contact();
        $contact->name = $request->input("name");
        $contact->email = $request->input("email");
        $contact->title = $request->input("title");
        $contact->message = $request->input("message");
        $contact->save();
        return view("contact");
    }

    public function bestRestorant (){
        $restorant = Restorant::all();
        return view("bestRestorants")->with(["restorants"=>$restorant]);
    }
    public function restorant ($id){
        $restorant = Restorant::find($id);
        return view("restorant")->with(["restorant"=>$restorant]);
    }
    public function searchRestorant (Request $request){
        $state = $request->input("state");
        $restorant = Restorant::where("state",$state)->get();
        return view("searchRestorant")->with(["restorants"=>$restorant,"state"=>$state]);
    }
}