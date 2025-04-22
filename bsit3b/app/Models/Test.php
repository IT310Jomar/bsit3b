<?php

namespace App\Models;

use App\Models\Departments;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Test extends Model
{
    use HasFactory;

    protected $table="tests";
    protected $fillable = ["name"];

    public function testDepartment(){
        return $this->hasMany(Departments::class);
    }
}
