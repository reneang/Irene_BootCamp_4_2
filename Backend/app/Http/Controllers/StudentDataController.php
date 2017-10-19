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
        $mahasiswa->nama = $req->input('nama');
        $mahasiswa->alamat = $req->input('alamat');
        $mahasiswa->phoneno = $req->input('phoneno');
        $mahasiswa->save();

        DB::commit();
        return response()->json($mahasiswa, 200);

        }
        catch(\Exception $e){
            DB::rollback();
            return response()->json(['message'=>'Failed to Sign Up, exception:' + $e], 500);
        }
    }
    function update(Request $req, $id)
    {
        DB::beginTransaction();
 
        try {
            $mahasiswa = mahasiswa::find($id);
            $phoneno = $req->input('phoneno');
            $alamat = $req->input('alamat');
            $mahasiswa->save();
            DB::table('mahasiswas')
                ->where('id', $id)
                ->update(['phoneno' => $phoneno, 'alamat' => $alamat]);
            DB::commit();
 
            return response()->json(['message' => 'Update'], 201);
        } catch (\Exception $e) {
            DB::rollback();
            return response()->json(['message' => 'Gagal:' + $e], 500);
        }
    }
}
//     function StudentUpdate(Request $req){
//     DB::beginTransaction();
//         try {

//             $mahasiswa = mahasiswa::find($id);
//             $mahasiswa->alamat = $req->input('alamat');
//             $mahasiswa->phoneno = $req->input('phoneno');
//             $mahasiswa->save();
//             // DB::update('update mahasiswas set alamat = ?, phoneno =?  where NIM = ?' , [$newaddress, $newphoneno, $NIM]);
            
            
//             DB::table('mahasiswas')
//             ->where('nim', $id)
//             ->update(['alamat' => $mahasiswa->alamat]);
//             DB::commit();
            
//             return response()->json(['message' => 'Success'], 201);
//             }
//             catch(\Exception $e){
//                 DB::rollback();
//                 return response()->json(['message'=>'Failed to Sign Up'], 500);
//             }
            
//     }
// }


// $NIM= $req->input('NIM');
// $newaddress = $req->input('alamat');
// $newphoneno = $req->input('phoneno');

// DB::update('update mahasiswas set alamat = ?, phoneno =?  where NIM = ?' , [$newaddress, $newphoneno, $NIM]);
// return response()->json(['message' => 'Success'], 200);

// // DB::table('mahasiswas')
// // ->where('id', $mahasiswaId);
// // ->update(['alamat'=> $newaddress;'phoneno'=>$newphoneno;]);
// }
// catch(\Exception $e){
//     DB::rollback();
//     return response()->json(['message'=>'Failed to Sign Up, exception:' + $e], 500);
// }
