<?php

namespace App\Charts;

use ArielMejiaDev\LarapexCharts\LarapexChart;

class DataMingguanChart
{
    protected $chart;

    public function __construct(LarapexChart $chart)
    {
        $this->chart = $chart;
    }

    public function build(): \ArielMejiaDev\LarapexCharts\BarChart
    {
        return $this->chart->barChart()
            ->setTitle('Data Penjualan Mingguan')
            ->setSubtitle('Total Produk yang Terjual')
            ->addData('Jumlah', [100, 200, 300, 400, 500, 600, 700])
            ->setHeight(400)
            ->setXAxis(['Senin', 'Selasa', 'Rabu', 'Kamis', 'Jumat', 'Sabtu', 'Minggu']);
    }
}
