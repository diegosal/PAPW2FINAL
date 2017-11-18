<?php

namespace App;

use App\Filters\Filterable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;

class Answer extends Model
{
    use Notifiable, Filterable;
    protected $table = 'answer';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'questionId',
        'answer',
        'isAnswer',
    ];
    protected $guarded = ['id'];
    protected $casts = [
        'questionId' => 'integer',
        'isAnswer' => 'boolean'
    ];

    public function question()
    {
        return $this->belongsTo(
            'App\Question',
            'questionId'
        );
    }

    public function DataToAnswerArray($data)
    {
    }
}
