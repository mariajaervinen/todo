<?php namespace App\Controllers;

use App\Models\TuoteryhmaModel;

class Admin extends BaseController //kantaluokka, valmista koodia
//periytytetään
{
	public function index(){
        $tuoteryhmaModel = new TuoteryhmaModel();
        $data['tuoteryhmat'] = $tuoteryhmaModel->haeTuoteryhmat();
        //taulukko data niminen, jossa avain otsikko jonka arvo tuoteryhmät
        $data['otsikko'] = 'Tuoteryhmät';
        echo view('admin/tuoteryhma.php',$data);
        //data taulukkoo  voi kerätä vaikka kuinka paljon tietoja
    }

    public function tallenna(){
        $tuoteryhmaModel = new TuoteryhmaModel();
        if(!$this->validate([
            'nimi' => 'required|max_length[50]'
        ])){
            echo view('admin/tuoteryhma_lomake.php');
        }else{
            $talleta['nimi'] = $this->request->getPost('nimi');//jos on post-lomake niin tulee getPost
            $tuoteryhmaModel->save($talleta);
            return redirect('admin/index'); //->pitää määritellä reitti routes.php tiedostoon
        }
    }

}