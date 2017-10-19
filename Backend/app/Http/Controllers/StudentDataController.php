<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\support\Facades\DB;
use App\mahasiswa;

class StudentDataController extends Controller
{   
    function StudentInput(Request $req){
        DB::beginTransaction();
        try{
            $this->validate($req, [
                'nama' => 'required'
            ]);
        $mahasiswa = new mahasiswa;
        $mahasiswa->name = $req->input('name');
        $mahasiswa->alamat = $req->input('alamat');
        $mahasiswa->phoneno = $req->input('phoneno');
        $mahasiswa->save();

        DB::commit();
        return response()->json(['message'=>'Success'], 200);

        }
        catch(\Exception $e){
            DB::rollback();
            return response()->json(['message'=>'Failed to Sign Up, exception:' + $e], 500);
        }
    }

    function StudentUpdate(Request $req){
        $mahasiswa = new mahasiswa;
        $mahasiswaId= $req->input('NIM');
        $newaddress = Input::get('address');
        $newphoneno = Input::get('phoneno');
        DB::table('mahasiswas')
        ->where('id', $mahasiswaId);
        ->update(['address'=> $req->input('address'), 'phoneno'=> $req->input('phoneno')]);

   $sql = "UPDATE NIM SET address= ? phoneno= ? WHERE NIM= ?";
   DB::update($sql, array($newaddress, $newphoneno, $status->id));

   return Redirect::to('home');
    }
}
