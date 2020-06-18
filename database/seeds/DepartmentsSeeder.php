<?php

use Illuminate\Database\Seeder;

class DepartmentsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $departments = ['Frontend','Backend', 'Seo', 'QA'];
        foreach ($departments as $key=>$value){
            $department = new \App\Models\Department();
            $department->name = $value;
            $department->save();
        }
    }
}
