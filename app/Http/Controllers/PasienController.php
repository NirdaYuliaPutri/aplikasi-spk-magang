<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pasien;

class PasienController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.pasien.index',[
            'pasiens' => Pasien::latest()->filter(request(['search']))->paginate(10)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.pasien.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
    $validate = $request->validate([
        'nama' => 'required',
        'lokasi' => 'required'
    ]);
    
    $validate['user_id'] = auth()->user()->id;

    Pasien::create($validate);
    return redirect('/pasien')->with('success','Added Successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Pasien $pasien)
    {
       
        return view('dashboard.pasien.show',[
            'pasiens' => Pasien::find($pasien)
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Pasien $pasien)
    {
        return view('dashboard.pasien.edit',[
            'pasiens' => Pasien::with('user')->find($pasien)
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pasien $pasien)
    {
        $rules = [
            'nama' => 'required',
            'lokasi' => 'required'
        ];

        $validate['user_id'] = auth()->user()->id;
        $validate = $request->validate($rules);

        Pasien::where('id', $pasien->id)->update($validate);
        return redirect('/pasien')->with('success','Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pasien $pasien)
    {
        Pasien::destroy($pasien->id);
        return redirect('/pasien')->with('success','Deleted Successfully');
    }
}
