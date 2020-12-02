<?php

namespace App\Http\Controllers;

use App\Models\CityModel;
use App\Models\ClubModel;
use App\Models\MatchesModel;
use App\Models\MatchesPlayersModel;
use App\Models\News;
use App\Models\NewsModel;
use App\Models\PlayerModel;
use App\Models\PositionModel;
use App\Models\RoleModel;
use App\Models\RoundModel;
use App\Models\StadiumModel;
use App\Models\UserModel;
use Illuminate\Auth\Authenticatable;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class MainController extends Controller
{
    //
    public function index()
    {
        return view('index');
    }

    public function about()
    {
        return view('about');
    }

    public function contact()
    {
        return view('contact');
    }

    public function matches()
    {
        $matches = new MatchesModel();
        $matches_players = MatchesPlayersModel::all();
        $players = PlayerModel::all();

        $data = array();
        $data['matches'] = $matches->all();
        $data['matches_players'] = $matches_players->all();
        $data['players'] = $players->all();
        $this->showResult();

        return view('matches', compact("data"));
    }

    public function showResult()
    {
        $matches = MatchesModel::all();
        $matches_players = MatchesPlayersModel::all();
        foreach ($matches as $match) {
            $home_goals = 0;
            $guest_goals = 0;
            foreach ($matches_players as $match_player) {
                if ($match_player->match->id == $match->id) {
                    if ($match_player->scored_player->club->id == $match->home_club->id) {
                        $home_goals = $home_goals + 1;
                    }
                    if ($match_player->scored_player->club->id == $match->guest_club->id) {
                        $guest_goals = $guest_goals + 1;
                    }
                }
            }
//            echo $home_goals ;
//            echo ":" ;
//            echo $guest_goals ;
        }

    }

    public function news()
    {
        $news = new News();
        return view('news', ['news' => $news->all()]);
    }

    public function registration()
    {
        return view('registration');
    }

    public function teams()
    {
        $clubs = new ClubModel();
        return view('teams', ['clubs' => $clubs->all()]);
    }

    public function login()
    {
        return view('login');
    }

    public function profile(Request $request)
    {
        if (session_status() == PHP_SESSION_NONE) {
            session_start();
        }
        if (isset($_SESSION['currentUser'])) {
            $author = DB::table('user_models')->where('login', '=', $_SESSION['currentUser'])->first();
            $news = News::all()->where('author_id', $author->id);
            return view('profile', ['news' => $news->all()]);
        }
        return view('index');
    }

    public function login_to_site(Request $request)
    {
        $valid = $request->validate([
            'login' => 'required',
            'password' => 'required'
        ]);
        $all_users = UserModel::all();

        $user = new UserModel();
        $user->login = $request->input('login');
        $user->password = $request->input('password');

        foreach ($all_users as $u) {
            if ($u->login === $user->login) {
                if ($u->password === $user->password) {
                    if (session_status() == PHP_SESSION_NONE) {
                        session_start();
                    }
                    $_SESSION["role"] = $u->role->name;
                    $userlogin = $u->login;
                    $_SESSION["currentUser"] = $userlogin;
                    return redirect()->route('profile');
                }
            }
        }
        return redirect()->route('login');
    }

    public function profile_add_news(Request $request)
    {
        $valid = $request->validate([
            'title' => 'required',
            'photo_url' => 'required',
            'text' => 'required'
        ]);
        if (session_status() == PHP_SESSION_NONE) {
            session_start();
        }
        if (isset($_SESSION['currentUser'])) {
            $news = new News();
            $news->title = $request->input('title');
            $news->photo_url = $request->input('photo_url');
            $news->text = $request->input('text');

            $author = DB::table('user_models')->where('login', '=', $_SESSION['currentUser'])->first();
            $news->author_id = $author->id;
            $todayDate = date("d.m.y");
            $news->posted_date = $todayDate;

            $news->save();
            return redirect()->route('profile');
        } else {
            return view('login');
        }
    }
}
