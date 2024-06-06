<?php

namespace App\Http\Controllers;

use App\Models\Foods;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class FoodsController extends Controller
{
    //
    public function seller()
    {
        if(Auth::check()){
            $userid = user::where('id', auth()->id())->get();
            $food_items = Foods::where('seller_id', auth()->id())->get();
            $food_items = $food_items->reverse();
            return view('seller', compact('food_items'));
        }
  
        return redirect("login")->withSuccess('You are not allowed to access');
    }

    public function main_menu()
    {
        if(Auth::check()){
            $food_items = Foods::all();
            $food_items = $food_items->reverse();
            return view('main_menu', compact('food_items'));
        }
  
        return redirect("login")->withSuccess('You are not allowed to access');
    }



    public function store_item(Request $request)
    {
        
        $request->validate([
            'food_name' => 'required',
            'price' => 'required',
            'ingredients' => 'required',
            'desc' => 'required',
            'image' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:20012'
        ]);
        
        $name = $this->imageName($request);
        $path = $this->storeImage($request, $name);
        Foods::create([
            'seller_id' => $request->user()->id,
            'food_name' => $request->food_name,
            'price' => $request->price,
            'ingredients' => $request->ingredients,
            'desc' => $request->desc,
            'images' => 'food_images/' . $name
        ]);
        session()->flash('message', $request->food_name.' successfully added');
        return redirect("seller")->withSuccess('Food Item Added');
    }

    private function imageName($request)
    {
        $newImagename = uniqid() . '-' . $request->user()->id . '.' . $request->image->extension();
        return $newImagename;
    }

    private function storeImage($request, $name)
    {
        $newImagename = $name;
        //$newImagename = uniqid() . '-' . $request->user()->id . '.' . $request->image->extension();
        return $request->image->move(public_path('food_images'), $newImagename);
    }

    public function destroy($id)
    {
        $data = Foods::find($id);
        $data->delete();
        return redirect()->back()->with('status','Food Item Deleted Successfully');
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'food_name'=>'required',
            'price'=>'required',
            'ingredients'=>'required',
            'desc'=>'required',
        ]);

        $food = Foods::find($id);
        $food->food_name = $request->input('food_name');
        $food->price = $request->input('price');
        $food->ingredients = $request->input('ingredients');
        $food->desc = $request->input('desc');
        
        
        if($request->image != NULL)
        {
            $name = $this->imageName($request);
            $path = $this->storeImage($request, $name);
            $food->images = 'food_images/' . $name;
        }

        $food->update();
        return redirect()->back()->with('status','Food Item Updated Successfully');
    }
}
