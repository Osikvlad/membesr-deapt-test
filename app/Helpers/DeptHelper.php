<?php


namespace App\Helpers;


use App\Models\Department;

class DeptHelper
{
    private $department;

    public function __construct(Department $department)
    {
        $this->department = $department;
    }

    public function store($data)
    {
        $this->department->create($data);

        return 'success';
    }

    public function getData()
    {
        $data = $this->department->all();

        return $data;
    }

    public function getById($id)
    {
        $data = $this->department->find($id);

        return $data;
    }

    public function update($data, $id)
    {
        $department = $this->getById($id);
        $department->name = $data['name'];
        $department->save();

        return 'success';
    }

    public function delete($id)
    {
        $department = $this->getById($id);
        if(count($department->members) !== 0){
            return redirect()->back()->with('error', 'Невозможно удалить отдел в котором есть сотрудники');
        } else {
            $department->delete();
            return redirect()->back()->with('warning', 'Удалено');
        }
    }

}
