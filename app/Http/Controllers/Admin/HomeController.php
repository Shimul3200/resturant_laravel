<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
 
    
        public function index()
        {
        //    $educations = Education::orderBy('id','asc')->get();
          //  $experiences = Experience::orderBy('id','desc')->get();
         //   $chart = new MyChart();
    
    
            //  $chart->minimalist(true );
       //     $chart->dataset('My dataset', 'pie', [80, 30, 20,10 ]);
               // ->color($borderColors)
                //->backgroundcolor($fillColors);;
         //   $chart->labels(['Delivered', 'Return', 'Cancel', 'Hold']);
            return view('admin.master');
        }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
