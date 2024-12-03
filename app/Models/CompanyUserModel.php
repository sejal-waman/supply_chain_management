<?php

namespace App\Models;

use CodeIgniter\Model;

class CompanyUserModel extends Model
{
    Protected $table = 'companyregister';

    Public function getUser($email, $password)
    {
        $companyregister = $this->db->table('companyregister')
                    ->where(array('email' => $email, 'password' => $password))
                    ->get()->getRowArray();
        return $companyregister;
    }
}
