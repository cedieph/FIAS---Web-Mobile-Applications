<?php

class Accounts_model extends CI_Model {

    public function fetch($table, $where = NULL) {
        if (!empty($where)) {
            $this->db->where($where);
        }
        $query = $this->db->get($table);
        return ($query->num_rows() > 0 ) ? $query->result() : FALSE;
    }

    public function insert($table, $data) {
        $this->db->insert($table, $data);
        return $this->db->affected_rows();
    }

    public function insert_batch($table,$data){
        $this->db->insert_batch($table,$data);
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

    public function checkFoodList($food,$group = NULL){
        if(count($food) == 1)
            $this->db->not_like('name',$food[0]);
        else{
            for($i = 0; $i < count($food);$i++){
                $this->db->not_like('name',$food[$i]);
            }
        }

        if($group !== NULL)
            $this->db->not_like('group',$group);

        $query = $this->db->get('foodlist');
        return ($query->num_rows() > 0 ) ? $query->result() : FALSE;
    }

    public function getClassWithTrainer($class_id) {
        $this->db
            ->select('
                w.class_id AS class_id,
                w.class_name AS class_name,
                w.class_desc AS class_desc,
                w.img AS img,
                w.start_time AS start_time,
                w.end_time AS end_time,
                w.day AS day,
                w.status AS status,
                t.trainer_fname AS trainer_fname,
                t.trainer_lname AS trainer_lname
            ')
            ->from('class w')
            ->join('trainer t', 't.trainer_id = w.trainer_id')
            ->where('w.class_id', $class_id);
        $query = $this->db->get();
        return $query->num_rows() > 0 ? $query->result() : FALSE;
    }

}