<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{


    protected $data = [

        [
            'name' => 'marco',
            'cognome' => 'caputo'
        ],


        [
            'name' => 'laura',
            'cognome' => 'macchitella'
        ],

        [
            'name' => 'ponny',
            'cognome' => 'macchitella'
        ],

    ];


    public function about()
    {

        return view('about');
    }

    public function blog()
    {

        return view('blog');
    }

    public function staff()
    {

        return view('staff')
            ->with('staff', $this->data);



            ;
    }


}
