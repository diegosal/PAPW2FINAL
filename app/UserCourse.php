<?php

namespace App;

use App\Filters\Filterable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;

class UserCourse extends Model
{
    use Notifiable, Filterable;
    protected $table = 'userCourse';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'UserId',
        'trainingId',
        'correctAnswers',
        'wrongAnswers',
    ];
    protected $guarded = ['id'];
    protected $casts = [
        'UserId' => 'integer',
        'trainingId' => 'integer',
        'correctAnswers' => 'integer',
        'wrongAnswers' => 'integer'
    ];

    public function training()
    {
        return $this->belongsTo(
            'App\Training',
            'trainingId'
        );
    }

    public function user()
    {
        return $this->belongsTo(
            'App\User',
            'UserId'
        );
    }

}
