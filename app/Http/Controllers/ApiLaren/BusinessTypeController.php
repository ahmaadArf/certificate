<?php

namespace App\Http\Controllers\ApiLaren;

use App\Models\BusinessType;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Controllers\ApiLaren\Traits\GeneralTrait;
use App\Models\ElectricBoard;

class BusinessTypeController extends Controller
{
    use GeneralTrait;

    public function index()
    {
        $BusinessType = BusinessType::select('id','name')->get();
        return $this->returnData('business type',$BusinessType,
        'list of all business type');
    }

    public function electricBoards() {
        $electric_boards = ElectricBoard::select('id','name')->get();
        return $this->returnData('business type',$electric_boards,
        'list of all business type');

    }
}
