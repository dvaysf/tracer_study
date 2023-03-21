<?php
defined('BASEPATH') or exit('No direct script access allowed');

class m_yusuf extends CI_Model
{
    public function detailAlumni()
    {
        $this->db->select('*');
        $this->db->from('alumni');
        $this->db->join('tracer', 'tracer.id = alumni.id');
        $this->db->where('tracer.id', null);

        $detail = $this->db->get()->row_array();
    }
}
