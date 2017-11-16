<?php

namespace App;

use App\Filters\Filterable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Model;

class TypeUser extends Model
{
    use Notifiable, Filterable;
    protected $table = 'typeUser';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['type'];
    protected $guarded = ['id'];
}
