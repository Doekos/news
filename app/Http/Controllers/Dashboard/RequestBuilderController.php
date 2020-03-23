<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\User;
use App\StoredRequest;

use GuzzleHttp\Client;


class RequestBuilderController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('dashboard.features.requestbuilder');
    }

    public function store(Request $request, User $user)
    {

      $stored_request = new StoredRequest();

      if($request != NULL) {
        $stored_request->user_id  = $request->user_id;
        $stored_request->country  = $request->country;
        $stored_request->category = $request->category;
        $stored_request->source   = $request->source;
        $stored_request->keyword  = $request->keyword;
        $stored_request->results  = $request->results;

        $stored_request->save();
      }

      $client = new Client();
        $req = $client->request('GET','https://newsapi.org/v1/top-headlines', [
            'Accept'       => 'application/json',
            'Content-Type' => 'application/json',
            'verify' => false,
            'query' => [
                'country'       => 'nl',
                'category'       => 'business',
                'apiKey'       => '1fce490764e14b8198d35850513b06ab',
            ],
        ]);

        $stream   = $req->getBody();
        $contents = json_decode($stream->getContents());
        var_dump($contents);

      return view('dashboard.features.storedrequests');
    }
}
