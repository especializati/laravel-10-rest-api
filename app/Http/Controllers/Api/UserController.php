<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreUpdateUserRequest;
use App\Http\Resources\UserResource;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $users = User::paginate();

        return UserResource::collection($users);
    }

    public function store(StoreUpdateUserRequest $request)
    {
        $data = $request->validated();
        $data['password'] = bcrypt($request->password);

        $user = User::create($data);

        return new UserResource($user);
    }

    public function show(string $id)
    {
        // $user = User::find($id);
        // $user = User::where('id', '=', $id)->first();
        // if (!$user) {
        //     return response()->json(['message' => 'user not found'], 404);
        // }
        $user = User::findOrFail($id);

        return new UserResource($user);
    }
}
