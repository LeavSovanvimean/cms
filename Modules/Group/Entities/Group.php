<?php

namespace Modules\Group\Entities;
use Backpack\CRUD\app\Models\Traits\CrudTrait;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use App\Models\Student;
use App\Models\Teacher;
class Group extends Model
{
    use CrudTrait;

    /*
    |--------------------------------------------------------------------------
    | GLOBAL VARIABLES
    |--------------------------------------------------------------------------
    */

    protected $table = 'groups';
    // protected $primaryKey = 'id';
    // public $timestamps = false;
    protected $guarded = ['id'];
    protected $fillable = ['id','group_name','year','semester'];
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

    public function getStudents()
    {
        return $this->hasMany(Student::Class);
    }

    public function studentsCount()
    {
        return $this->getStudents()->count();
    }

    public function activeCount()
    {
        return $this->getStudents()->where('status','Open')->count();
    }

    public function classroom()
    {
        return $this->belongsTo('App\Models\Classroom','group_id','id');
    }

    public function teacher()
    {
        return $this->belongsToMany(Teacher::Class);
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
