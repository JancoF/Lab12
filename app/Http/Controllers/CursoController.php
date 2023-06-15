<?php 
namespace App\Http\Controller;
 use Illuminate\Http\Request;
 class CursoController extends Controller
 {
    public function index(){
        return view('cusos.index');
    }

    public function oraganizaciones(){
        return view('cusos.organizaciones');
    }

    public function inversion(){
        return view('cusos.invesion');
 }

