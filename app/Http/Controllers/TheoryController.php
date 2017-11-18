<?php

namespace App\Http\Controllers;

use App\Theory;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class TheoryController extends Controller
{

    public function index(Request $request) 
    {
        $trainingId = $request->input('trainingId');
        return Theory::where('trainingId', $trainingId)->get();
    }

    public function store()
    {
        $this->validate(request(), [
        	'trainingId' => 'required',
            'url' => 'required',
            'description' => 'required'
        ]);

        Theory::create(request()->all());

        return response()->json([
            'message' => 'Successful created'
        ]);
    }

    public function update(Theory $theory)
    {
     	$this->validate(request(), [
            'trainingId' => 'required',
            'url' => 'required',
            'description' => 'required'
        ]);

        $theory->fill(request()->all())->save();

        return response()->json([
            'message' => 'Successful edited'
        ]);
    }

    public function destroy(Theory $theory)
    {
        $theory->delete();

        return response()->json([
            'message' => 'The user has been successfully deleted'
        ], Response::HTTP_ACCEPTED);
    }
}
