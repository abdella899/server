<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Resip;

use App\Contact;

use App\Restorant;

class dashboardController extends Controller
{

    public function returnToHome (){
        $allRicipes = Resip::all();
        return view("index")->with(["recipes"=>$allRicipes]);
    }


    public function creatRecipe (){
        $count = Resip::all()->count();
        $recips = Resip::all();
        return view("dashboard.dashboard")->with(["count"=>$count,"recips"=>$recips]);
    }
    public function storeRecipe(Request $request){
        $stoeResip = new Resip();
        $stoeResip->image = $request->input("image");
        $stoeResip->title = $request->input("title");
        $stoeResip->content = $request->input("content");
        $stoeResip->category = $request->input("category");
        $stoeResip->save();
        return redirect("/creatRecipe");
    }
    public function deletePost($id){
        $deleteResip =  Resip::find($id);
        $deleteResip->delete();
        return redirect("creatRecipe");
    }
    


    

    public function usersContacts (){
        $contacts = Contact::all();
        $count = Contact::all()->count();
        return view("dashboard.usersContacts")->with(["contacts"=>$contacts , "counts"=>$count]);
    }
    public function detailsUsersContacts ($id){
        $contacts = Contact::find($id);
        return view("dashboard.detailsUsersContacts")->with(["contact"=>$contacts]);
    }
    public function deleteUsersContacts ($id){
        $contacts = Contact::find($id);
        $contacts->delete();
        return redirect("usersContacts");
    }


    public function creatRestorant (){
        $count = Restorant::all()->count();
        $recips = Restorant::all();
        return view("dashboard.creatResorant")->with(["count"=>$count,"restorants"=>$recips]);
    }
    public function storeRestorant(Request $request){
        $storeRestorant = new Restorant();
        $storeRestorant->image = $request->input("image");
        $storeRestorant->name = $request->input("name");
        $storeRestorant->desc = $request->input("desc");
        $storeRestorant->time = $request->input("time");
        $storeRestorant->location = $request->input("location");
        $storeRestorant->state = $request->input("state");
        $storeRestorant->rate = $request->input("rate");
        $storeRestorant->save();
        return redirect("creatRestorant");
    }
    public function deleteRestorant($id){
        $Restorant = Restorant::find($id);
        $Restorant->delete();
        return redirect("creatRestorant");
    }

				


}