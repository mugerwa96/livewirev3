<?php

namespace App\Charts;

use App\Models\Student;
use ArielMejiaDev\LarapexCharts\LarapexChart;

class StudentsLineChart
{
    protected $chart;

    public function __construct(LarapexChart $chart)
    {
        $this->chart = $chart;
    }

    public function build(): \ArielMejiaDev\LarapexCharts\LineChart
    {
        return $this->chart->lineChart()
            ->setTitle('Sales during 2021.')
            ->setSubtitle('Physical sales vs Digital sales.')
            ->addData('Passed',[Student::where('has_passed', 'passed')->count()])
            ->addData('Failed',[Student::where('has_passed','failed')->count()])
            ->setColors(['#ffc63b', '#ff6384']);
            // ->setXAxis(['January', 'February', 'March', 'April', 'May', 'June']);
    }
}
