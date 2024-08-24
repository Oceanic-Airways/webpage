<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;
use Termwind\Components\Raw;

class FsAirlinesController extends Controller
{
    public function login(Request $request)
    {
        $request->validate([
            "userFsAirlines" => "required|string",
            "passFsAirlines" => "required|string",
        ]);

        $response = Http::post('https://www.fsairlines.net/va_interface2.php?function=pilotLogin&va_id=' . env('FSAIRLINES_VA_ID') . '&format=json&apikey=' . env('FSAIRLINES_API'), [
            "user" => $request->userFsAirlines,
            "password" => $request->passFsAirlines,
        ]);
        $data = json_decode($response, true);

        if ($data['status'] === 'SUCCESS') {
            return $this->handlerLogin($data["data"]);
        } else {
            return redirect()->back()->with('error', "User or password is invalid");
        }
    }

    public function handlerLogin($user)
    {
        $findUser = User::where('pilot_id', intval($user["pilot_id"]))->first();

        if ($findUser) {
            $findUser->pilot_id = $user["pilot_id"];
            $findUser->name = $user["name"];
            $findUser->surname = $user["surname"];
            $findUser->alt_code = $user["alt_code"];
            $findUser->budget = $user["budget"];
            $findUser->default_sim = $user["default_sim"];
            $findUser->hide_sidebar = $user["hide_sidebar"];
            $findUser->location = $user["location"];
            $findUser->premium = $user["premium"];
            $findUser->rank = $user["rank"];
            $findUser->rank_id = $user["rank_id"];
            $findUser->token = $user["token"];
            $findUser->va_id = $user["va_id"];
            $findUser->va_status = $user["va_status"];
            $findUser->va_user = $user["va_user"];
            $findUser->weightunit = $user["weightunit"];
            $findUser->save();
            Auth::login($findUser);
        } else {
            $newUser = User::create([
                "pilot_id" => $user["pilot_id"],
                "name" => $user["name"],
                "surname" => $user["surname"],
                "alt_code" => $user["alt_code"],
                "budget" => $user["budget"],
                "default_sim" => $user["default_sim"],
                "hide_sidebar" => $user["hide_sidebar"],
                "location" => $user["location"],
                "premium" => $user["premium"],
                "rank" => $user["rank"],
                "rank_id" => $user["rank_id"],
                "token" => $user["token"],
                "va_id" => $user["va_id"],
                "va_status" => $user["va_status"],
                "va_user" => $user["va_user"],
                "weightunit" => $user["weightunit"],
                "password" => bcrypt("OceanicAirways"),
            ]);
            Auth::login($newUser);
        }

        return redirect()->to('/');
    }
}
