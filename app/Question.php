<?php

namespace App;

use App\Filters\Filterable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    use Notifiable, Filterable;
    protected $table = 'question';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'surveyId',
        'question',
    ];
    protected $guarded = ['id'];
    protected $casts = [
        'surveyId' => 'integer'
    ];

}
