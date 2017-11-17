<?php

namespace App\Http\Controllers;

use App\Training;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class TrainingController extends Controller
{
    public function index()
    {
        return Training::with(
            'Theory:id,trainingId,url,description'
        )->get();
    }

    public function store (Request $request)
    {
    	$this->validate(request(), [
            'name' => 'required',
        ]);

        Training::create(request()->all());

        return response()->json([
            'message' => 'Successful created'
        ]);	
    }

    public function update (Training $training)
    {
        $this->validate(request(), [
            'type' => 'sometimes|required',
        ]);

        $training->fill(request()->all())->save();

        return response()->json([
            'message' => 'Successful edited'
        ]);
    }

    public function destroy(Training $training)
    {
        $training->delete();

        return response()->json([
            'message' => 'The user has been successfully deleted'
        ], Response::HTTP_ACCEPTED);
    }
}
