<?php

namespace App\Http\Controllers;

use App\Helpers\DeptHelper;
use App\Helpers\MemberHelper;
use App\Http\Requests\MemberRequest;
use App\Models\Member;
use Illuminate\Http\Request;
use Illuminate\Contracts\Validation\Validator;

class MembersController extends Controller
{
    private $memberHelper;
    private $departmentHelper;

    public function __construct()
    {
        $this->memberHelper = app(MemberHelper::class);
        $this->departmentHelper = app(DeptHelper::class);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $members = $this->memberHelper->getData();

        return view('pages.members.index')->with('members', $members);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $departments = $this->departmentHelper->getData();

        return view('pages.members.create')->with('departments', $departments);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(MemberRequest $request)
    {
        $this->memberHelper->store($request->all());

        return redirect()->to(route('members.index'))->with('success', 'Сотрудник успешно создан');
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $member = $this->memberHelper->getById($id);
        $departments = $this->departmentHelper->getData();

        return view('pages.members.update')->with('member', $member)->with('departments', $departments);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(MemberRequest $request, $id)
    {
        $this->memberHelper->update($request->all(), $id);

        return redirect()->to(route('members.index'))->with('info', 'Сотрудник изменен');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->memberHelper->delete($id);

        return redirect()->back()->with('warning', 'Сотрудник удален');
    }
}
