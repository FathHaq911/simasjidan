<?php

namespace App\Http\Controllers;

use App\Models\Agenda;
use Illuminate\Http\Request;

class AgendaController extends Controller
{
    public function index()
    {
        //get Uang agenda
        $agenda = Agenda::all();

        $no = 1;
        //render view 
        return view('pages.agenda.agenda', compact('agenda', 'no'));
    }
    
    public function create()
    {
        // return view('pages.agenda.add-agenda');
    }

    public function store(Request $request)
    {
        // create agenda
        agenda::create([
            'name'      => $request->name,
            'koor'      => $request->koor,
            'locate'    => $request->locate,
            'label'     => $request->label,
        ]);

        //redirect to index
        return redirect()->route('agenda.index');
    }

    public function show(agenda $agenda)
    {
        //
    }

    public function edit(agenda $agenda)
    {
        //
    }

    public function update(Request $request, agenda $agenda)
    {
        $this->validate($request, [
            'name'      => 'required|min:5',
            'koor'     => 'required|min:3',
            'locate'    => 'required|min:3',
            'label'      => 'required|min:5',
        ]);

        //update agenda
        $agenda->update([
            'name'      => $request->name,
            'koor'      => $request->koor,
            'locate'    => $request->locate,
            'label'     => $request->label,
        ]);

        //redirect to index
        // return redirect()->route('pages.agenda.agenda');

    }

    public function destroy($id)
    {
        agenda::where('id', $id)->delete();

        return redirect()->route('agenda.index');
    }

}
