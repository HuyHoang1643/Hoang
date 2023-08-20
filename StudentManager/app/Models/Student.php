<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
    protected $table='students';
    protected $fillable=['name','image','email','phonenumber','department_id'];
    public function department(){
        return  $this->belongsTo(Department::class);
    }
}
