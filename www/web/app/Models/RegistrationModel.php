<?php

namespace App\Models;

use CodeIgniter\Model;

class RegistrationModel extends Model
{
    protected $table            = ['registrations', 'accounts', 'profile'];
    protected $useAutoIncrement = false;
    protected $allowedFields    = ['registrations.email', 'accounts.email', 'accounts.password',
        'profile.fullname', 'profile.phone', 'registrations.id', 'accounts.id', 'profile.id'];
    protected $primaryKey       = ['registrations.id, accounts.id, profile.id'];
    protected $returnType       = 'array';

    // Dates
    protected $useTimestamps    = false;
    protected $dateFormat       = 'datetime';
    protected $createdField     = 'created_at';
    protected $updatedField     = 'updated_at';

    // Validation
    protected $validationRules      = false;
    protected $validationMessages   = false;
    protected $skipValidation       = false;
    protected $cleanValidationRules = true;

    // Callbacks
    protected $allowCallbacks       = true;
    protected $beforeInsert         = [];
    protected $afterInsert          = [];
    protected $beforeUpdate         = [];
    protected $afterUpdate          = [];
    protected $beforeFind           = [];
    protected $afterFind            = [];
    protected $beforeDelete         = [];
    protected $afterDelete          = [];
}