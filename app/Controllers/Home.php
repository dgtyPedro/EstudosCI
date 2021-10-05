<?php

namespace App\Controllers;
use CodeIgniter\I18n\Time;

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


    public function session(){

        $myTime = new Time('now');
        $secao = \Config\Services::session();
        $today       = Time::createFromDate();
        $agent = $this->request->getUserAgent();
        $dados = [
            'id'  => session_id(),
            'ip'     => $_SERVER['SERVER_PORT'],
            'agent' => $_SERVER['HTTP_USER_AGENT'],
            'horario' => $myTime,
            'agent2' => $agent->getBrowser().' '.$agent->getVersion(),
        ];
        $secao->set($dados);
        
        echo View('session', $dados);
       
    }


    public function time(){
        echo View('time');
    }

    public function image(){
        echo View('image');
    }


}




