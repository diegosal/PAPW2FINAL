<?php

namespace App\Http\Controllers;

use App\UserCourse;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class UserCourseController extends Controller
{
    public function index(Request $request)
    {
        $userId = $request->input('userId');
        return UserCourse::where('userId', $userId)
        ->with(
            'Training:id,name',
            'User:id,name')
        ->get();
    }

    public function store (Request $request)
    {
    	$this->validate(request(), [
            'UserId' => 'required',
            'trainingId' => 'required',
            'correctAnswers' => 'required',
            'wrongAnswers' => 'required',
        ]);

        UserCourse::create(request()->all());

        return response()->json([
            'message' => 'Successful created'
        ]);	
    }

    public function update (UserCourse $userCourse)
    {
        $this->validate(request(), [
            'UserId' => 'sometimes|required',
            'trainingId' => 'sometimes|required',
            'correctAnswers' => 'required',
            'wrongAnswers' => 'required',
        ]);

        $userCourse->fill(request()->all())->save();

        return response()->json([
            'message' => 'Successful edited'
        ]);
    }

    public function destroy(UserCourse $userCourse)
    {
        $userCourse->delete();

        return response()->json([
            'message' => 'The user has been successfully deleted'
        ], Response::HTTP_ACCEPTED);
    }
}
