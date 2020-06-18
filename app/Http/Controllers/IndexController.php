<?php

namespace App\Http\Controllers;

use App\Helpers\DeptHelper;
use App\Helpers\MemberHelper;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    private $departmentHelper;
    private $memberHelper;

    public function __construct()
    {
        $this->departmentHelper = app(DeptHelper::class);
        $this->memberHelper = app(MemberHelper::class);
    }

    public function index()
    {
        $members = $this->memberHelper->getData();
        $departments = $this->departmentHelper->getData();

        return view('pages.index')->with('members', $members)->with('departments', $departments);
    }
}
