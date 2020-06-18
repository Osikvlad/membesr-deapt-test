<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    protected $table = 'members';
    protected $fillable = ['first_name', 'last_name', 'middle_name', 'gender', 'salary'];

    public function departments()
    {
        return $this->belongsToMany(Department::class, 'member_department');
    }

}
