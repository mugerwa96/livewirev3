<?php

namespace App\Charts;

use App\Models\Student;
use ArielMejiaDev\LarapexCharts\LarapexChart;

class StudentsChart
{
    protected $chart;

    public function __construct(LarapexChart $chart)
    {
        $this->chart = $chart;
    }

    public function build(): \ArielMejiaDev\LarapexCharts\BarChart
    {
        return $this->chart->barChart()
        ->setTitle('Student Performance')
        ->setColors(['#FFC107', '#D32F2F'])
        ->addData('Passed', [Student::where('has_passed','passed')->count()])
        ->addData('Failed', [Student::where('has_passed','failed')->count()])
        ->setXAxis(['Passed','Failed']);
    }
}
