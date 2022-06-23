<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;
use App\Deposit;
use App\Withdraw;
use App\Withdrawinfo;

class PageController extends Controller
{
    public function dashboard()
    {
        $user = Auth::user();
        $data['totaldeposit'] = Deposit::where('user_id', $user->id)->sum('amount');
        return view('user.dashboard', $data);
    }

    public function withdrawinfo()
    {
        $user = Auth::user();
        $data['withdrawinfo'] = Withdrawinfo::where('user_id', $user->id)->first();
        return view('user.withdrawlinfo', $data);
    }

    public function notification()
    {
        return view('user.notification');
    }

    public function support()
    {
        return view('user.support');
    }

    public function tradinghistory()
    {
        return view('user.tradinghistory');
    }

    public function transactionhistory()
    {
        $user = Auth::user();
        $data['deposit'] = Deposit::where('user_id', $user->id)->get();
        $data['withdraw'] = Withdraw::where('user_id', $user->id)->get();
        return view('user.transactionhistory', $data);
    }

    public function deposit()
    {
        $user = Auth::user();
        $data['deposit'] = Deposit::where('user_id', $user->id)->get();
        $data['withdraw'] = Withdraw::where('user_id', $user->id)->get();
        return view('user.deposit', $data);
    }

    public function newdeposit()
    {
        return view('user.newdeposit');
    }

    public function plan()
    {
        return view('user.plan');
    }

    public function withdraw()
    {
        return view('user.withdraw');
    }

    public function setting()
    {
        return view('user.setting');
    }

    Public function activate()
    {
        return view('user.activation');
    }
    
     Public function activatesuccess()
    {
        return view('user.activatesuccess');
    }
}
