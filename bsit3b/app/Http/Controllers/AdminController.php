<?php

namespace App\Http\Controllers;

use App\Models\Employments;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{


    public function displayEmployeeDashboard()
    {
        return view('employee');
    }

    public function displayData(){
        $employments = Employments::with(["user" => function ($q) {
            $q->select('*');
        }])->with(["department" => function ($q) {
            $q->select("*")->with(["tests" => function ($q) {
                $q->select('*');
            }])->with(["kupal" => function ($q) {
                $q->select("*");
            }]);
        }])->get();

        return response()->json(["success" => true, "data"  => $employments], 200);
    }
}
