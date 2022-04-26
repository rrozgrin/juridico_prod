<?php

namespace App\Imports;

use App\Models\User;
use Maatwebsite\Excel\Concerns\ToModel;
use Illuminate\Support\Facades\Hash;

class UserImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new User([
            'name_user' => $row['0'],
            'area' => $row['1'],
            'email' => $row['2'],
            'id_role' => $row['4'],
            'password' => Hash::make($row['3']),
        ]);
    }
}
