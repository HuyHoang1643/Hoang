<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;
    protected $table='courses';
    protected $fillable=['name','department_id'];
    public function department(){
        return  $this->belongsTo(Department::class);
    }
    public function students()
    {
        return $this->belongsToMany(Student::class);
    }
    public function tearchers()
    {
        return $this->belongsToMany(Student::class);
    }
}
