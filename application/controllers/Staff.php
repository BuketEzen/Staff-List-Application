

<?php

class Staff extends CI_Controller{

        public function __construct() {
            parent::__construct();
            $this->load->model("Staff_model");
        }

        public function index(){
            
            $row=$this->Staff_model->get();
            $viewData=array('rows'=>$row);
            $this->load->view('stafflist',$viewData);
        }

        public function updatePage(){
            
            $id=$this->uri->segment(3);
            $row=$this->Staff_model->updatePage($id);
            //print_r($row);
            $viewData=array('row'=>$row);   
            $this->load->view('update',$viewData);
           

        }

        public function update($id){
           // $id=$this->input->post("id");
            
            $id=$this->uri->segment(3);
            $updateTitle=$this->input->post("inputtitle");
            $updateDetail=$this->input->post("inputdetail");
            
            $data=array(
                'title'=>$updateTitle,
                'detail'=>$updateDetail,
            );
            
            $update=$this->Staff_model->update($id,$data);
            
            if($update){
                redirect(base_url("staff"));
            }else{
                echo "Güncelleme işleminde hata";
            }
            

        }

        public function insertPage(){
            $this->load->view("insertPage");
            
        }

        public function insert(){
            
            $newtitle=$this->input->post("inputtitle");
            $newdetail=$this->input->post("inputdetail");

            $data=array(
                'title'=>$newtitle,
                'detail'=>$newdetail
            );
            $this->Staff_model->insert($data);
            echo "ekleme işlemi başarılı eklenen kişi";
            echo "<br>";
            echo $newtitle."  ".$newdetail;
        }
        
        public function delete($id){
            
            $delete=$this->Staff_model->delete($id);

        
            if($delete){
                redirect(base_url("staff"));
            }else{
                echo "Güncelleme işleminde hata";
            }
        }

}


?>