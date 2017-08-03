<?php

namespace App\Http\Controllers;

use App\User;
use JWTAuth;
use Tymon\JWTAuth\Exceptions\JWTExceptions;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function post(Request $request){
        if(! $user = JWTAuth::parseToken()->authenticate()){
            return response()->json(['message' => 'User not found'], 404);
        }

        $user = new User();
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->password = bcrypt($request->input('password'));
        $user->save();
        return response()->json(['user' => $user], 201);
    }

    public function get(){
        $users = User::all();
        $response = [
            'users' => $users
        ];
        return response()->json($response, 200);
    }

    public function put(Request $request, $id){
        $user = User::find($id);
        if(!$user){
            return response()->json(['message' => 'User not found'], 404);
        }
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->password = $request->input('password');
        $user->save();
        return response()->json(['user' => $user], 200);
    }

    public function delete($id){
        $user = User::find($id);
        $user->delete();
        return response()->json(['message' => 'User Deleted'], 200);
    }

    public function signup(Request $request){
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required'
        ]);
        $user = new User([
        'name' => $request->input('name'),
        'email' => $request->input('email'),
        'password' => bcrypt($request->input('password'))
        ]);
        $user->save();
        return response()->json([
            'message' => 'Registration success.'
        ], 201);
    }

    public function signin(Request $request){
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required'
        ]);
        $credientals = $request->only('email', 'password');
        try{
            if (!$token = JWTAuth::attempt($credientals)){
                return response()->json([
                    'error' => 'Invalid Credientals'
                ], 401);
            }
        } catch(JWTException $e){
            return response()->json([
                'error' => 'Could not creat token!'
            ], 500);
        }
        return response()->json([
            'token' => $token
        ], 200);
    }


    public function getUsers()
    {
        #input url
        $url = 'http://gaagrdzele.com/api/app/users';
        $users = file_get_contents($url);

        return view('welcome', ['users' => json_decode($users, true)]);
    }
}
