<?php

namespace App\Http\Controllers;

use App\Answer;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class AnswerController extends Controller
{
    public function update (Answer $answer)
    {
        $this->validate(request(), [
            'answer' => 'sometimes|required',
        ]);

        $answer->fill(request()->all())->save();

        return response()->json([
            'message' => 'Successful edited'
        ]);
    }

    public function destroy(Answer $answer)
    {
        $answer->delete();

        return response()->json([
            'message' => 'The Answer has been successfully deleted'
        ], Response::HTTP_ACCEPTED);
    }
}
