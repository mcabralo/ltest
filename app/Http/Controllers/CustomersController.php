<?php

namespace App\Http\Controllers;

use App\Customer;
use Illuminate\Http\Request;

class CustomersController extends Controller
{
    public function list(){
        
    $activeCustomers = Customer::where('active', 1)->get();
    $inactiveCustomers = Customer::where('active', 0)->get();

    //$customers = Customer::all();

    return view('internals.customers',compact('activeCustomers', 'inactiveCustomers'));
    }
    /* Esta é uma maneira mais descritiva de fazer, diferente da opção acima, na qual usa-se acompact para diminuir auto referências
    return view('internals.customers',[
        //'customers' => $customers, o mais importante dessa sintaxe é a key (nesse caso customers), ela que será referenciada na view, independente da variável.
        'activeCustomers' => $activeCustomers,
        'inactiveCustomers' => $inactiveCustomers
    ]);
    }*/

    public function store(){

        $data = request()->validate([
            'name' => 'required|min:3',
            'email' => 'required|email',
            'active' => 'required'
        ]);

        $customer = new Customer();
        $customer->name = request('name');
        $customer->email = request('email');
        $customer->active = request('active');
        $customer->save();
        
        return back();
    }
}
