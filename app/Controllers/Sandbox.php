<?php

namespace App\Controllers;

class Sandbox extends BaseController
{
    public function index()
    {
        echo View('homepage');
    }

    public function easteregg()
    {
        echo '<img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRu8ReRSIf8WwCooceKyIAntZ2DZz2t_znHNw&usqp=CAU" alt="Easteregg">';
    }

    public function dados($param)
    {
        $data['parametro']=$param;
        echo View('testview', $data);
    }



}
