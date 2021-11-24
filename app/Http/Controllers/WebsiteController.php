<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WebsiteController extends Controller
{

    public function index()
    {
        return view('index');
    }

    public function ourdivision()
    {
        return view('ourdivision');
    }

    public function orgchart()
    {
        return view('orgchart');
    }

    public function programs()
    {
        return view('programs');
    }

    public function citizencharter()
    {
        return view('citizencharter');
    }

    public function sdsoffice()
    {
        return view('sdsoffice');
    }
    
    public function asdsoffice()
    {
        return view('asdsoffice');
    }

    public function legal()
    {
        return view('legal');
    }  
    
    public function ict()
    {
        return view('ict');
    } 

    public function adminoffice()
    {
        return view('adminoffice');
    } 

    public function cashier()
    {
        return view('cashier');
    }

    public function personnel()
    {
        return view('personnel');
    }

    public function records()
    {
        return view('records');
    }

    public function supply()
    {
        return view('supply');
    }
    
    public function genservices()
    {
        return view('genservices');
    }

    public function accounting()
    {
        return view('accounting');
    }

    public function budget()
    {
        return view('budget');
    }

    public function moneval()
    {
        return view('moneval');
    }

    public function sgodchief()
    {
        return view('sgodchief');
    }
    
    public function socmob()
    {
        return view('socmob');
    }

    public function planres()
    {
        return view('planres');
    }

    public function educfac()
    {
        return view('educfac');
    }

    public function health()
    {
        return view('health');
    }

    public function cidoffice()
    {
        return view('cidoffice');
    }

    public function lrms()
    {
        return view('lrms');
    }

    public function eps()
    {
        return view('eps');
    }

    public function psds()
    {
        return view('psds');
    }

    public function elementary()
    {
        return view('elementary');
    }

    public function secondary()
    {
        return view('secondary');
    }

    public function integrated()
    {
        return view('integrated');
    }

    public function private()
    {
        return view('private');
    }

    public function calendar()
    {
        return view('calendar');
    }

    public function forms()
    {
        return view('forms');
    }    

    public function advisory()
    {
        return view('advisory');
    }

    public function numbered()
    {
        return view('numbered');
    }

    public function unnumbered()
    {
        return view('unnumbered');
    }

    public function multimedia()
    {
        return view('multimedia');
    }

    public function resourcematerials()
    {
        return view('resourcematerials');
    }

    public function rpms()
    {
        return view('rpms');
    }

    public function bidding()
    {
        return view('bidding');
    }

    public function app()
    {
        return view('app');
    }

    public function earlyproc()
    {
        return view('earlyproc');
    }
    
    public function procmonitoring()
    {
        return view('procmonitoring');
    }
    
    public function contact()
    {
        return view('contact');
    }
}
