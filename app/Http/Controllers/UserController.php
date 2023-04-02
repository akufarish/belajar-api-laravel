<?php

namespace App\Http\Controllers;

use App\Models\Saldo;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Js;

class UserController extends Controller
{

    public function index()
    {
        $user = User::all();

        return response()->json([
            "user" => $user
        ]);
    }

    public function create(Request $request)
    {

        $saldo = DB::table('saldos')->selectRaw(DB::raw("saldo_referral"))->first();

        $user = User::create([
            "name" => $request->name,
            "saldo_referral" => $saldo->saldo_referral,
            "password" => $request->password
        ]);

        if(!$user) {
            return response()->json([
                "message" => "ada error"
            ]);
        }

        // $validation = 

        return response()->json([
            "data" => $user,
            "message" => "berhasil"
        ]);
    }
}
