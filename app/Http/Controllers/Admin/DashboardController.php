<?php

namespace App\Http\Controllers\Admin;


use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }


    public function index(Request $request)
    {
        $colors = ['primary', 'secondary', 'success', 'info', 'warning', 'danger'];
        $counts = collect(array(
            /*['name' => trans('transAdmin.orders'), 'count' => Order::count(), 'color' => $colors[5], 'icon' => 'shopping-cart'],
            ['name' => trans('transAdmin.type'), 'count' => Type::count(), 'color' => $colors[1], 'icon' => 'th'],
            ['name' => trans('transAdmin.products'), 'count' => Product::count(), 'color' => $colors[2], 'icon' => 'shopping-bag'],
            ['name' => trans('transFront.clients'), 'count' => AkkentClient::count(), 'color' => $colors[4], 'icon' => 'tags'],
           */ /*['name' => trans('transAdmin.users'), 'count' => User::count(), 'color' => $colors[3], 'icon' => 'users'],*/



        ));
        $request->validate([
            'api' => 'nullable|integer|between:0,1',
            'robot' => 'nullable|integer|between:0,1',
        ]);

        $api = $request->api ?: 0;
        $robot = $request->robot ?: 0;

        $maps = DB::table("ip_addresses")
            ->leftJoin('visitors', function ($join) use ($api, $robot) {
                $join->on('ip_addresses.id', '=', 'visitors.ip_address_id')
                    ->where('visitors.api', $api)
                    ->where('visitors.robot', $robot);
                /*->where('visitors.updated_at', '>', Carbon::now()->sub()->toDateTimeString());*/
            })
            ->whereNotNull('ip_addresses.country_code')
            ->where('ip_addresses.country_code', "!=", "")
            ->havingRaw('COUNT(visitors.id) > ?', [0])
            ->selectRaw("COUNT(visitors.id) as count, ip_addresses.country_name, ip_addresses.country_code")
            ->groupBy('ip_addresses.country_name', 'ip_addresses.country_code')
            ->get();

        return view('admin.dashboard.index')
            ->with([
                'counts' => $counts,
                'api' => $api,
                'robot' => $robot,
                'maps' => $maps,
            ]);
    }
}
