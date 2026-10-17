<?php

namespace App\Models;

use CodeIgniter\Model;

class ContactModel extends Model
{
    protected $table = 'contacts';
    protected $primaryKey = 'id';

    protected $allowedFields = [
        'first_name',
        'last_name',
        'phone',
        'email',
        'address_line',
        'city',
        'postcode',
        'created_at'
    ];
}

?>