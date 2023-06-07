<?php

namespace App\Http\Controllers\Freight;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Inertia\Inertia;
use App\Models\Freight\AirLandFreight;
use App\Models\Freight\AirLandFreightDetail;
use Auth;
use Carbon\Carbon;

class AirFreightController extends Controller
{

    public function index(Request $request)
    {

        if($request->no_dokumen){
      
            $show_air_freights = AirLandFreight::where('NoDokumen',$request->no_dokumen)->get()[0];
            $air_freights = AirLandFreight::get();
            return Inertia::render('Apps/Freights/Index',[
                'items' => $air_freights,
                'show_detail_air_freight' => $show_air_freights
            ]);
        }else{
          
            $air_freights = AirLandFreight::get();
            return Inertia::render('Apps/Freights/Index',[
                'items' => $air_freights
            ]);
        }

    }

    public function detailAirFreight($id)
    {

        if($id == "undefined"){
           return redirect()->back();
        }else{
            $air_freight_details = AirLandFreightDetail::where('NoDokumen',$id)->get();
            $show_air_freights = AirLandFreight::where('NoDokumen',$id)->get()[0];
            
            return Inertia::render('Apps/Freights/Detail',[
                'detail_air_freight' => $air_freight_details,
                'show_air_freights'  => $show_air_freights,
            ]);
        }
        
    }

    public function detailAirFreightNew(Request $request)
    {
        $show_air_freights = AirLandFreight::where('NoDokumen',$request->NoDokumen)->get()[0];
        return Inertia::render('Apps/Freights/DetailNew',[
            'show_detail_air_freight' => $show_air_freights
        ]);
    }

    public function detailAirFreightShow(Request $request,$id)
    {
        $show_air_freights = AirLandFreight::where('NoDokumen',$id)->get()[0];

        return redirect()->route('air-freight.index',[
            'show_detail_air_freight' => $show_air_freights
        ]);

    }
    public function create()
    {
        return Inertia::render('Apps/Freights/Create');
    }


    public function store(Request $request)
    {
 
        $tgl = Carbon::now();
        $format_tgl = date('md',strtotime($tgl));
        $format_tgl_db = date('Y-m-d',strtotime($tgl));
        $kode_freight = "AF";
        $last_kode_freight = "ABD";
        // $max = DB::select("SELECT  NoDokumen FROM air_land_freight_heads WHERE NoDokumen LIKE '%$kode_freight-$format_tgl-$last_kode_freight%'");
        $jumlah_baris = AirLandFreightDetail::count();
        $no_dokumen = "$kode_freight-$format_tgl-$last_kode_freight";

        AirLandFreight::create([
            'NoDokumen'         => $no_dokumen,
            'TglBuat'           => $format_tgl_db,
            'TglTerbit'         => $format_tgl_db,
            'TglPemutakhiran'   => $format_tgl_db,
            'Diterbitkan'       => 'Dept. Freight',
            'JumlahBaris'       => $jumlah_baris,
            'JenisFreight'      => $request->jenis_freight,
            'CreatedBy'         => Auth::user()->id,
            'UpdatedBy'         => Auth::user()->id,
        ]);

        return redirect()->route('air-freight.detail-new',['NoDokumen' => $no_dokumen]);
    }


    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        //
    }


    public function update(Request $request, $id)
    {
        //
    }


    public function destroy($id)
    {
        //
    }
}
