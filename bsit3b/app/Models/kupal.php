<?php

namespace App\Models;

use App\Models\Departments;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class kupal extends Model
{
    use HasFactory;

protected $table = "kupals";
protected $fillable = ["name"];

public function kupalDepartment(){
    return $this->hasMany(Departments::class);
}
}
