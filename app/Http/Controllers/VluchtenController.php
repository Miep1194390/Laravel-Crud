<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vluchten;

class VluchtenController extends Controller
{
    public function index()
    {
        $vluchten = Vluchten::all();
        return view ('vluchten.index')->with('vluchten', $vluchten);
    }
    
    public function create()
    {
        return view('vluchten.create');
    }
  
    public function store(Request $request)
    {
        $input = $request->all();
        Vluchten::create($input);
        return redirect('vluchten')->with('flash_message', 'Vluchten Addedd!');  
    }
    
    public function show($id)
    {
        $Vluchten = Vluchten::find($id);
        return view('vluchten.show')->with('vluchten', $Vluchten);
    }
    
    public function edit($id)
    {
        $Vluchten = Vluchten::find($id);
        return view('vluchten.edit')->with('vluchten', $Vluchten);
    }
  
    public function update(Request $request, $id)
    {
        $Vluchten = Vluchten::find($id);
        $input = $request->all();
        $Vluchten->update($input);
        return redirect('vluchten')->with('flash_message', 'Vluchten Updated!');  
    }
  
    public function destroy($id)
    {
        Vluchten::destroy($id);
        return redirect('vluchten')->with('flash_message', 'Vluchten deleted!');  
    }
}