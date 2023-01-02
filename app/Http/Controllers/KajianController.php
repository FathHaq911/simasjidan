<?php

namespace App\Http\Controllers;

use App\Models\Kajian;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class KajianController extends Controller
{
    public function index()
    {
        $y = (int)date('y'); //year
        $m = (int)date('m'); //month
        $d = (int)date('d'); //day
        $h = (int)date('H'); //jam
        $i = (int)date('i'); //menit
        $s = (int)date('s'); //detik

        // get nama hari
        $pray = json_decode(Http::get('https://api.myquran.com/v1/sholat/jadwal/1204/20' . $y . '/' . $m ));

        //get Uang kajian
        $kajian = Kajian::all();

        $no = 1;
        //render view 
        return view('pages.kajian.kajian', compact('kajian', 'no'));
    }
    
    public function create()
    {
        // return view('pages.kajian.add-kajian');
    }

    public function store(Request $request)
    {
        // create kajian
        kajian::create([
            'name'      => $request->name,
            'title'     => $request->title,
            'label'     => $request->label,
        ]);

        //redirect to index
        return redirect()->route('kajian.index');
    }

    public function show(kajian $kajian)
    {
        //
    }

    public function edit(kajian $kajian)
    {
        return view('product.edit', compact('product'));
    }

    public function update(Request $request, Kajian $kajian)
    {
        $this->validate($request, [
            'name'      => 'required|min:5',
            'debit'     => 'required|min:3',
            'kredit'    => 'required|min:3',
            'note'      => 'required|min:5',
        ]);

        //update kajian
        $kajian->update([
            'name'     => $request->name,
            'debit'    => $request->debit,
            'kredit'    => $request->kredit,
            'note'    => $request->note,
        ]);

        //redirect to index
        // return redirect()->route('pages.kajian.kajian');

    }

    public function destroy($id)
    {
        Kajian::where('id', $id)->delete();

        return redirect()->route('kajian.index');
    }

}
