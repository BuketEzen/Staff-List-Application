
<?php

    Class Staff_model extends CI_Model{

            public function index(){
                echo "index";
            }

            public function get(){
                $row=$this->db->get('staff')->result();
                return $row;
            }

            public function updatePage($id){
                $row=$this
                    ->db
                    ->where("id",$id)
                    ->get("staff")
                    ->row();
                return $row;
            }

            public function update($id,$data){
                $update=$this->db->where('id',$id)->update('staff',$data);;
                return $update;
            }

            public function insert($data){
                $insert=$this->db->insert('staff',$data);
                return $insert;
            }
          
            public function delete($id){
                $delete=$this->db->where('id', $id)->delete('staff');
                return $delete;
                
            }

  }

?>