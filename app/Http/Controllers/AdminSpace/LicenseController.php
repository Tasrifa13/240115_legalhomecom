<?php

namespace App\Http\Controllers\AdminSpace;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LicenseController extends Controller
{
    public function view_create()
    {
    	return view("panel.license.create");
    }

    public function view_update()
    {
    	return view("panel.license.update");
    }

    public function view_list()
    {
    	return view("panel.license.list");
    }

    public function post_delete(Request $request){
    	$data = array();
        
        try {
            $license_id = $request->license;

            if(strlen($license_id) == 0){
                $license_id = 0;
            }
            $data['license_id'] = $license_id;
        } catch(\Exception $e){
            $$license_id = 0;
        }

        $rules = [
            'license_id' => 'exists:license, license_id'
        ];
        
        $validator = Validator::make($data, $rules);
        if(!$validator->passes()){
            $data['error'] = $validator->messages();
            return $data;
        }
        try{
            $record = LicenseModel::find($license_id);
            $record->delete();
        } catch(Exception $exception){
            $data['error'] = array('data ini tidak bisa dihapus');
            return $data;
        }
    }

    public function post_create(Request $request){
    	$title = $request->title;
        $categori = $request->categori;
        $isi = $request->isi;

        $k = new LicenseModel();
        $k->title = $title;
        $k->categori = $categori;
        $k->isi = $isi;
        $k->save();
        return redirect()->route('create-license-get');
    }

    public function post_update(Request $request){
    	{
            
            $request->validate([
                'title' => 'required|string',
                'categori' => 'required|string',
                'isi'   => 'required|string',
            ]);

             
            License::create([
                'title' => $request->input('title'),
                'categori' => $request->input('categori'),
                'isi'   => $request->input('isi'),
            ]);

            return redirect()->back()->with('success', 'license created successfully.');
        }
    }
}
