<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_data extends CI_Model
{
    public function getdata($id)
    {
        return $this->db->get_where('datajemaat', ['id' => $id])->row_array();
    }
}
