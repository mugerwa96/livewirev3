<?php

namespace App\Charts;

use App\Models\Student;
use ArielMejiaDev\LarapexCharts\LarapexChart;

class StudentsPieChart
{
    protected $chart;

    public function __construct(LarapexChart $chart)
    {
        $this->chart = $chart;
    }

    public function build(): \ArielMejiaDev\LarapexCharts\PieChart
    {
        return $this->chart->pieChart()
            ->setTitle('Top 3 scorers of the team.')
            ->setSubtitle('Season 2021.')
            ->setColors(['#FFC107', '#D32F2F'])
            ->addData([Student::where('has_passed', 'passed')->count(),Student::where('has_passed', 'failed')->count()])
            ->setLabels(['Passed', 'Failed']);
    }
}
