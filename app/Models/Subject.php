<?php

namespace App\Models;

use Backpack\CRUD\app\Models\Traits\CrudTrait;
use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    use CrudTrait;

    /*
    |--------------------------------------------------------------------------
    | GLOBAL VARIABLES
    |--------------------------------------------------------------------------
    */

    protected $table = 'subjects';
    // protected $primaryKey = 'id';
    // public $timestamps = false;
    protected $guarded = ['id'];
    // protected $fillable = [];
    // protected $hidden = [];
    // protected $dates = [];

    /*
    |--------------------------------------------------------------------------
    | FUNCTIONS
    |--------------------------------------------------------------------------
    */

    /*
    |--------------------------------------------------------------------------
    | RELATIONS
    |--------------------------------------------------------------------------
    */

    public function schedule()
    {
        return $this->belongsTo('App\Models\Classroom', 'subject_id');
    }

    public function students()
    {
        return $this->belongsToMany('App\Models\Student');
    }

    public function createdBy(){
        return $this->belongsTo(User::class , 'created_by' , 'id');
    }

    public function updatedBy(){
        return $this->belongsTo(User::class , 'updated_by' , 'id');
    }

    public function teacher()
    {
        return $this->belongsToMany('App\Models\Teacher');
    }

    public function teacherCount()
    {
        return $this->teacher()->count();
    }

    /*
    |--------------------------------------------------------------------------
    | SCOPES
    |--------------------------------------------------------------------------
    */

    /*
    |--------------------------------------------------------------------------
    | ACCESSORS
    |--------------------------------------------------------------------------
    */

    /*
    |--------------------------------------------------------------------------
    | MUTATORS
    |--------------------------------------------------------------------------
    */
}
