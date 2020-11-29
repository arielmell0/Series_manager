<?php
namespace App\Http\Controllers;

class SeriesController extends Controller{

    public $series = [
        'Grey\'s Anatomy',
        'Lost',
        'Agents of SHIELD'
    ];

    public function listSeries(){

    $html = "<ul>";
    foreach ($this->series as $serie){
        $html .="<li>$serie</li>";
    }
    $html .= "</ul>";

    return $html;

}

}