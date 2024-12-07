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
        $soldCount = DB::table('transactions')->count();

        $transactions = DB::table('transactions')
            ->select(
                DB::raw('DATE(created_at) as date'),
                DB::raw('COUNT(*) as total')
            )
            ->where('created_at', '>=', now()->subDays(7))
            ->groupBy('date')
            ->orderBy('date', 'asc')
            ->get();



        if ($transactions->isEmpty()) {
            $chartData = [
                'dates' => [
                    now()->subDays(6)->format('D'),
                    now()->subDays(5)->format('D'),
                    now()->subDays(4)->format('D'),
                    now()->subDays(3)->format('D'),
                    now()->subDays(2)->format('D'),
                    now()->subDay()->format('D'),
                    now()->format('D'),
                ],
                'totals' => [5, 4, 2, 3, 1, 5, 6],
            ];
        } else {
            // Use 'format('l')' to get day names (e.g., 'Monday', 'Tuesday', etc.)
            $chartData = [
                'dates' => $transactions->pluck('date')->map(function ($date) {
                    return \Carbon\Carbon::parse($date)->format('l');
                }),
                'totals' => $transactions->pluck('total'),
            ];
        }

        // $isAnalyticsPage = true;
        return view('dashboard_admin.dashboard_analytic', [
            // 'isAnalyticsPage' => $isAnalyticsPage,
            'user_count' => $userCount,
            'content_count' => $contentCount,
            'sold_count' => $soldCount,
            'chartData' => $chartData,
        ]);
    }
}
