<?php

namespace App\Http\Controllers;

use App\Models\Rt;
use App\Models\Rw;
use Illuminate\Http\Request;

class RtController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    protected $modul_name = 'Rukun Tetangga';
    public function index()
    {
        $data = ['page_name' => 'Data ' . $this->modul_name , 'data' => Rt::all()];
        return view('admin.Rt.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = ['page_name' => 'Tambah ' . $this->modul_name, 'Rw' => Rw::all()];
        return view('admin.Rt.add', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'rw_id'=>'required',
            'rt_name'=>'required',
            'rt_desc'=>'required'
        ]);

        $action = Rt::create($request->all());

        if ($action){
            return redirect()->route('rt.index');
        }else{
            return redirect()->back();
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\rt  $rt
     * @return \Illuminate\Http\Response
     */
    public function show(rt $rt)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\rt  $rt
     * @return \Illuminate\Http\Response
     */
    public function edit(rt $rt)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\rt  $rt
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, rt $rt)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\rt  $rt
     * @return \Illuminate\Http\Response
     */
    public function destroy(rt $rt)
    {
        //
    }
}
