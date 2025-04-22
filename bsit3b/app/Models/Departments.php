<?php

namespace App\Models;

use App\Models\Test;
use App\Models\kupal;
use App\Models\Employments;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Departments extends Model
{
    use HasFactory;

    protected $table = "departments";
    protected $fillable = ["name","test_id","kupal_id"];

    public function employeeDepartment(){
        return $this->hasMany(Employments::class);
    }

    public function tests(){
        return $this->belongsTo(Test::class,"test_id");
    }
    public function kupal(){
        return $this->belongsTo(kupal::class, "kupal_id");
    }
}
