<?php

namespace App\Http\Controllers;

use App\Models\People;
use App\Models\Province;
use Illuminate\Http\Request;

class PeopleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $peos = People::orderBy('id', 'DESC')->paginate(2);
        return view('people.index', compact('peos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tinh = Province::all();
        return view('people.create', compact('tinh'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $file_name = $request->avartar->getClientOriginalName();
        $request->avartar->move(public_path('./uploads'), $file_name);

        People::create([
            'name' => $request->name,
            'province_id' => $request->province_id,
            'avartar' => $file_name,
            'birthday' => $request->birthday,
            'gender' => $request->gender,
        ]);
        return redirect(route('people.index'));
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
        $tinh = Province::all();
        $peo = People::find($id);
        return view('people.edit', compact('peo', 'tinh'));
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
        $peo = People::find($id);

        if($request->has('avartar')){
            $file_name = $request->avartar->getClientOriginalName();
            $request->avartar->move(public_path('./uploads'), $file_name);
        }else{
            $file_name = $peo->avartar;
        }

        People::find($id)->update([
            'name' => $request->name,
            'province_id' => $request->province_id,
            'avartar' => $file_name,
            'birthday' => $request->birthday,
            'gender' => $request->gender,
        ]);
        return redirect(route('people.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try {
            People::find($id)->delete();
            return redirect(route('people.index'));
        } catch (\Throwable $th) {
            throw $th;
        }
    }
}
