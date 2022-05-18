<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Channel;

class ChannelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datas = Channel::all();

        return response()->json(["GetDataRq" => $datas],200); 

        // return view('channel', compact('GetDataRq'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, $id)
    {
        // return $request->API_KEY_TEST;

        if($request->API_KEY_TEST) {

            if($request->API_KEY_TEST == "12345667890X") {
                $data = Channel::find($id);

                if($data->status == 1) {
                    // success
                    return response()->json(["GetDataRq" => 
                        [
                            "NAMECHANELL" => $data->name_channel,
                            "CHANNELADDR" => $data->channel_address,
                            "STATUS" => $data->status
                        ]
                    ],200);   
                } else {
                    // fail
                    return response()->json(["GetDataRq" => 
                        [
                            "STATUS" => 0,
                            "ERR_MESSAGE " => "Mengambil data gagal"
                        ]
                    ],500);
                }
            }else {
                return response()->json(["ERROR" => 'API_KEY_TEST salah / HTTP FORBIDDEN (403)']);
            }
        }else {
            return response()->json(["ERROR" => 'Harus menggunakan API KEY']);

        }

        
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
