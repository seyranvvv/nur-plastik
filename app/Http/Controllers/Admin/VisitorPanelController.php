<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class VisitorPanelController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');

    }


    public function index(Request $request)
    {
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




        return view('admin.visitorPanel.index')
            ->with([
                'api' => $api,
                'robot' => $robot,
                'maps' => $maps,
            ]);
    }
}
