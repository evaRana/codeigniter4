<?php
namespace App\Models\Api;

use CodeIgniter\Model;

class User_model extends Model
{
    protected $db;

    public function __construct()
    {
        parent::__construct();
        $this->db = \Config\Database::connect();
    }

    // fetch single record
    public function get_single_record(string $table, array $where = [], string $select = '*')
    {
        $builder = $this->db->table($table);
        $builder->select($select);

        if (!empty($where)) {
            $builder->where($where);
        }

        return $builder->get()->getRowArray();
    }

    // fetch multiple records
    public function get_records(string $table, array $where = [], string $select = '*')
    {
        $builder = $this->db->table($table);
        $builder->select($select);

        if (!empty($where)) {
            $builder->where($where);
        }

        return $builder->get()->getResultArray();
    }
}
