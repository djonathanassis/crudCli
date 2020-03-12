<?php


namespace Source\Controllers;


use Source\Core\Controller;

class NotFoundController extends Controller
{

    public function index()
    {
        echo "<h1>Erro na pagina</h1>";
    }

}