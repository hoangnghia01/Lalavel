<?php
namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function index(){
        // $users = [1, 2, 3 ,4, 5,6];
        // $test = 'ddddddddddd';

        // lay du lieu tu DB
        $users = DB::select('select * from users');
        // dd($users);


        //pass variable to view
        //cach 1
        return view('admin.pages.user.list', ['users' => $users]);
        //cach 2
        // return view('admin.pages.user.list')
        // ->with('users', $users)
        // ->with('test', 'aaaaaaaaaaaaaaaaaa')
        // ;

        //cach 3
        // return view('admin.pages.user.list', compact('users', 'test'));
    }


}
