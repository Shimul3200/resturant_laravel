<?php

namespace App\Http\Controllers;

use App\Charts\Charts\MyChart;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
       /* $educations = Education::orderBy('id','asc')->get();
        $experiences = Experience::orderBy('id','desc')->get();*/

        $chart = new MyChart();

          $chart->minimalist(false);
        $chart->dataset('My dataset', 'pie', [80, 30, 20,10 ])
         ->color(['red','blue','green','yellow'])
        ->backgroundcolor(['red','blue','green','yellow']);;
        $chart->labels(['Delivered', 'Return', 'Cancel', 'Hold']);
        return view('admin.master',\compact('chart'));
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
