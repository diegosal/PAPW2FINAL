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
        'trainingId',
        'question',
    ];
    protected $guarded = ['id'];
    protected $casts = [
        'trainingId' => 'integer'
    ];

    public function training()
    {
        return $this->belongsTo(
            'App\Training',
            'trainingId'
        );
    }

    public function answer()
    {
        return $this->hasMany(
            'App\Answer',
            'questionId',
            'id'
        );
    }

}
