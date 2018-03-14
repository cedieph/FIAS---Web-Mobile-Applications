<?php

class Admin_model extends CI_Model {

    public function fetchReport() {
        $this->db
            ->select('
                c.id AS class_id,
                c.class_name AS class_name,
                c.day AS day,
                c.status AS class_status,
                c.start_time AS start_time,
                c.end_time AS end_time,
                CONCAT(t.trainer_fname, " ", t.trainer_lname) AS trainer_name,
                t.status AS trainer_status,
                cs.status AS classes_status,
                c.remove_status AS remove_status,
                c.status AS class_status
            ')
            ->from('class c')
            ->join('classes cs', 'cs.id = c.classes_id')
            ->join('trainer t', 't.id = c.trainer_id')
            ->where('c.status !=', -1)
            ->where('c.remove_status != 1')
            ->where('cs.status !=', 0);

        $query = $this->db->get();
        return $query->num_rows() > 0 ? $query->result() : FALSE;
    }

    public function fetchReportUnavailable() {
        $this->db
            ->select('
                c.id AS class_id,
                c.class_name AS class_name,
                c.day AS day,
                c.status AS class_status,
                c.start_time AS start_time,
                c.end_time AS end_time,
                CONCAT(t.trainer_fname, " ", t.trainer_lname) AS trainer_name,
                t.status AS trainer_status,
                cs.status AS classes_status,
                c.status AS class_status
            ')
            ->from('class c')
            ->join('classes cs', 'cs.id = c.classes_id')
            ->join('trainer t', 't.id = c.trainer_id')
            ->where('t.status !=', 1);

        $query = $this->db->get();
        return $query->num_rows() > 0 ? $query->result() : FALSE;
    }

    public function fetch($table, $where = NULL, $order = NULL) {
        if (!empty($where)) {
            $this->db->where($where);
        }
        if($order !== NULL){
            $this->db->order_by($order,'DESC');
        }
        $query = $this->db->get($table);
        return ($query->num_rows() > 0 ) ? $query->result() : FALSE;
    }

    public function fetch_distinct($table,$where){
        $this->db->distinct($where);
        $query = $this->db->get($table);
        return ($query->num_rows() > 0 ) ? $query->result() : FALSE;
    }
    public function insert($table, $data) {
        $this->db->insert($table, $data);
        return $this->db->affected_rows();
    }

    public function update($table, $data, $where = NULL) {
        if (!empty($where)) {
            $this->db->where($where);
        }
        $this->db->update($table, $data);
        return $this->db->affected_rows();
    }

    public function delete($table, $where = NULL) {
        if (!empty($where)) {
            $this->db->where($where);
        }
        return $this->db->delete($table);
    }

    public function getLogs(){
        $this->db->select('log');
    }


    
}