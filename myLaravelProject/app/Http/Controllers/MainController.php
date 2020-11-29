<?php

namespace App\Http\Controllers;

use App\Models\CityModel;
use App\Models\ClubModel;
use App\Models\MatchesModel;
use App\Models\MatchesPlayersModel;
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
        $news = new NewsModel();
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
            $news = NewsModel::all()->where('author_id', $author->id);
            return view('profile', ['news' => $news->all()]);
        }
        return view('index');
    }


    public function admin(Request $request)
    {
        if (session_status() == PHP_SESSION_NONE) {
            session_start();
        }
        if (isset($_SESSION['currentUser'])) {
            $stadiums = new StadiumModel();
            return view('adminViews.admin_stadiums', ['stadiums' => $stadiums->all()]);
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
                    if ($u->role->name === "ROLE_MODERATOR") {
                        $userlogin = $u->login;
//                        $request->session()->put('currentUser',$user);
                        if (session_status() == PHP_SESSION_NONE) {
                            session_start();
                        }
//                        session(['currentUser'=>$user]);
//                        \Illuminate\Contracts\Auth\Authenticatable $us = new Authenticable;/
//                        Auth::login($user, true);
                        $_SESSION["currentUser"] = $userlogin;
                        return redirect()->route('admin');
                    }
                    if ($u->role->name === "ROLE_ADMIN") {
                        $userlogin = $u->login;
                        if (session_status() == PHP_SESSION_NONE) {
                            session_start();
                        }
//                        session(['currentUser'=>$user]);
//                        Auth::login($user, true);
                        $_SESSION["currentUser"] = $userlogin;
                        return redirect()->route('admin');
                    }
                }
            }
        }
        return redirect()->route('login');
    }

    public function logout(Request $request)
    {
        if (session_status() == PHP_SESSION_NONE) {
            session_start();
        }
        session_destroy();
        return redirect()->route('login');
    }

    public function admin_stadiums()
    {
        $stadiums = new StadiumModel();
        return view('adminViews.admin_stadiums', ['stadiums' => $stadiums->all()]);
    }

    public function admin_stadium_details($id)
    {
        $stadium = null;
        $stadiums = StadiumModel::all();
        foreach ($stadiums as $item) {
            if ($item->id == $id) {
                $stadium = $item;
            }
        }
        return view('adminViews.admin_stadium_details', compact("stadium"));
    }

    public function edit_stadium(Request $request)
    {//stadiums
        $valid = $request->validate([
            'name' => 'required|min:2|max:50',
            'address' => 'required|min:2|max:250',
            'capacity' => 'required',
            'builded_year' => 'required',
            'id' => 'required'
        ]);

        $id = $request->input('id');
        $name = $request->input('name');
        $address = $request->input('address');
        $capacity = $request->input('capacity');
        $builded_year = $request->input('builded_year');


        DB::update('update stadium_models set name = ?,address = ?,capacity = ?,builded_year = ? where id = ?', [$name, $address, $capacity, $builded_year, $id]);

        return redirect()->route('admin_stadiums');
    }

    public function admin_delete_stadium(Request $request)
    {//stadiums
        $valid = $request->validate([
            'id' => 'required'
        ]);

        $id = $request->input('id');

        DB::table('stadium_models')->delete($id);

        return redirect()->route('admin_stadiums');
    }

    public function admin_cities()
    {
        $cities = new CityModel();
        return view('adminViews.admin_cities', ['cities' => $cities->all()]);
    }

    public function admin_city_details($id)
    {
        $city = null;
        $cities = CityModel::all();
        foreach ($cities as $item) {
            if ($item->id == $id) {
                $city = $item;
            }
        }
        return view('adminViews.admin_city_details', compact("city"));
    }

    public function edit_city(Request $request)
    {//stadiums
        $valid = $request->validate([
            'name' => 'required',
            'id' => 'required'
        ]);

        $id = $request->input('id');
        $name = $request->input('name');

        DB::update('update city_models set name = ? where id = ?', [$name, $id]);

        return redirect()->route('admin_cities');
    }

    public function admin_delete_city(Request $request)
    {//stadiums
        $valid = $request->validate([
            'id' => 'required'
        ]);

        $id = $request->input('id');

        DB::table('city_models')->delete($id);

        return redirect()->route('admin_cities');
    }

    public function admin_clubs()
    {
        $clubs = new ClubModel();
        $cities = new CityModel();
        $stadiums = new StadiumModel();
        $data = array();
        $data['clubs'] = $clubs->all();
        $data['cities'] = $cities->all();
        $data['stadiums'] = $stadiums->all();
        return view('adminViews.admin_clubs', compact("data"));
    }

    public function admin_club_details($id)
    {
        $club = null;
        $clubs = ClubModel::all();
        foreach ($clubs as $item) {
            if ($item->id == $id) {
                $club = $item;
            }
        }
        $cities = new CityModel();
        $stadiums = new StadiumModel();
        $data = array();
        $data['club'] = $club;
        $data['cities'] = $cities->all();
        $data['stadiums'] = $stadiums->all();
        return view('adminViews.admin_club_details', compact("data"));
    }

    public function edit_club(Request $request)
    {//stadiums
        $valid = $request->validate([
            'name' => 'required|min:2|max:50',
            'club_logo_picture' => 'required',
            'stadium_id' => 'required',
            'city_id' => 'required',
            'founded_year' => 'required',
            'id' => 'required'
        ]);

        $id = $request->input('id');
        $name = $request->input('name');
        $club_logo_picture = $request->input('club_logo_picture');
        $stadium_id = $request->input('stadium_id');
        $city_id = $request->input('city_id');
        $founded_year = $request->input('founded_year');


        DB::update('update club_models set name = ?,club_logo_picture = ?,stadium_id = ?,city_id = ?,founded_year = ? where id = ?',
            [$name, $club_logo_picture, $stadium_id, $city_id, $founded_year, $id]);

        return redirect()->route('admin_clubs');
    }

    public function admin_delete_club(Request $request)
    {
        $valid = $request->validate([
            'id' => 'required'
        ]);

        $id = $request->input('id');

        DB::table('club_models')->delete($id);

        return redirect()->route('admin_clubs');
    }

    public function admin_positions()
    {
        $positions = new PositionModel();
        return view('adminViews.admin_positions', ['positions' => $positions->all()]);
    }

    public function admin_players()
    {
        $clubs = new ClubModel();
        $positions = new PositionModel();
        $players = new PlayerModel();
        $data = array();
        $data['clubs'] = $clubs->all();
        $data['positions'] = $positions->all();
        $data['players'] = $players->all();
        return view('adminViews.admin_players', compact("data"));
    }

    public function admin_player_details($id)
    {
        $player = null;
        $players = PlayerModel::all();
        foreach ($players as $item) {
            if ($item->id == $id) {
                $player = $item;
            }
        }
        $clubs = new ClubModel();
        $positions = new PositionModel();
        $data = array();
        $data['player'] = $player;
        $data['clubs'] = $clubs->all();
        $data['positions'] = $positions->all();
        return view('adminViews.admin_player_details', compact("data"));
    }

    public function edit_player(Request $request)
    {//stadiums
        $valid = $request->validate([
            'name' => 'required|min:2|max:50',
            'surname' => 'required|min:2|max:50',
            'birthday' => 'required',
            'position_id' => 'required',
            'club_id' => 'required',
            'id' => 'required'
        ]);

        $id = $request->input('id');
        $name = $request->input('name');
        $surname = $request->input('surname');
        $birthday = $request->input('birthday');
        $position_id = $request->input('position_id');
        $club_id = $request->input('club_id');

        DB::update('update player_models set name = ?,surname = ?,birthday = ?,position_id = ?,club_id = ? where id = ?',
            [$name, $surname, $birthday, $position_id, $club_id, $id]);

        return redirect()->route('admin_players');
    }

    public function admin_delete_player(Request $request)
    {
        $valid = $request->validate([
            'id' => 'required'
        ]);

        $id = $request->input('id');

        DB::table('player_models')->delete($id);

        return redirect()->route('admin_players');
    }

    public function admin_rounds()
    {
        $rounds = new RoundModel();
        return view('adminViews.admin_rounds', ['rounds' => $rounds->all()]);
    }

    public function admin_matches()
    {
        $matches = new MatchesModel();
        $clubs = new ClubModel();
        $rounds = new RoundModel();
        $data['clubs'] = $clubs->all();
        $data['rounds'] = $rounds->all();
        $data['matches'] = $matches->all();
        return view('adminViews.admin_matches', compact("data"));
    }

    public function admin_match_details($id)
    {
        $match = null;
        $matches = MatchesModel::all();
        foreach ($matches as $item) {
            if ($item->id == $id) {
                $match = $item;
            }
        }
        $clubs = new ClubModel();
        $rounds = new RoundModel();
        $data = array();
        $data['match'] = $match;
        $data['clubs'] = $clubs->all();
        $data['rounds'] = $rounds->all();
        return view('adminViews.admin_match_details', compact("data"));
    }

    public function edit_match(Request $request)
    {//stadiums
        $valid = $request->validate([
            'home_club_id' => 'required',
            'guest_club_id' => 'required',
            'round_id' => 'required',
            'id' => 'required'
        ]);

        $id = $request->input('id');
        $home_club_id = $request->input('home_club_id');
        $guest_club_id = $request->input('guest_club_id');
        $round_id = $request->input('round_id');

        DB::update('update matches_models set home_club_id = ?,guest_club_id = ?,round_id = ? where id = ?',
            [$home_club_id, $guest_club_id, $round_id, $id]);

        return redirect()->route('admin_matches');
    }

    public function admin_delete_match(Request $request)
    {
        $valid = $request->validate([
            'id' => 'required'
        ]);

        $id = $request->input('id');

        DB::table('matches_models')->delete($id);

        return redirect()->route('admin_matches');
    }

    public function admin_matches_players()
    {
        $matches = new MatchesModel();
        $matches_players = new MatchesPlayersModel();
        $players = new PlayerModel();
        $data['matches_players'] = $matches_players->all();
        $data['players'] = $players->all();
        $data['matches'] = $matches->all();
        return view('adminViews.admin_matches_players', compact("data"));
    }

    public function admin_roles(Request $request)
    {
        if ($request->session()->has('currentUser')) {
            $roles = new RoleModel();
            return view('adminViews.admin_roles', ['roles' => $roles->all()]);
        }
        return view('login');
    }

    public function admin_users()
    {
        $users = new UserModel();
        $roles = new RoleModel();
        $data['users'] = $users->all();
        $data['roles'] = $roles->all();
        return view('adminViews.admin_users', compact("data"));
    }

    public function admin_news()
    {
        $users = new UserModel();
        $news = new NewsModel();
        $data['users'] = $users->all();
        $data['news'] = $news->all();
        return view('adminViews.admin_news', compact("data"));
    }

    public function add_city(Request $request)
    {
        $valid = $request->validate([
            'name' => 'required|min:2|max:50'
        ]);

        $city = new CityModel();
        $city->name = $request->input('name');

        $city->save();

        return redirect()->route('admin_cities');
    }

    public function add_position(Request $request)
    {
        $valid = $request->validate([
            'name' => 'required|min:2|max:50'
        ]);

        $position = new PositionModel();
        $position->name = $request->input('name');

        $position->save();

        return redirect()->route('admin_positions');
    }


    public function add_stadium(Request $request)
    {
        $valid = $request->validate([
            'name' => 'required|min:2|max:50',
            'address' => 'required|min:2|max:250',
            'capacity' => 'required',
            'builded_year' => 'required',
        ]);

        $stadium = new StadiumModel();
        $stadium->name = $request->input('name');
        $stadium->address = $request->input('address');
        $stadium->capacity = $request->input('capacity');
        $stadium->builded_year = $request->input('builded_year');

        $stadium->save();

        return redirect()->route('admin_stadiums');
    }

    public function add_club(Request $request)
    {
        $valid = $request->validate([
            'name' => 'required|min:2|max:50',
            'club_logo_picture' => 'required',
            'stadium_id' => 'required',
            'city_id' => 'required',
            'founded_year' => 'required'
        ]);

        $club = new ClubModel();
        $club->name = $request->input('name');
        $club->club_logo_picture = $request->input('club_logo_picture');
        $club->stadium_id = $request->input('stadium_id');
        $club->city_id = $request->input('city_id');
        $club->founded_year = $request->input('founded_year');

        $club->save();

        return redirect()->route('admin_clubs');
    }

    public function add_player(Request $request)
    {
        $valid = $request->validate([
            'name' => 'required|min:2|max:50',
            'surname' => 'required|min:2|max:50',
            'birthday' => 'required',
            'position_id' => 'required',
            'club_id' => 'required'
        ]);

        $player = new PlayerModel();
        $player->name = $request->input('name');
        $player->surname = $request->input('surname');
        $player->birthday = $request->input('birthday');
        $player->position_id = $request->input('position_id');
        $player->club_id = $request->input('club_id');

        $player->save();

        return redirect()->route('admin_players');
    }

    public function add_round(Request $request)
    {
        $valid = $request->validate([
            'number' => 'required'
        ]);

        $round = new RoundModel();
        $round->number = $request->input('number');

        $round->save();

        return redirect()->route('admin_rounds');
    }

    public function add_match(Request $request)
    {
        $valid = $request->validate([
            'home_club_id' => 'required',
            'guest_club_id' => 'required',
            'round_id' => 'required'
        ]);

        $match = new MatchesModel();
        $match->home_club_id = $request->input('home_club_id');
        $match->guest_club_id = $request->input('guest_club_id');
        $match->round_id = $request->input('round_id');

        $match->save();

        return redirect()->route('admin_matches');
    }

    public function add_match_player(Request $request)
    {
        $valid = $request->validate([
            'match_id' => 'required',
            'scored_player_id' => 'required',
            'assisted_player_id' => 'required',
            'goal_time' => 'required'
        ]);

        $match_player = new MatchesPlayersModel();
        $match_player->match_id = $request->input('match_id');
        $match_player->scored_player_id = $request->input('scored_player_id');
        $match_player->assisted_player_id = $request->input('assisted_player_id');
        $match_player->goal_time = $request->input('goal_time');

        $match_player->save();

        return redirect()->route('admin_matches_players');
    }

    public function add_role(Request $request)
    {
        $valid = $request->validate([
            'name' => 'required|min:2|max:50'
        ]);

        $role = new RoleModel();
        $role->name = $request->input('name');

        $role->save();

        return redirect()->route('admin_roles');
    }

    public function add_user(Request $request)
    {
        $valid = $request->validate([
            'login' => 'required|min:2|max:50',
            'password' => 'required|min:2|max:50',
            'role_id' => 'required',
        ]);

        $user = new UserModel();
        $user->login = $request->input('login');
        $user->password = $request->input('password');
        $user->role_id = $request->input('role_id');

        $user->save();

        return redirect()->route('admin_users');
    }

    public function admin_user_details($id)
    {
        $user = null;
        $users = UserModel::all();
        foreach ($users as $item) {
            if ($item->id == $id) {
                $user = $item;
            }
        }
        $roles = new RoleModel();
        $data = array();
        $data['user'] = $user;
        $data['roles'] = $roles->all();
        return view('adminViews.admin_user_details', compact("data"));
    }

    public function edit_user(Request $request)
    {//stadiums
        $valid = $request->validate([
            'login' => 'required|min:2|max:50',
            'password' => 'required|min:2|max:50',
            'role_id' => 'required',
            'id' => 'required'
        ]);

        $login = $request->input('login');
        $password = $request->input('password');
        $role_id = $request->input('role_id');
        $id = $request->input('id');

        DB::update('update user_models set login = ?,password = ?,role_id = ? where id = ?',
            [$login, $password, $role_id, $id]);

        return redirect()->route('admin_users');
    }

    public function admin_delete_user(Request $request)
    {
        $valid = $request->validate([
            'id' => 'required'
        ]);

        $id = $request->input('id');

        DB::table('user_models')->delete($id);

        return redirect()->route('admin_users');
    }

    public function add_news(Request $request)
    {
        $valid = $request->validate([
            'title' => 'required',
            'text' => 'required',
            'posted_date' => 'required',
            'author_id' => 'required',
        ]);

        $news = new NewsModel();
        $news->title = $request->input('title');
        $news->text = $request->input('text');
        $news->posted_date = $request->input('posted_date');
        $news->author_id = $request->input('author_id');

        $news->save();

        return redirect()->route('admin_news');
    }

    public function profile_add_news(Request $request)
    {
        $valid = $request->validate([
            'title' => 'required',
            'text' => 'required'
        ]);
        if (session_status() == PHP_SESSION_NONE) {
            session_start();
        }
        if (isset($_SESSION['currentUser'])) {
            $news = new NewsModel();
            $news->title = $request->input('title');
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
