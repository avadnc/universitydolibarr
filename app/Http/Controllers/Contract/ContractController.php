<?php

namespace App\Http\Controllers\Contract;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ContractController extends Controller
{
    public function privacypolicy()
    {
        return view('contract.privacy');
    }

    public function termsconditions()
    {
        return "términos y condiciones";
    }
}
