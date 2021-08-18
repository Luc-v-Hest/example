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


        return view(
            'welcome',
            ['weather' => $table]
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

            $tableNameRow .= "<td>{$key}</td>";
            $tableDataRow .= '<td class="' . $textColor . '">' . $value . '</td>';
        }

        $tableData .= "<tr>{$tableNameRow}</tr><br><tr>{$tableDataRow}</tr>";

        return $tableData;
    }
}
