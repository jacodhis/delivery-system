<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
       $customers = User::whereRoleId(2)
                        ->orderByDesc('created_at')
                         ->get();
       return view('customers.index',compact('customers'));

    }



    public function show(User $customer)
    {
      return view('customers.show',compact('customer'));   
    }



    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $customer)
    {
        $customer->delete();
        return back()->with('success','customer removed successfully');
    }
}
