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
use Illuminate\Http\Request;

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
        return view('matches');
    }

    public function news()
    {
        return view('news');
    }

    public function registration()
    {
        return view('registration');
    }

    public function teams()
    {
        return view('teams');
    }

    public function login()
    {
        return view('login');
    }

    public function admin()
    {
        $stadiums = new StadiumModel();
        return view('adminViews.admin_stadiums', ['stadiums' => $stadiums->all()]);
    }

    public function admin_stadiums()
    {
        $stadiums = new StadiumModel();
        return view('adminViews.admin_stadiums', ['stadiums' => $stadiums->all()]);
    }

    public function admin_cities()
    {
        $cities = new CityModel();
        return view('adminViews.admin_cities', ['cities' => $cities->all()]);
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
    {//stadiums
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

//    public function admin_city_details($id){
//        $city = CityModel::findOrFail($id);
//        return view('adminViews.admin_city_details',['city'=>$city]);
//    }
//
//    public function edit_city(Request $request){//stadiums
//        $valid = $request->validate([
//            'name' => 'required|min:2|max:50'
//        ]);
//
//        $city = new CityModel();
//        $city->name=$request->input('name');
//
//        $city->save();
//
//        return redirect()->route('admin_cities');
//    }


    public function add_club(Request $request)
    {//stadiums
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
                        $user=$u;
                        $request->session()->put('currentUser',$user);
//                        session(['currentUser'=>'user'])
                        return redirect()->route('admin');
                    }
                    if ($u->role->name === "ROLE_ADMIN") {
                        $user=$u;
                        $request->session()->put('currentUser',$user);
                        return redirect()->route('admin');
                    }
                }
            }
        }
        return redirect()->route('login');
    }

}
