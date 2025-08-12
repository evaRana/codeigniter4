<?php

namespace App\Models\Admin;

use CodeIgniter\Model;

class AdminModel extends Model
{
    protected $table; // Will be set dynamically
    protected $primaryKey = 'id';
    protected $returnType = 'array';
    protected $allowedFields = [];

    public function setTableName($table)
    {
        $this->table = $table;

        // Optional: fetch allowed fields dynamically
        $this->allowedFields = $this->db->getFieldNames($table);

        return $this;
    }

    public function get_records($where = [], $select = '*', $limit = null, $orderBy = null)
    {
        $builder = $this->db->table($this->table)->select($select);

        if (!empty($where)) {
            $builder->where($where);
        }

        if (!empty($orderBy)) {
            $builder->orderBy(...$orderBy);
        }

        if (!empty($limit)) {
            $builder->limit($limit);
        }

        return $builder->get()->getResultArray();
    }

    public function get_single_record($where = [], $select = '*')
    {
        return $this->db->table($this->table)
            ->select($select)
            ->where($where)
            ->get()
            ->getRowArray();
    }

    public function insert_data($data)
    {
        return $this->db->table($this->table)->insert($data);
    }

    public function update_data($where, $data)
    {
        return $this->db->table($this->table)->where($where)->update($data);
    }

    public function delete_data($where)
    {
        return $this->db->table($this->table)->where($where)->delete();
    }
}
