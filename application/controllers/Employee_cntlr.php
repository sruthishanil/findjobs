<html>
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Employee_cntlr extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function __construct()
	{
     	parent::__construct();
     	$this->load->model('jobhunt_model');
     }

    
    public function edit_profile()
    {
    	$id=$this->session->userdata('id');

    	$edit=$this->jobhunt_model->profile($id);
    	if($edit->num_rows()>0)
    	{
    		$edt['data']=$this->jobhunt_model->edit_data($id);
    	  		
    	   $this->load->view('edit_profile',$edt);
         if($this->input->post('update'))
          {
            $upd['gender']=$this->input->post('gender');
            $upd['place']=$this->input->post('place');
            $upd['address']=$this->input->post('address');
            $upd['age']=$this->input->post('age');
            $upd['marital_status']=$this->input->post('Marital');
            $upd['experience']=$this->input->post('experience');
            $upd['qualification']=$this->input->post('qualification');
            $upd['skills']=$this->input->post('skills');
            $response=$this->jobhunt_model->update_employee($upd);
            if ($response== true)
            { 
              ?>
      
             <script type="text/javascript">
              window.alert("Updated your data successfully !");  
                
             </script>
      
             <?php  
              $edt['data']=$this->jobhunt_model->edit_data($id);
            
              $this->load->view('edit_profile',$edt);
            }
            else
              {?>
      
             <script type="text/javascript">
              window.alert("updation error !");  
                
             </script>
      
             <?php  
            }
          }

    	}
    	else
    	{
    		
    		$this->load->view('complete_profile');
    		
    	
   
    
    	 if($this->input->post('save'))
   	 		{

    		  $data['jobseeker_id']=$id;
   	    	$data['	age']=$this->input->post('age');
   	    	$data['gender']=$this->input->post('gender');
   	    	$data['place']=$this->input->post('place');
   	    	$data['address']=$this->input->post('address');
   	    	$data['marital_status']=$this->input->post('marry');
   	    	$data['skills']=$this->input->post('skills');
   	    	//$data['resume']=$this->file('resume');
   	    	//print_r($data);
   	    	$response=$this->jobhunt_model->employee_datass($data);
			     if($response==true)
				    {?>
			
			       <script type="text/javascript">
				      window.alert("send message successfully !");  
        		    
			       </script>
			
			       <?php	
               //redirect('Welcome/index', 'refresh');
				
			       }

			     else
			       {
				        echo "insertion error";
			       }
		      }
	    }

    }
    // public function photo($k)
    //    {
    //           $config['upload_path'] = './uploads/';
    //           $config['allowed_types'] = 'gif|jpg|png';
    //           $config['max_size'] = '3000';
    //           $config['max_width']  = '3000';
    //           $config['max_height']  = '2500';  

    //           $this->load->library('upload', $config);

    // if ( ! $this->upload->do_upload())
    // {
    //   $error = array('error' => $this->upload->display_errors());
    //          print_r($error);

    //       // $this->load->view('Upload', $error);
    // }
    // else
    // {
    //   $image_path = $this->upload->data();
    //   print_r($image_path);

    //       $img=$image_path['file_name'];
    //       print_r($img);
      
    //       $data= 'uploads/'.$img; 
    //       return $data;   
    //    }
    //  }
     public function file($k)
   	    {
   	    	$config['upload_path']    = './uploads/';
   	    	$config['allowed_type']   = 'gif|jpg|png|txt';
   	    	$config['max_size']       = '10000';
   	    	$config['max_width']      = '10240';
   	    	$config['max_height']     = '76800';

   	    	$this->load->library('upload',$config);
   	    	if(! $this->upload->do_upload($k))
   	    	{
   	    		$error = array('error' => $this->upload->display_errors());
   	    		$this->load->view('upload_form', $error);
   	    	}
   	    	else
   	    	{
   	    		$image_path = $this->upload->data();
   	    		$photo = $image_path['file_name'];
   	    		return base_url().'uploads/'.$photo;
   	    	 }
   	    }

   	public function emp_log_comanydata($cid)
   	{
   		$cmpdata['datas']=$this->jobhunt_model->specify_company($cid);
   		$this->load->view('specify_comp_data',$cmpdata);
   	}
   	public function emp_log_jobdetails($jobid)
   	{ 
      $result=$this->jobhunt_model->chk_applied($jobid);
      if($result->num_rows()>0)
        { 
          $jb=1;
        }
        else
        {
          $jb=0;
        }
   		$jobdata['dts']=$this->jobhunt_model->jobdetails($jobid);
   		$this->load->view('applyjob',$jobdata,$jb);
     
   	}
   	public function apply_job_form($job_id)
   	{
   		$result=$this->jobhunt_model->ap_job_dtls($job_id);
				if($result->num_rows()>0)
				{ 
					$ds=$result->row()->last_date;
					//echo $ds;
				}
		//echo $ds;
		$ts   =  new DateTime($ds);
		$t   =  new DateTime('today');		
		if($ts < $t)
			{
				?>
				<script type="text/javascript">
				window.alert("you cant apply for this job! exceed the last date ");  
        		//alert(true);
			</script>
			<?php
			}
			else
			{
				?>
				<script type="text/javascript">
				window.alert("confirm apply the job ");  
        		//alert(true);
				</script>
				<?php

					//$res['jdata']=$this->jobhunt_model->apply_jobdetails($job_id);
				    //$this->load->view('apply_jform',$res);
					$response=$this->jobhunt_model->apply_jobdetails($job_id);
					$this->load->view('apply_jform');
			}
   	}
}
?>
</html>