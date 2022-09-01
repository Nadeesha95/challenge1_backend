<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Challage4 extends Controller
{
    
    public function array(){

        $givenArray = ['Insurance.txt'=>'Company A','Letter.docx' => 'Company A','Contract.docx' => 'Company B'];
    
      $desired_array =  collect($givenArray)
        ->mapToGroups(fn ($value, $key) => [$value => $key])
        ->toArray();
    
        dd($desired_array);
    
    
    }



}
