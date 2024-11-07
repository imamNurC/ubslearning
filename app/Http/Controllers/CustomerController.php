<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{

public function showProfile($username)
{
    $customer = Customer::where('username', $username)->firstOrFail();
    return view('dashboard_user.dashboardUser_my_profile', compact('customer'));
}

public function showMyContent($username)
{
    $customer = Customer::where('username', $username)->firstOrFail();
    return view('dashboard_user/dashboardUser_my_content', compact('customer'));
}

}
