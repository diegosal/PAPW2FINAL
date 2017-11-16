<?php

namespace App\Http\Controllers;

use App\TypeUser;
use App\Filters\TypeUserFilter;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class TypeUserController extends Controller
{
    public function index()
    {
        return TypeUser::All()->toJson();
    }

    public function store (Request $request)
    {
    	$this->validate(request(), [
            'type' => 'required',
        ]);

        TypeUser::create(request()->all());

        return response()->json([
            'message' => 'Successful created'
        ]);	
    }

    public function update (TypeUser $typeUser)
    {
        $this->validate(request(), [
            'type' => 'required',
        ]);

        $typeUser->fill(request()->all())->save();

        return response()->json([
            'message' => 'Successful edited'
        ]);
    }

    public function destroy(TypeUser $typeUser)
    {
        $typeUser->delete();

        return response()->json([
            'message' => 'The user has been successfully deleted'
        ], Response::HTTP_ACCEPTED);
    }
}
