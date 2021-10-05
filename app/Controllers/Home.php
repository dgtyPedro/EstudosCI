<?php

namespace App\Controllers;


class Home extends BaseController
{
    
    public function index()
    {
        echo View('homepage');
    }

    public function download($file = null){
        helper('filesystem');
        $path = ROOTPATH.'writable\uploads\ola.php';
        $arquivo = new \CodeIgniter\Files\File($path);
        $data['lastalt'] = $arquivo->getMTime();
        $data['realpath'] = $arquivo->getRealPath();
        $data['perms'] = $arquivo->getPerms();
        $data['basename'] = $arquivo->getBasename();
        $data['tamanho'] = $arquivo->getSize();
        $data['mapa'] = directory_map('../public/', 1, FALSE);
        $data['mapa2'] = directory_map('../public/', 2, FALSE);
        $data['mapa3'] = directory_map('../', 1, TRUE);
        $data['files'] = $this->request->getFiles();
        echo View('download', $data);

        if ($file=='Action'){
            return $this->response->download(ROOTPATH.'/writable/uploads/ola.php', null);
        }


        



        // echo '<pre>';
        // print_r($map);
        // echo '</pre>';


    }


    public function cookie(){
        echo View('cookie');
    }


    public function time(){
        echo View('time');
    }

    public function image(){
        echo View('image');
    }


}




