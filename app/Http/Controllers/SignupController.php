<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Carbon\Carbon;
use App\Models\User;

use Illuminate\Support\Facades\Hash;

class SignupController extends Controller
{
    public function index() {
        return view('signup', [
            'upperNav' => 'signup',
            'sideNav' => 'subscribe',
        ]);
    }

    public function createAccount(Request $request) {
        $this->validate($request, [
            'name' => 'required',
            'address' => 'required',
            'email' => 'required|email|max:255|unique:users,email',
            'phone' => 'required',
            // 'date' => 'required',
            // 'password' => 'required|confirmed',
        ]);

        $date = new Carbon($request->date);
        $newDate = $date->toFormattedDateString();

        $age = Carbon::parse($date)->age;

        User::create([
            'name' => $request->name,
            'address' => $request->address,
            'email' => $request->email,
            'date' => $request->date,
            'password' => Hash::make('password'),
            'type' => 'client',
            'age' => $age,
            'phone' => $request->phone,
        ]);

        return redirect() -> route('signup')->with('success', 'Thank you. We will be in touch');

    }
}
