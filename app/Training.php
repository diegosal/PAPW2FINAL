<?php

namespace App;

use App\Filters\Filterable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;

class Training extends Model
{
    use Notifiable, Filterable;
    protected $table = 'training';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name'
    ];
    protected $guarded = ['id'];

    public function userCourse()
    {
        return $this->hasMany(
            'App\UserCourse',
            'trainingId',
            'id'
        );
    }

    public function theory()
    {
        return $this->hasMany(
            'App\Theory',
            'trainingId',
            'id'
        );
    }

    public function question()
    {
        return $this->hasMany(
            'App\Question',
            'trainingId',
            'id'
        );
    }
}
