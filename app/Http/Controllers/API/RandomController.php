<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\lottery;

class RandomController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $lottery = lottery::first();
        return response()->json($lottery);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->get('random');
        if($data == "true"){
           $one = rand(1,999);
           $two1 = rand(1,999);
           $two2 = rand(1,999);
           $two3 = rand(1,999);
           $last2 = rand(1,99);
        }
        if($data == "false"){
            $one = 0;
            $two1 = 0;
            $two2 = 0;
            $two3 = 0;
            $last2 = 0;
        }
        $arr = ['st1_prize' => $one,
                    'nd2_prize_1' => $two1,
                    'nd2_prize_2' => $two2,
                    'nd2_prize_3' => $two3,
                    'Last_2' => $last2];
           DB::table('lotteries')
            ->where('id', 1)
            ->update($arr);
           $arr = ['status'=>true,'message'=>'success'];
           return response()->json($arr);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
