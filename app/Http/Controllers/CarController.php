<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use App\Models\Car;
use App\Http\Resources\{
    CarResource,
    AdminCarResource
};
use Illuminate\Support\Facades\Auth;


class CarController extends Controller
{
    public function index(){

        $cars = Car::with(['user','carImages' => function($query){
                $query->take(2);
            }])->paginate(12);


        return CarResource::collection($cars)->response()->setStatusCode(Response::HTTP_OK);
    }



    public function authIndex(){

        $cars = Car::with(['user','carImages'])->paginate(6);

      return AdminCarResource::collection($cars)->response()->setStatusCode(Response::HTTP_OK);
    }


    public function adminCars(){
      

        $cars =  Auth::user()->cars();;

      return AdminCarResource::collection($cars)->response()->setStatusCode(Response::HTTP_OK);
    }


    public function singleCar(Car $car){


        return new CarResource($car);
    }


    public function adminSingleCar(Car $car){


        return new AdminCarResource($car);
    }


}
