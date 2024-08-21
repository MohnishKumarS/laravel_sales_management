<?php

namespace App\Policies;

use App\Models\Sale;
use App\Models\User;

class SalesPolicy
{
    // determine edit permission 
  public function editSale(User $user,Sale $sale){
    return $user->id == $sale->user_id;
  }

}
