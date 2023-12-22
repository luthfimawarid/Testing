<?php

namespace App\Http\Controllers;

use App\Charts\DataMingguanChart;
use Illuminate\Http\Request;

class DataMingguanController extends Controller
{
    public function index(DataMingguanChart $chart)
    {
        // $data['chart'] = $chart->build();
        return view('admin.isi.mingguan', ['chart' => $chart->build()]);
    }
}
