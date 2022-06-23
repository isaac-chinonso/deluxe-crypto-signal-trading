<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Deposit;
use App\Withdraw;
use App\User;
use App\Withdrawinfo;
use App\Support;

class PageController extends Controller
{
    public function dashboard()
    {
        $data['pendingdeposit'] = Deposit::where('status', 0)->count();
        $data['pendingwithdraw'] = Withdraw::where('status', 0)->count();
        $data['totaldeposit'] = Deposit::count();
        $data['alluser'] = User::where('role_id', 1)->count();
        return view('admin.dashboard', $data);
    }

    public function withdrawinfo()
    {
        $data['userwithdrawinfo'] = Withdrawinfo::where('status', 1)->get();
        return view('admin.withdraw_info', $data);
    }
    public function users()
    {
        $data['users'] = User::where('role_id', 2)->get();
        return view('admin.users', $data);
    }

    public function pendingdeposit()
    {
        $data['pendingdeposit'] = Deposit::where('status', 0)->get();
        return view('admin.pending_deposit', $data);
    }

    public function pendingwithdrawal()
    {
        $data['pendingwithdrawal'] = Withdraw::where('status', 0)->get();
        return view('admin.pending_withdraw', $data);
    }

    public function confirmwithdrawal()
    {
        $data['confirmwithdrawal'] = Withdraw::where('status', 1)->get();
        return view('admin.confirm_withdraw', $data);
    }

    public function confirmdeposit()
    {
        $data['confirmdeposit'] = Deposit::where('status', 1)->get();
        return view('admin.confirm_deposit', $data);
    }

    public function support()
    {
        $data['support'] = Support::get();
        return view('admin.support', $data);
    }
}
