<?php

namespace App\Http\Controllers;

use App\Models\Rw;
use Illuminate\Http\Request;

class RwController extends Controller
{

    protected $modul_name = 'Rukun Warga';
    public function index()
    {
        $data = ['page_name' => 'Data ' . $this->modul_name , 'data' => Rw::all()];
        return view('admin.Rw.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = ['page_name' => 'Tambah ' . $this->modul_name];
        return view('admin.Rw.add', $data);
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
            'rw_name'=> 'required',
            'rw_desc'=> 'required'
        ]);
        $data = array();
        $data = $request->all();
        $data += ['kec_id' => 1,'kab_id' => 1];

        // dd($data);
        $action = Rw::create($data);
        if($action){
            return redirect()->route('rw.index');
        }else{
            return redirect()->back();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\rw  $rw
     * @return \Illuminate\Http\Response
     */
    public function show(rw $rw)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\rw  $rw
     * @return \Illuminate\Http\Response
     */
    public function edit(rw $rw)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\rw  $rw
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, rw $rw)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\rw  $rw
     * @return \Illuminate\Http\Response
     */
    public function destroy(rw $rw)
    {
        //
    }
}
