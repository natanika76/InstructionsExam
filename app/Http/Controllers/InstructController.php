<?php

namespace App\Http\Controllers;
use App\Models\Instruct;
use Illuminate\Http\Request;

class InstructController extends Controller
{
    public function index()
    {
        $instructs = Instruct::all();
        //dd($insts);
        return view('instruct.index', compact('instructs'));
    }
    public function create()
    {
        return view('instruct.create');
    }
    public function store()
    {
        $data = request()->validate([
            'title'=>'',
            'content'=>'',
            'image'=>''
        ]); 
        Instruct::create($data);
        return redirect()->route('instruct.index');
    }

    public function show(Instruct $instruct)
    {
        return view('instruct.show', compact('instruct'));
    }
    public function edit(Instruct $instruct)
    {
        return view('instruct.edit', compact('instruct'));
    }
    public function update(Instruct $instruct)
    {
        $data = request()->validate([
            'title' => 'string',
            'content' => 'string',
            'image' => 'string'
        ]);
        $instruct->update($data);
        return redirect()->route('instruct.show', $instruct->id);
    }

    public function destroy(Instruct $instruct) 
    {
        $instruct->delete();
        return redirect()->route('instruct.index');
    }


}
