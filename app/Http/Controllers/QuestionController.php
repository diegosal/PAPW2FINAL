<?php

namespace App\Http\Controllers;

use App\Question;
use App\Answer;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class QuestionController extends Controller
{
    
	public function index(Request $request)
    {
        $trainingId = $request->input('trainingId');
        return Question::where(
            'trainingId', $trainingId
        )->with(
            'Answer:id,questionId,answer,isAnswer'
        )->get();
    }

    public function store(Request $request)
    {

        $dataAnswer = $request->input('answer');
        
            
        $question = new Question();
        $question->trainingId = $request
                                ->input('trainingId');
        $question->question =   $request
                                ->input('question');
        $question->save();
        
        foreach ($dataAnswer as &$valorAnswer) {
            
            $answer = new Answer();
            $answer->questionId = $question->id;
            $answer->answer = $valorAnswer['answer'];
            $answer->isAnswer = $valorAnswer['isAnswer'];
            $answer->save();

        }

        return response()->json([
        	'message' => 'Successful created'
    	]);	
    }

    public function update (Request $request)
    {
        
        $dataAnswer = $request->input('answer');
        $questionId = $request->input('id');
        
        $question = Question::find($questionId);

        $question->trainingId = $request
                                ->input('trainingId');
        $question->question =   $request
                                ->input('question');
        $question->save();
        
        foreach ($dataAnswer as &$valorAnswer) {
            
            $answer = Answer::find($valorAnswer['id']);
            $answer->answer = $valorAnswer['answer'];
            $answer->isAnswer = $valorAnswer['isAnswer'];
            $answer->save();

        }
    }

    public function destroy(Question $question)
    {
        $question->delete();

        return response()->json([
            'message' => 'The user has been successfully deleted'
        ], Response::HTTP_ACCEPTED);
    }
}
