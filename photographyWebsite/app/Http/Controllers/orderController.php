<?php

namespace App\Http\Controllers;

use App\Mail\OrderShipped;
use App\Orders;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class orderController extends Controller
{
    public function orders($type=''){

        if($type=='pending'){
           $orders=Orders::where('delivered','0')->get();

       }
elseif ($type=='delivered'){
$orders=Orders::where('delivered','1')->get();

}
else{
    $orders=Orders::all();
}

return view('Order.index', compact('orders'));
}

public function toggledeliver(Request $request,$orderId){

        $order=Orders::find($orderId);
        $email=User::where('id',$order->user_id)
        ->value('email');

        if($request->has('delivered')){
            Mail::to($email)->send(new OrderShipped($order));
            $order->delivered=$request->delivered;
        }else{
            $order->delivered='0';
        }

        $order->save();
        return back();
}





}
