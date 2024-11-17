<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Content;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AnalyticsController extends Controller
{
    public function index()
    {
        $userCount = User::count();
        $contentCount = Content::count();
        return view('dashboard_admin.dashboard_analytic',['user_count' => $userCount, 'content_count' => $contentCount]);
    }
}
