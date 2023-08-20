<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    use HasFactory;
    protected $table='departments';
    protected $fillable=['name'];
    public function courses()
    {
        return $this->belongsToMany(Course::class);
    }
    public function students()
    {
        return $this->belongsToMany(Student::class);
    }
}
