<?php
namespace App\Http\Controllers;
use GuzzleHttp\Client;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CatController extends Controller
{
    public function index(){
        $catImages = $this->getCatImagesData();
        return view('cat-images', compact('catImages'));

    }
    public function showCatImages(){
        return view('cat-images');
    }

    public function getCatImages(Request $request){
        $page = $request->input('page', 1);
        $catImages = $this->getCatImagesData($page->input('page', 1));

        return response()->json($catImages);
    }

    private function getCatImagesData($page = 1){
        $perPage = 6;  
        $url = "https://api.thecatapi.com/v1/images/search?limit=$perPage&page=$page";

        $client = new Client();
        $response = $client->get($url);

        return json_decode($response->getBody(), true);
    }
}
