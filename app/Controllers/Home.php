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
        $path = ROOTPATH.'public_html/arquivo.php';
        $arquivo = new \CodeIgniter\Files\File($path);
        $data['lastalt'] = $arquivo->getMTime();
        $data['realpath'] = $arquivo->getRealPath();
        $data['perms'] = $arquivo->getPerms();
        $data['basename'] = $arquivo->getBasename();
        $data['tamanho'] = $arquivo->getSize();
        $data['mapa'] = directory_map('../public_html/', 1, FALSE);
        $data['mapa2'] = directory_map('../public_html/', 2, FALSE);
        $data['mapa3'] = directory_map('../public_html/', 1, TRUE);
        $data['files'] = $this->request->getFiles();
        echo View('download', $data);

        if ($file=='Action'){
            return $this->response->download(ROOTPATH.'public_html/arquivo.php', null);
        }


        



        // echo '<pre>';
        // print_r($map);
        // echo '</pre>';


    }


    public function session(){

        $myTime = new Time('now', 'America/Sao_Paulo', 'en_US');
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
        $time = Time::parse('March 9, 2016 12:00:00', 'America/Chicago');

        $data = [
            'agora' => new Time('now', 'America/Sao_Paulo', 'en_US'),
            'chicago' => new Time('now', 'America/Chicago', 'en_US'),
            'parse' => Time::parse('next Tuesday', 'America/Chicago', 'en_US'),
            'parse2' => Time::parse('March 9, 2016 12:00:00', 'America/Chicago'),
            'hoje' => $time->humanize(),

        ];
        echo View('time', $data);
    }

    public function image(){
        $image = \Config\Services::image()
        ->withFile('../public_html/image.jpg')
        ->save('../public_html/image2.jpg');

        $image = \Config\Services::image()
        ->withFile('../public_html/image.jpg')
        ->reorient()
        ->rotate(90)
        ->save('../public_html/image3.jpg');

        $image = \Config\Services::image()
        ->withFile('../public_html/image.jpg')
        ->fit(100, 200, 'center')
        ->save('../public_html/image4.jpg');

        $image = \Config\Services::image('imagick')
        ->withFile('../public_html/image.jpg')
        ->flip('horizontal')
        ->save('../public_html/image5.jpg');

        $image = \Config\Services::image('imagick')
        ->withFile('../public_html/image.jpg')
        ->text('COPYRIGHT DO CODEIGNITER', [
            'color'      => '#fff',
            'opacity'    => 1,
            'withShadow' => true,
            'hAlign'     => 'center',
            'vAlign'     => 'bottom',
            'fontSize'   => 20
        ])
        ->text('COPYRIGHT DO CODEIGNITER', [
            'color'      => '#fff',
            'opacity'    => 1,
            'withShadow' => true,
            'hAlign'     => 'center',
            'vAlign'     => 'top',
            'fontSize'   => 20
        ])
        ->save('../public_html/image6.jpg');

        echo View('image');
    }


}




