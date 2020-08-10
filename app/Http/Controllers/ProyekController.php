<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProyekController extends Controller
{
    //
    public function index(){ 
    	return view('home');
    }

    public function list_proyek(){
    	return view('list');
    }

    public function form(){
    	return view('form');
    }

    public function store(Request $request){
    	
    }

    public function daftarkan_staff(){
    	return view('form_staft');
    }

    public function store_staft(Request $request){
    	
    }

    public function edit(){ 
    	return view('edit');
    }

    public function update(Request $request, $id){
    	
    }

    public function destroy($id){
    	
    }
    
}
