<?php

class Mcrud extends CI_Model {
    public function get_items($id = FALSE, $table, $idIdentity) {
        if ($id === FALSE) {
            $query = $this->db->get($table);
            return $query->result();
        }

        $query = $this->db->get_where($table, array($idIdentity => $id));
        return $query->row_array();
    }

    public function create_item($data, $table) {
        return $this->db->insert($table, $data);
    }

    public function update_item($id, $data, $table, $idIdentity) {
        $this->db->where($idIdentity, $id);
        return $this->db->update($table, $data);
    }

    public function delete_item($id, $table) {
        $this->db->where('id', $id);
        return $this->db->delete($table);
    }

    public function generate_id($table) {
        // Count all records in the table
        $count = $this->db->count_all($table);

        // Increment the count by 1 to get the next sequence number
        // $sequence = str_pad($count + 1, 4, '0', STR_PAD_LEFT);
        $sequence = $count + 1;

        // Generate the custom ID format: Prefix-Year-Month-Sequence
        // $prefix = $identity; // Replace with your desired prefix
        // $year = date('y');
        // $month = date('m');
        // $customId = $prefix . "-" . $year . $month . $sequence;
        $customId = $sequence;

        return $customId;
    }
}