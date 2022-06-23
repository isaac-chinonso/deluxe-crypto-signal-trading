<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use App\Support;
use App\Deposit;
use App\Image;
use App\Withdraw;
use App\Withdrawinfo;

class PostController extends Controller
{
    public function savesupport(Request $request)
    {
        $user = Auth::user();
        // Validation
        $this->validate($request, [
            'support_subject' => 'required',
            'support_message' => 'required',
        ]);

        // Save Record into support DB
        $support = new Support();
        $support->user_id = $user->id;
        $support->support_subject = $request->input('support_subject');
        $support->support_message = $request->input('support_subject');
        $support->status = 1;
        $support->save();

        \Session::flash('Success_message', 'Thank you for your message, we will get in touch with you shortly');

        return redirect()->back();
    }


    public function savedeposit(Request $request)
    {
        $user = Auth::user();
        // Validation
        $this->validate($request, [
            'amount' => 'required',
            'payment_type' => 'required',
        ]);

        // Save Record into Deposit DB
        $deposit = new Deposit();
        $deposit->user_id = $user->id;
        $deposit->amount = $request->input('amount');
        $deposit->payment_type = $request->input('payment_type');
        $deposit->status = 0;
        $deposit->save();

        $image = $request['image'];
        $filename = time() . '.' . $image->getClientOriginalExtension();
        $destination = public_path('upload/');
        $image->move($destination, $filename);

        // Save Record into image DB
        $image = new Image();
        $image->deposit_id = $deposit->id;
        $image->source = $filename;
        $image->save();

        \Session::flash('Success_message', 'Deposit Sent Successfully, Your deposit will be confirmed within 24hrs');

        return redirect()->route('userdeposit');
    }

    public function savewithdraw(Request $request)
    {
        $user = Auth::user();
        // Validation
        $this->validate($request, [
            'amount' => 'required',
            'payment_type' => 'required',
        ]);

        // Save Record into Withdraw DB
        $withdraw = new Withdraw();
        $withdraw->user_id = $user->id;
        $withdraw->amount = $request->input('amount');
        $withdraw->payment_type = $request->input('payment_type');
        $withdraw->status = 0;
        $withdraw->save();

        \Session::flash('Success_message', 'Your withdraw request is processing,, We will notify you in 24hrs about your withdrawal and will be credited');

        return redirect()->back();
    }


    // Update btcwithdrawinfo function
    public function savebtcinfo(Request $request, $id)
    {
        $withdrawinfo = Withdrawinfo::find($id);
        // Validation
        $this->validate($request, array(
            'btcaddress' => 'required',
        ));

        $withdrawinfo = Withdrawinfo::find($id);

        $withdrawinfo->btcaddress = $request->input('btcaddress');

        $withdrawinfo->status = 1;

        $withdrawinfo->save();

        \Session::flash('Success_message', 'BTC Wallet Successfully Added');

        return redirect()->back();
    }

    // Update btcwithdrawinfo function
    public function saveethinfo(Request $request, $id)
    {
        $withdrawinfo = Withdrawinfo::find($id);
        // Validation
        $this->validate($request, array(
            'ethwallet' => 'required',
        ));

        $withdrawinfo = Withdrawinfo::find($id);

        $withdrawinfo->ethwallet = $request->input('ethwallet');

        $withdrawinfo->status = 1;

        $withdrawinfo->save();

        \Session::flash('Success_message', 'ETH Wallet Successfully Added');

        return redirect()->back();
    }

    // Update adawithdrawinfo function
    public function saveadainfo(Request $request, $id)
    {
        $withdrawinfo = Withdrawinfo::find($id);
        // Validation
        $this->validate($request, array(
            'adawallet' => 'required',
        ));

        $withdrawinfo = Withdrawinfo::find($id);

        $withdrawinfo->adawallet = $request->input('adawallet');

        $withdrawinfo->status = 1;

        $withdrawinfo->save();

        \Session::flash('Success_message', 'ADA Wallet Successfully Added');

        return redirect()->back();
    }
}
