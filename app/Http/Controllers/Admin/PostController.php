<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use App\Deposit;
use App\Withdraw;

class PostController extends Controller
{
    public function activateuser($id)
    {

        User::where(['id' => $id])
            ->update(array('status' => 1));

        \Session::flash('Success_message', 'Activation Successfully');

        return back();
    }

    public function deactivateuser($id)
    {

        User::where(['id' => $id])
            ->update(array('status' => 0));

        \Session::flash('Success_message', 'Deactivation Successfully');

        return back();
    }


    public function approvedeposit($id)
    {

        Deposit::where(['id' => $id])
            ->update(array('status' => 1));

        \Session::flash('Success_message', 'Deposit Approved Successfully');

        return back();
    }

    public function approvewithdraw($id)
    {

        Withdraw::where(['id' => $id])
            ->update(array('status' => 1));

        \Session::flash('Success_message', 'Paid Successfully');

        return back();
    }
}
