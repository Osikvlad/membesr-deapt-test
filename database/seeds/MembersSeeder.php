<?php

use Illuminate\Database\Seeder;

class MembersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $member = new \App\Models\Member();
        $member->first_name = 'Иван';
        $member->last_name = 'Йода';
        $member->middle_name = 'Васильевич';
        $member->gender = 'Мужчина';
        $member->salary = '1200';
        $member->save();
        $member->departments()->sync([
            1 => 1,
            2 => 2
        ]);

        $member = new \App\Models\Member();
        $member->first_name = 'Петр';
        $member->last_name = 'Вейдер';
        $member->middle_name = 'Анатольевич';
        $member->gender = 'Мужчина';
        $member->salary = '900';
        $member->save();
        $member->departments()->sync([
            1 => 2,
            2 => 3
        ]);

        $member = new \App\Models\Member();
        $member->first_name = 'Ольга';
        $member->last_name = 'Кеноби';
        $member->middle_name = 'Валерьевна';
        $member->gender = 'Женщина';
        $member->salary = '800';
        $member->save();
        $member->departments()->sync([
            1 => 1,
            2 => 2,
            3 => 4
        ]);
    }
}
