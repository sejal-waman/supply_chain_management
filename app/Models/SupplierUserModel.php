<?php

namespace App\Models;

use CodeIgniter\Model;

class SupplierUserModel extends Model
{
    Protected $table = 'supplierregister';

    Public function getUser($email, $password)
    {
        $supplierregister = $this->db->table('supplierregister')
                    ->where(array('email' => $email, 'password' => $password))
                    ->get()->getRowArray();
        return $supplierregister;
    }

}
