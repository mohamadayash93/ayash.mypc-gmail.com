<?php

namespace App\Http\Controllers;


use App\Gif;
use App\Favorite;
use App\History;

use App\User;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Support\Facades\Auth;
use stdClass;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth')->except(['welcome']);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

    public function home()
    {
        $colors = ["success", "indigo", "danger", "blue", "warning", "info"];
        $data["statistics"] = new Collection();

        switch (Auth::user()->role) {
            case "admin" :
				$statistic = new StdClass();
                $statistic->name = trans('app.gifs');
                $statistic->icon = "image4";
                $statistic->color = $colors[array_rand($colors)];
                $statistic->value = Gif::count();

                $data["statistics"]->push($statistic);

                $statistic = new StdClass();
                $statistic->name = trans('statistics.favorites');
                $statistic->icon = "bookmarks";
                $statistic->color = $colors[array_rand($colors)];
                $statistic->value = count(Favorite::where('user_id', Auth::user()->id)->get());

                $data["statistics"]->push($statistic);

                $statistic = new StdClass();
                $statistic->name = trans('statistics.histories');
                $statistic->icon = "history";
                $statistic->color = $colors[array_rand($colors)];
                $statistic->value = count(History::where('user_id', Auth::user()->id)->get());

                $data["statistics"]->push($statistic);



                break;
            default:
                break;
        }

        return view('home.index', compact('data'));
    }

    public function profile()
    {
        $attributes = [
            "image" => "image",
            "name" => "text",
            "password" => "password",
            "email" => "email",
            "mobile" => "text"
        ];
        $route = "users";

        return view('profile')->with(['attributes' => $attributes, 'route' => $route, 'action' => [], 'item' => Auth::user()]);

    }

    public function welcome()
    {
        return view('welcome');
    }
}
