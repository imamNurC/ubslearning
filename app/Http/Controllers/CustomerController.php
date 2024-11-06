<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{

public function showProfile($id_customer)
{
    $customer = Customer::findOrFail($id_customer);
    return view('dashboard_user.dashboardUser_my_profile', compact('customer'));
}

}
