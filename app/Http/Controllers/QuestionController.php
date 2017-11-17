<?php

namespace App\Http\Controllers;

use App\Question;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class QuestionController extends Controller
{
    
	public function index($id)
    {
        return Question::where(
            'trainingId', $id
        )->with(
            'Answer:id,questionId,answer,isAnswer'
        )->get();
    }

    public function store(Request $request)
    {
    	$dataQuestion = $request->input('question');
        $dataAnswer = $request->input('answer');
        $questionNumber = 0;
        
        foreach ($dataQuestion as &$valorQuestion) {
            
            $question = new Question();
            $question->trainingId = $valorQuestion['trainingId'];
            $questionNumber = $valorQuestion['questionNumber'];
            $question->question = $valorQuestion['question'];
            $question->save();
            
            foreach ($dataAnswer as &$valorAnswer) {
                
                $answer = new Answer();
                $answer->questionId = $question->id;
                $answer->answer = $valorAnswer['answer'];
                $answer->isAnswer = $valorAnswer['isAnswer'];
                
                if($questionNumber == $answer->questionId)
                    $answer->save();

            }

            return response()->json([
            	'message' => 'Successful created'
        	]);	
        }
    }

    public function update (Question $question)
    {
        $this->validate(request(), [
            'question' => 'sometimes|required',
        ]);

        $question->fill(request()->all())->save();

        return response()->json([
            'message' => 'Successful edited'
        ]);
    }

    public function destroy(Question $question)
    {
        $question->delete();

        return response()->json([
            'message' => 'The user has been successfully deleted'
        ], Response::HTTP_ACCEPTED);
    }
}
