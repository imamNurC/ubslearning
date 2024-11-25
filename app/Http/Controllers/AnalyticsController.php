<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Content;
use App\Models\Customer;
use App\Models\Transaction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class AnalyticsController extends Controller
{
    public function index()
    {
        $userCount = Customer::count();
        $contentCount = Content::count();
        $soldCount = DB::table('transaction')->count();

        $transactions = DB::table('transaction')
            ->select(
                DB::raw('DATE(created_at) as date'), 
                DB ::raw('COUNT(*) as total')
            )
            ->where('created_at', '>=', now()->subDays(7))
            ->groupBy('date')
            ->orderBy('date', 'asc')
            ->get();
        
        if ($transactions->isEmpty()) {
            $chartData = [
                'dates' => [
                    now()->subDays(6)->toDateString(),
                    now()->subDays(5)->toDateString(),
                    now()->subDays(4)->toDateString(),
                    now()->subDays(3)->toDateString(),
                    now()->subDays(2)->toDateString(),
                    now()->subDay()->toDateString(),
                    now()->toDateString(),
                ],
                'totals' => [5,10,7,15,8,6,12],
            ];
        } else {
        
            $chartData = [
                'dates' => $transactions->pluck('date'),
                'totals' => $transactions->pluck('total'),
            ];
        }

        return view('dashboard_admin.dashboard_analytic',[
            'user_count' => $userCount, 
            'content_count' => $contentCount, 
            'sold_count' => $soldCount,
            // 'chartData' => $chartData,
        ]);
    }
}
