<?php

namespace App\Http\Controllers;

use App\User;
use App\Filters\UserFilter;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Symfony\Component\HttpFoundation\Response;

class UsersController extends Controller
{
    public function index(UserFilter $filter)
    {
        return User::with(
            'TypeUser:id,type')
        ->get();
    }

    public function store()
    {
        $this->validate(request(), [
            'typeUserId' => 'required',
            'name' => 'required',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:4',
            'sex' => 'required',
            'birth' => 'required|date',
        ]);

        User::create(request()->all());

        return response()->json([
            'message' => 'Successful created'
        ]);
    }

    public function update(User $user)
    {
        $this->validate(request(), [
            'typeUserId' => 'sometimes|required',
            'name' => 'sometimes|required',
            'email' => ['sometimes', 'required', 'email', Rule::unique('users')->ignore($user->id)],
            'sex' => 'sometimes|required',
            'birth' => 'sometimes|required|date',
        ]);

        $user->fill(request()->all())->save();

        return response()->json([
            'message' => 'Successful edited'
        ]);
    }

    public function destroy(User $user)
    {
        $user->delete();

        return response()->json([
            'message' => 'The user has been successfully deleted'
        ], Response::HTTP_ACCEPTED);
    }
}
