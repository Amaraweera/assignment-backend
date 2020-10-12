<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Organizations;
use App\Http\Resources\Organizations as OrganizationResource;

class OrganizationController extends Controller
{
    public function index(Request $request)
    {
        $search = $request->input('search', '');
        return OrganizationResource::collection(Organizations::where('name', 'like', $search . '%')->paginate());
    }
}
