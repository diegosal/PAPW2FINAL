<?php

namespace App;

use App\Filters\Filterable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;

class Theory extends Model
{
    use Notifiable, Filterable;
    protected $table = 'theory';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'trainingId',
        'url',
        'description'
    ];
    protected $guarded = ['id'];
    protected $casts = [
        'trainingId' => 'integer'
    ];

}
