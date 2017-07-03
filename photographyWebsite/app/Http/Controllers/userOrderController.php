<?php

namespace App\Http\Controllers;

use App\Orders;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class userOrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user_id=Auth::user()->id;

        $orders=Orders::where('user_id',$user_id)
            ->where('delivered','1')
            ->orderBy('companyName', 'packageName','description','price')
            ->take(100)
            ->get();

        return view('Order.userIndex',compact('orders'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $order=new Orders();
        $order->user_id= Auth::user()->id;
        $order->company_id=$request->company_id;
        $order->package_id=$request->packageid;
        $order->CompanyName=$request->companyname;
        $order->packagename=$request->packagename;
        $order->description=$request->description;
        $order->price=$request->price;
        $order->delivered=$request->delivered;
        $order->save();
        return view('Order.createOrder');
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
        $order=Orders::findOrFail($id);
        $order->delete($id);
        return redirect('/UserOrders')->with('msg','order has been deleted successfully');
    }
}
