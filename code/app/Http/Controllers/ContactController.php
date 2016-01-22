<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\App;
use App\Auction;
use Carbon\Carbon;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Redirect;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $locale = App::getLocale();

        $newest = Auction::translatedIn($locale)
            ->where( 'end_date' , '>=', Carbon::now() )
            ->orderBy( 'created_at','DESC' )
            ->first();

        $auctions = Auction::translatedIn($locale)
            ->where( 'end_date' , '>=', Carbon::now() )
            ->where( 'status_id' , 1 )
            ->orderBy( 'created_at','DESC' )
            ->get();

        return view( 'contact.index' , array( 'newest' => $newest ,'auctions' => $auctions ) );
    }

    /**
     * Show the form for sending mailse.
     *
     * @return \Illuminate\Http\Response
     */
    public function sendMail(Request $request)
    {
        $this->validate($request, [
            'auction' => 'required',
            'email'   => 'required|email',
            'content' => 'required',
        ]);

        $input = $request->all();

        $data =  [
            'email' => $input['email'],
            'text' => $input['content'],
            'auction' => $input['auction']
        ];

        Mail::send('emails.contact', $data, function ($message) use ($input) {
            $message->from( $input['email'], $input['auction']);

            $message->to('marijnbrosens16@gmail.com')->subject( $input['auction']);;
        });

        return Redirect::back();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function ask(Request $request)
    {
        $data = $request->all();

        $selectedAuction = $data['id'];

        $locale = App::getLocale();

        $newest = Auction::translatedIn($locale)
            ->where( 'end_date' , '>=', Carbon::now() )
            ->orderBy( 'created_at','DESC' )
            ->first();

        $auctions = Auction::translatedIn($locale)
            ->where( 'end_date' , '>=', Carbon::now() )
            ->where( 'status_id' , 1 )
            ->orderBy( 'created_at','DESC' )
            ->get();

        return view( 'contact.index' , array( 'newest' => $newest ,'auctions' => $auctions , 'selected' => $selectedAuction ) );
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
