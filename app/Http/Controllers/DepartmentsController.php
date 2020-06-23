<?php

namespace App\Http\Controllers;

use App\Http\Requests\DeptRequest;
use App\Models\Department;
use Illuminate\Http\Request;
use App\Helpers\DeptHelper;

class DepartmentsController extends Controller
{
    private $departmentHelper;

    public function __construct()
    {
        $this->departmentHelper = app(DeptHelper::class);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $departments = $this->departmentHelper->getData();

        return view('pages.departments.index')->with('departments', $departments);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.departments.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(DeptRequest $request)
    {
        $this->departmentHelper->store($request->all());

        return redirect()->to(route('departments.index'))->with('success', 'Отдел успешно создан');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $department = $this->departmentHelper->getById($id);

        return view('pages.departments.update')->with('department', $department);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        try {
            $this->departmentHelper->update($request->all(), $id);
            return redirect()->to(route('departments.index'))->with('info', 'Отдел изменен');

        } catch (\Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $result = $this->departmentHelper->delete($id);

        return $result;
    }
}
