<?php

namespace App\Http\Controllers;

use App\Models\Organisasi;
use App\Models\Riwayat_organisasi;
use Illuminate\Http\Request;

class OrganisasiController extends Controller
{
    public function index()
    {
        Riwayat_organisasi::all();
        return view('content.user.organisasi');
    }
}
