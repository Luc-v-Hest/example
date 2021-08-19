<?php

namespace App\Http\Controllers;
use GNAHotelSolutions\Weather\Weather;

class HomeController extends Controller
{
    public function index()
    {
        $weather = new Weather();
        $weatherNijmegen = json_decode($weather->inLanguage('nl')->get('nijmegen'));
        $table = $this->generateTable($weatherNijmegen->main);
        $grid = $this->generateGrid();


        return view(
            'welcome',
            ['weather' => $table],
            ['grid' => $grid]
        );
    }

    // This function expects a weather api data object main to generate and return an HTML table
    private function generateTable($apiDataObject) {
        $tableData = '';
        $tableNameRow = '';
        $tableDataRow = '';

        foreach ($apiDataObject as $key => $value) {
            $value = round($value);
            $textColor = "";

            if ((-50 <= $value) && ($value <= 50)) {
                switch ($value) {
                    case $value < 20:
                        $textColor = "text-blue-600";
                        break;
                    case $value < 22:
                        $textColor = "text-green-600";
                        break;
                    case $value >= 22:
                        $textColor = "text-yellow-600";
                        break;
                    default:
                        break;
                }
            }

            $tableNameRow .= '<td class="p-4 bg-gray-100 font-black uppercase">' . $key . '</td>';
            $tableDataRow .= '<td class="px-4 py-2 bg-white ' . $textColor . '">' . $value . '</td>';
        }

        $tableData .= "<tr>{$tableNameRow}</tr><br><tr>{$tableDataRow}</tr>";

        return $tableData;
    }

    private function generateGrid() {
        $grid = '';

        for ($i = 1; $i <= 16; $i++) {
            $grid .= '<div class="p-10 font-bold bg-yellow-500 text-center">' . $i . '</div>';
        }

        return $grid;
    }
}
