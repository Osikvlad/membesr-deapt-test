<?php


namespace App\Helpers;

use App\Models\Member;

class MemberHelper
{
    protected $member;

    /**
     * MemberHelper constructor.
     * @param Member $member
     */
    public function __construct(Member $member)
    {
        $this->member = $member;
    }

    public function store($data)
    {
        $mem = $this->member->create($data);
        $departments = $data['departments'];
        foreach ($departments as $department){
            $mem->departments()->attach($department);
        }

        return 'success';
    }

    public function getData()
    {
        $data = $this->member->all();

        return $data;
    }

    public function getById($id)
    {
        $data = $this->member->find($id);

        return $data;
    }

    public function update($data, $id)
    {
        $member = $this->getById($id);
        $member->first_name = $data['first_name'];
        $member->last_name = $data['last_name'];
        $member->middle_name = $data['middle_name'];
        $member->gender = $data['gender'];
        $member->salary = $data['salary'];
        $member->departments()->sync($data['departments']);
        $member->save();

        return 'success';
    }

    public function delete($id)
    {
        $member = $this->getById($id);
        $member->delete();

        return 'success';
    }
}
