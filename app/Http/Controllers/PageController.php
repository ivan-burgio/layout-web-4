<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        $inicio = true;
        $data = [
            'header' => [
                'title' => 'Nombre del Blog',
                'description' => [
                    'line1' => 'Frase de ejemplo 1',
                    'line2' => 'Frase de ejemplo 2',
                ],
                'background_image' => 'img/banner.webp',
            ],
            'extra' => [
                'linea1' => '',
                'linea2' => ''
            ],
            'globos' => [
                ['info' => 'Toda la información que hay en la pagina es de ejemplo.'],
                ['info' => 'Todos los componentes pueden ser ajustados según preferencia del cliente.'],
                ['info' => 'La cantidad y disposición de los elementos es completamente configurable.'],
                ['info' => 'Imagenes, textos y colores quedan a criterio del cliente.'],
                ['info' => 'La cantidad de paginas o links tambien queda al gusto y necesidades.'],
            ],
        ];

        return view('pages.index', ['data' => $data, 'inicio' => $inicio]);
    }
}