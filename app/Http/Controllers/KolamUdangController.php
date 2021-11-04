<?php

namespace App\Http\Controllers;

use App\Models\Kolam;
use App\Models\SuhuPh;
use Illuminate\Http\Request;

use App\Exports\SuhuPhExport;
use Maatwebsite\Excel\Facades\Excel;

class KolamUdangController extends Controller
{
    public function showRedirect() {
        return redirect('/1');
    }
    public function show($id) {
        $link = Kolam::all();
        $kolam = Kolam::where('id',$id)->first();
        $suhuPh = SuhuPh::where('id_kolam_foreign',$id)->with('kolam')->get();
        $grSuhu = SuhuPh::where('id_kolam_foreign',$id)->pluck('suhu');
        $grWaktu = SuhuPh::where('id_kolam_foreign',$id)->pluck('waktu');
        $grPh = SuhuPh::where('id_kolam_foreign',$id)->pluck('ph');
        $count = 1;
        // dd($grWaktu);
        return view('show',compact('kolam','suhuPh','grSuhu','grWaktu','grPh','count','link'));
    }
    public function export($id) {
        return Excel::download(new SuhuPhExport($id), 'SuhuPh_kolam_'.$id.'.xlsx');
    }
}
