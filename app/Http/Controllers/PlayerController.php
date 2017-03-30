<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PlayerController extends Controller
{

  public function index()
  {
    $player = Player::all();
    return Response::json($players);
  }

  public function show($id)
  {
    $player = Player::find($id);
    return Response::json($players);
  }

  public function show($id)
  {
    $player = Player::find($id);
    return Response::json($game);

  }
}
