<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\{UserUpdateRequest,UserAddRequest};
use Spatie\Permission\Models\Role;
use stdClass;
use DB;
use Auth;
use Carbon\Carbon;
use DateTime;


class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        // $this->authorize(User::class, 'index');
        // if($request->ajax())
        // {
        //     $users = new User;
        //     if($request->q)
        //     {
        //         $users = $users->where('name', 'like', '%'.$request->q.'%')->orWhere('email', $request->q);
        //     }
        //     $users = $users->paginate(config('stisla.perpage'))->appends(['q' => $request->q]);
        //     return response()->json($users);
        // }


        $users = DB::table('users')->get();
        return view('admin.users.index',compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.users.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {   

        // dd($request);

        $validatedData = $request->validate([
            'username' => 'required|unique:users',
            'type' => 'required',
            'password' => 'required|confirmed|min:5',
        ]);

        DB::table('users')
            ->insert([
                'username' => $request->username,
                'name' => $request->name,
                'password' => $request->password,
                'type' => $request->type,
                'email' => $request->email,
                'newic' => $request->newic,
                'adddate' => Carbon::now("Asia/Kuala_Lumpur"),
            ]);

        // $user = User::create($request->all());
        // $role = Role::find($request->role);
        // if($role)
        // {
        //     $user->assignRole($role);
        // }
        // return response()->json($user);

        return redirect()->route('userlist');
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
        $user = DB::table('users')
            ->where('id','=',$id)
            ->first();

        return view('admin.users.edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update($id, Request $request)
    {
        // if(!App::environment('demo'))
        // {
        //     $user->update($request->only([
        //         'name', 'email'
        //     ]));

        //     if($request->password)
        //     {
        //         $user->update(['password' => Hash::make($request->password)]);
        //     }

        //     if($request->role && $request->user()->can('edit-users') && !$user->isme)
        //     {
        //         $role = Role::find($request->role);
        //         if($role)
        //         {
        //             $user->syncRoles([$role]);
        //         }
        //     }
        // }

        $validatedData = $request->validate([
            'type' => 'required',
            'password' => 'required|confirmed|min:5',
        ]);

        DB::table('users')
            ->where('id','=',$id)
            ->update([
                'name' => $request->name,
                'password' => $request->password,
                'type' => $request->type,
                'email' => $request->email,
                'newic' => $request->newic,
                'upddate' => Carbon::now("Asia/Kuala_Lumpur"),
            ]);
        
        if(Auth::user()->type=='admin'){
            return redirect()->back()->with('success', 'Profile Succesfully Updated'); 
        }else{
            return redirect()->back()->with('success', 'Profile Succesfully Updated'); 
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // if(!App::environment('demo') && !$user->isme)
        // {
        //     $user->delete();
        // } else
        // {
        //     return response()->json(['message' => 'User accounts cannot be deleted in demo mode.'], 400);
        // }
        DB::table('users')
            ->where('id','=',$id)
            ->delete();

        return redirect()->route('userlist');
    }

    public function roles()
    {
        // return response()->json(Role::get());
    }
}
