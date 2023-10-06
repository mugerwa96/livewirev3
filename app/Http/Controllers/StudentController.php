<?php

namespace App\Http\Controllers;

use App\Charts\StudentsChart;
use App\Charts\StudentsLineChart;
use App\Charts\StudentsPieChart;
use App\Models\Student;
use App\Http\Requests\StoreStudentRequest;
use App\Http\Requests\UpdateStudentRequest;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(StudentsChart $chart ,StudentsPieChart $PieChart,StudentsLineChart $LineChart)
    {
        return view('studentLaraPex',
        ['chart' => $chart->build(),
        'PieChart'=>$PieChart->build(),
        'LineChart' => $LineChart->build()
    ]);
    }

}
