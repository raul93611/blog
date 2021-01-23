<?php

namespace App\Policies;

use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class UserPolicy
{
  use HandlesAuthorization;

  /**
   * Create a new policy instance.
   *
   * @return void
   */
  public function __construct()
  {

  }
  public function before(User $user, $ability){
    if ($user-> isAdministrator()) {
      return true;
    }
  }

  public function show(User $authUser, User $user){
    return $authUser-> id == $user-> id;
  }

  public function edit(User $authUser, User $user){
    return $authUser-> id == $user-> id;
  }

  public function update(User $authUser, User $user){
    return $authUser-> id == $user-> id;
  }
}
