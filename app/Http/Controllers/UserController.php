<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Role;
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
    $users = User::all();

    return view('user.index', ['users' => $users]);
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function create()
  {
      //
  }

  /**
   * Store a newly created resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */
  public function store(Request $request)
  {
      //
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
    $user-> update($request-> all());
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
