<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
  public function me() {
    return ['NIS' => 3103119101,
        'name' => 'Laura Sharon Wanshika',
        'gender' => 'Female',
        'phone' => '081215028124',
        'class' => 'XII RPL 3'];
  }
}