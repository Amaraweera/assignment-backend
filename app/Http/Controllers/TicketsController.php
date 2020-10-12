<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tickets;
use App\Http\Resources\Tickets as TicketsResource;

class TicketsController extends Controller
{
    public function index(Request $request)
    {
        $search = $request->input('search', '');
        return TicketsResource::collection(Tickets::where('subject', 'like', $search . '%')->paginate());
    }
}
