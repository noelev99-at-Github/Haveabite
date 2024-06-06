<?php

namespace App\Http\Controllers;

use App\Models\Orders;
use App\Models\Foods;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OrdersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create_order(Request $request, $id)
    {
        //
        if(Auth::check()){
            $request->validate([
                'qty' => 'required'
            ]);
    
            $foods = Foods::where('id', $id)->get();
    
            foreach($foods as $food)
            {
                $total = ($food->price)*($request->qty);
                $food_num = $food->id;
            }
            
    
            $orders = Orders::create([
                'food_id' => $food_num,
                'buyer_id' => $request->user()->id,
                'qty' => $request->qty,
                'cost' => $total
            ]);
    
            return view('checkout', compact('orders'));
        }
        
        return redirect('login');
        
    }

    
    public function cancel($id)
    {
        $data = Orders::find($id);
        $data->delete();
        return redirect('main_menu')->with('status','Order Cancelled Successfully');
    }

    public function main()
    {
        return redirect('main_menu');
    }

    public function my_orders()
    {
        if(Auth::check())
        {
            $orders = Orders::where('buyer_id', auth()->id())->get();
            $orders = $orders->reverse();
            return view('my_orders', compact('orders'));
        }
    }

    public function incoming_orders()
    {
        if(Auth::check())
        {
            $foods = Foods::where('seller_id', auth()->id())->get();
            $foods = $foods->reverse();
            return view('incoming_orders', compact('foods'));
        }
    }

    public function update_order($id)
    {
        $order = Orders::find($id);
        $order->status = 'delivered';
        $order->update();
        return redirect()->back()->with('status','Order Status Updated Successfully');
    }
}
