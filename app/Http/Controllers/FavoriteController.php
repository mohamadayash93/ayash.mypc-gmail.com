<?php

namespace App\Http\Controllers;

use App\Favorite;
use App\Http\Requests\StoreFavorite;
use App\Http\Requests\UpdateFavorite;
use App\Http\Controllers\AdminController as Controller;

class FavoriteController extends Controller
{
    public function __construct(Favorite $favorite)
    {
        $this->model = $favorite;
        $this->route = 'favorites';
        $this->title = 'favorites';

        $this->table_attributes = [
            "gif" => "gif",

        ];

        $this->attributes = [
            "gif" => "gif",

        ];

        $this->storeRequest = new StoreFavorite();
        $this->updateRequest = new UpdateFavorite();

        parent::__construct();
    }
}
