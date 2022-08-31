<?php

namespace Flutterbuddy1\EasyApi\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Str; 

class ApiController extends Controller
{
    public function index($table){
        if(isset($_GET['include'])){
            $include = addslashes($_GET['include']);
            $includeCount = explode(",",$include);
            $data = DB::table($table)->simplePaginate(isset($_GET['limit']) ? addslashes($_GET['limit']) : 15);

            $updatData = $data;
            foreach($includeCount as $inc){
                $updatData = $this->includeTable($inc,$updatData);
            }
            return response($updatData, 200);
        }else{
            $data = DB::table($table)->simplePaginate(isset($_GET['limit']) ? addslashes($_GET['limit']) : 15);
            return response($data, 200);
        }
    }

    public function get($table, $id){
        if(isset($_GET['include'])){
            $include = addslashes($_GET['include']);
            $includeCount = explode(",",$include);
            $data = DB::table($table)->where("id",$id)->get();

            $updatData = $data;
            foreach($includeCount as $inc){
                $updatData = $this->includeTable($inc,$updatData);
            }
            return response($updatData, 200);
        }else{
            $data = DB::table($table)->where("id",$id)->get();
            return response($data, 200);
        }
    }


    public function post($table,Request $request){
        $data = $request->all();
        $res = DB::table($table)->insertGetId($data);
        $response = DB::table($table)->where("id",$res)->first();
        return response()->json($response);
    }

    public function update($table,$id,Request $request){
        $data = $request->all();

        $res = DB::table($table)->where("id",$id)->update($data);
        
        $response = DB::table($table)->where("id",$id)->first();
        
        return response()->json($response);
    }

    public function delete($table, $id){
        $res = DB::table($table)->delete($id);
        if($res){
            return response()->json([
                "success"=>true,
                "message"=>"Item Deleted Successfully",
            ]);
        }
        return response()->json([
            "success"=>false,
            "message"=>"Something Went Wrong",
        ]);
    }

    public function includeTable($table , $datas){
        if(Schema::hasTable($table)){
            foreach($datas as $i => $data){
                if(isset($data->{Str::singular($table)})){
                    $dataVal = $datas[$i]->{Str::singular($table)};
                    $checkQry = DB::table($table)->where("id",$dataVal)->first();
                    if($checkQry){
                        $datas[$i]->{Str::singular($table)} = $checkQry;
                    }
                }
            }
        }
        return $datas;
    }

}
