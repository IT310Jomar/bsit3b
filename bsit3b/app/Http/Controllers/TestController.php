<?php

namespace App\Http\Controllers;

use App\Models\Locations;
use Illuminate\Http\Request;

class TestController extends Controller
{
  //displaying for the front-end (web.php)
  public function displayPageLocation(){
     return view('locations');
  }

//displaying for the data in the data-table (api.php)
  public function displayDataLocationTable(){
    $locations = Locations::latest()->get();

    return response()->json(['success' => true, 'locations' => $locations],200);
  }



  public function addLocation()
  {
    request()->validate([
      'location' => 'required|string|max:100'
    ]);

    $loc = Locations::create([
     'name' => request('location'),
     'status' => 1,
    ]);
  
    return response()->json(["success" => true, 'location' => $loc],200);
  }

  public function updateLocation($id)
  {
    // $location = Locations::findOrFail($id);

    $location= Locations::updateOrCreate(
      [ 'id' => $id],
         [ 'name' => request('updatedLocation')]
    );

    return response(["message" => "Updated Successfully"],200);
  }

  //this function for deleting location data

  public function deleteFunction($id){
    $location = Locations::findOrFail($id);
    $location->delete();

    return response(["message" => "Deleted Successfully"],200);

  }
}
