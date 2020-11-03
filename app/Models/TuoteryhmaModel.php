<?php

namespace App\Models;

use CodeIgniter\Model;

class TuoteryhmaModel extends Model{
    protected $table = 'tuoteryhma';
    protected $allowedFields = ['nimi'];
    //suojattu taulu

    //mihin tauluun operaatiot kohdistuu

    public function haeTuoteryhmat(){
        return $this->findAll(); //kantaluokan käsky, model luokan metodi
        //select * from tuoteryhma tekee saman
    }


}