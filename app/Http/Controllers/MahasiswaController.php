<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB; //Menggunakan Fitur DB(Insert, Select, Update, Delete)
use App\Student;

class MahasiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Biasanya kita bisa menggunakan mahasiswa/index
        // Kali ini kita mencoba memakai mahasiswa.index
        $mahasiswa = DB::table('students')->get(); //<- Using Query Builder
        return view('mahasiswa.index', ['mahasiswa' => $mahasiswa]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function formsederhana(){
        // return view::make('mahasiswa.create');
        return 'Hehehe';
    }

    public function postformsederhana(){
        $nama = Input::get('nama');
        $jeniskelamin = Input::get('jeniskelamin');
        $alamat = Input::get('alamat');

        return 'Nama :' .$nama. '<br/> Jenis Kelamin :' .$jeniskelamin. '<br/> Alamat' .$alamat;
        
    }
}
