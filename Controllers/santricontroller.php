<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class santricontroller extends Controller

{
    
    public function datasantri(){
    $mhs1 = 'Rizky'; $asal1 = 'Riau';
    $mhs2 = 'Dimas'; $asal2 = 'Tmebilahan';
    $mhs3 = 'IKhwan'; $asal3 = 'Mojokerto';
    $mhs4 = 'didim'; $asal4 = 'Bogor';
    $mhs5 = 'Zaky'; $asal5 = 'Aceh';
    return view('data_santri', 
   compact('mhs1','mhs2','mhs3','mhs4','mhs5','asal1','asal2','asal3','asal4','asal5')
    );
    }
    }
    
   ?>
