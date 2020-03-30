<?php

namespace App\Http\Controllers;

use App\Favorite;
use App\Gif;
use App\Http\Requests\StoreGif;
use App\Http\Requests\UpdateGif;
use App\Http\Controllers\AdminController as Controller;
use http\Env\Request;
use Illuminate\Support\Facades\Auth;

class GifController extends Controller
{
    public function __construct(Gif $gif)
    {
        $this->model = $gif;
        $this->route = 'gifs';
        $this->title = 'gifs';

        $this->table_attributes = [
            "keywords" => "text",
            "image" => "image",
        ];

        $this->attributes = [
            "keywords" => "textarea",
            "image" => "image",
        ];

        $this->storeRequest = new StoreGif();
        $this->updateRequest = new UpdateGif();

        parent::__construct();
    }

    public function addToFavorite($id){
        $favorite = Favorite::where('gif_id', $id)->where('user_id', Auth::user()->id)->get();
        if(count($favorite) == 0) {
            $fav = new Favorite();
            $fav->user_id = Auth::user()->id;
            $fav->gif_id = $id;
            $fav->save();
        }

        return redirect()->action('FavoriteController@index');
    }

    public function deleteFromFavorite($id){
        $fav = Favorite::where('gif_id', $id)->where('user_id', Auth::user()->id)->get();
        foreach ($fav as $f) {
            $f->delete();
        }

        return redirect()->action('FavoriteController@index');
    }
}
