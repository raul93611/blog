<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Role;
use App\Http\Requests\StoreUserRequest;
use App\Http\Requests\UpdateUserRequest;

class UserController extends Controller
{
  public function __construct()
  {
    $this-> middleware('can:users')-> except(['show', 'edit', 'update']);
  }

  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index()
  {
    $users = User::all()-> load('roles');

    return view('user.index', ['users' => $users]);
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function create()
  {
    $roles = Role::pluck('key', 'id');
    return view('user.create', ['roles' => $roles]);
  }

  /**
   * Store a newly created resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */
  public function store(StoreUserRequest $request)
  {
    $user = new User($request-> all());
    $user-> save();
    $user-> roles()-> attach($request-> roles);

    return back()-> with('info', 'User created.');
  }

  /**
   * Display the specified resource.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function show(User $user)
  {
    $this-> authorize('show', $user);
    return view('user.show', ['user' => $user]);
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function edit(User $user)
  {
    $roles = Role::pluck('key', 'id');
    $this-> authorize('edit', $user);
    return view('user.edit', ['user' => $user, 'roles' => $roles]);
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function update(UpdateUserRequest $request, User $user)
  {
    $this-> authorize('update', $user);
    $user-> update($request-> only('name', 'email'));
    $user-> roles()-> sync($request-> roles);

    return back()-> with('info', 'User updated.');
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function destroy(User $user)
  {
    $user-> posts()-> delete();
    $user-> roles()-> detach();
    $user-> delete();
    return back();
  }
}
