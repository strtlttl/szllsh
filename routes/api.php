<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Companies;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
Route::get('/companies', function () {
    return Companies::all();
});

Route::get('/companies/{unsec}', function ($unsec) {
    $sec=$unsec;
    if ( preg_match('/^\d+(?:,\d+)*$/', $sec) ){
        $toreturn = DB::table('companies')
        ->whereIn('companyId', explode(',', $sec))
        ->get();}
    else
        {$toreturn = "Hibás formátum";}
    return $toreturn;
});

Route::get('/companies/add/{unsec}', function ($unsec) {
    $sec="{" . $unsec . "}";
    $dec=json_decode($sec,true);
    if(!is_null($dec)) {
        try {
            Companies::insert($dec);  //megadni a kért visszaigazolási formát(true, 1, null, timestamp stb.)
        }
        catch(Exception $e) {
            echo 'Hibás kérés: ' .$e->getMessage(); //okok lekezelése (szintaktikai hiba, hibás adattípus, rossz mezőnév stb.)
        }
        return "Ok";
    }
    else {
        return "Hibás formátum";
    }
});

Route::get('/companies/change/{unsecid}/{unsecdata}', function ($unsecid, $unsecdata) {
    $secid = $unsecid;
    $secdata="{" . $unsecdata . "}";
    $dec=json_decode($secdata,true);
    if(is_numeric($secid) && !is_null($dec)) {
        try {
            DB::table('companies')
              ->where('companyId', $secid)
              ->update($dec);
        }
        catch(Exception $e) {
            echo 'Hibás kérés: ' .$e->getMessage();
        }
        return "ok";
    }
    else {
        return "Hibás formátum";
    }
});