<html>
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

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
	public function index()
	{

		$this->load->view('index');
	}
	public function searchs()
	{
		$dat['key']=$this->input->post('keywords');
		$dat['loc']=$this->input->post('location');
		$dat['cat']=$this->input->post('category');
		$result['data']=$this->jobhunt_model->search_job($dat);
		$this->load->view('search_result',$result);


	}
	public function cvupload()
	{
		$data['name']=$this->input->post('Name');
		$data['email']=$this->input->post('Email');
		$data['phone_no']=$this->input->post('Phone');
		$data['comment']=$this->input->post('Message');
		$data['status']=$this->input->post('status');
		//$data['cv']=$this->input->post('fileselect');
		//$data['cv']=$this->input->file('fileselect');
		 $config['upload_path']          = './uploads/';
                $config['allowed_types']        = 'gif|jpg|png|txt';
                $config['max_size']             = 100;
                $config['max_width']            = 1024;
                $config['max_height']           = 768;

                $this->load->library('upload', $config);

                if ( ! $this->upload->do_upload('fileselect'))
                {
                        $error = array('error' => $this->upload->display_errors());

                        $this->load->view('upload_form', $error);
                }
                else
                {
                        $image_path = array('upload_data' => $this->upload->data());

                       // $this->load->view('upload_success', $data);
                			//$image_path = $this->upload->data();
                			$cvs = $image_path['file_name'];
                			$data['cv']=base_url().'uploads/'.$cvs;
                }

		$re=$this->jobhunt_model->upload_candidate($data);
		if($re==true)
			{
			?>
		
			<script type="text/javascript">
				window.alert("Registered successfully !");  
        		//alert(true);
			</script>
			
			<?php	
				
				$this->load->view('index');


			}
			else
			{
				echo "insertion error";
			}


	}
	
	public function logins()
	{
		if($this->input->post('logs'))
		{
			$dat['type']=$this->input->post('type');
			$dat['name']=$this->input->post('uname');
			$dat['password']=$this->input->post('pswd');
			if($dat['type']=='Employee')
			{
				$result=$this->jobhunt_model->login($dat);
				if($result->num_rows()>0)
				{ 
					$this->session->set_userdata("id",$result->row()->id);
					$this->session->set_userdata("name",$result->row()->first_name);
					
					$spcify=$result->row()->qualification;
					
					$re['dt']=$this->jobhunt_model->emp_jobs_disp($spcify);
					$this->load->view('employee_login.php',$re);
				}
				else
				{
					echo "not matching error";
				}
			}
			else
			{
				$result=$this->jobhunt_model->company_login($dat);
				if($result->num_rows()>0)
				{ 
					$this->session->set_userdata("id",$result->row()->id);
					$this->session->set_userdata("name",$result->row()->Company_name);
					$this->load->view('company_login.php');
				}
				else
				{
					echo "not matching error";
				}

			}
		}

	}
	public function registration()
   {

			$this->load->view('register.php');

   		if($this->input->post('save'))

		{

   	    $data['first_name']=$this->input->post('fname');
   	    $data['last_name']=$this->input->post('lname');
   	    $data['phone_no']=$this->input->post('phone');
   	    $data['email']=$this->input->post('email');
   	    $data['password']=$this->input->post('password');
   	    $data['experience']=$this->input->post('experience');
   	    $data['qualification']=$this->input->post('qualification');
   	    // $data['resume']=$this->file('resume');
   	    $response=$this->jobhunt_model->saverecords($data);
			if($response==true)
			{
			?>
		
			<script type="text/javascript">
				window.alert("Registered successfully !");  
        		//alert(true);
			</script>
			
			<?php	
				
				$this->load->view('index');


			}
			else
			{
				echo "insertion error";
			}
		}
   }
   public function emp_register()
   {
   	 
		$this->load->view('employer_register.php');
		if($this->input->post('save'))

		{

   	    $data['Company_name']=$this->input->post('company_name');
   	    $data['	Phone_no']=$this->input->post('phone_no');
   	    $data['Company_email']=$this->input->post('company_email');
   	    $data['Location']=$this->input->post('location');
   	    $data['Category']=$this->input->post('category');
   	    $data['Password']=$this->input->post('password');
   	    //$data['resume']=$this->file('resume');
   	    $response=$this->jobhunt_model->company_details($data);
			if($response==true)
			{
			
				echo '<script>alert("You Have Successfully Registered Company!");</script>';
               redirect('Welcome/index', 'refresh');
				
			}

			else
			{
				echo "insertion error";
			}
		}

	}
	public function logout()
   {
   	  // $this->session->session_destroy();
   	  $this->session->unset_userdata('id');
   	  $this->session->unset_userdata('name');
   	  $this->load->view('index.php');
   }
   public function aboutus()
   {
   	 $this->load->view('about_us.php');
   }
   public function contactus()
   {
   	 $this->load->view('contact_us.php');
   	 if($this->input->post('save'))
   	 {
   	 	$data['name']=$this->input->post('Name');
   	    $data['email']=$this->input->post('Email');
   	    $data['phone_no']=$this->input->post('Phone_no');
   	    $data['message']=$this->input->post('Message');
   	    $resp=$this->jobhunt_model->savecontact($data);
			if($resp==true)
			{   
			?>
			
			<script type="text/javascript">
				window.alert("send message successfully !");  
        		//alert(true);
			</script>
			
			<?php	
				// echo "inserted successfully";
				$this->load->view('index.php');
				
				

			}
			else
			{
				echo "insertion error";
			}
			
   	 }
   }
   //    resume upload...............//////////////////////////////////////////////////

   // public function file($k)
   // 	    {
   // 	    	$config['upload_path']    = './uploads/';
   // 	    	$config['allowed_type']   = 'gif|jpg|png|txt';
   // 	    	$config['max_size']       = '10000';
   // 	    	$config['max_width']      = '10240';
   // 	    	$config['max_height']     = '76800';

   // 	    	$this->load->library('upload',$config);
   // 	    	if(! $this->upload->do_upload($k))
   // 	    	{
   // 	    		$error = array('error' => $this->upload->display_errors());
   // 	    		$this->load->view('upload_form', $error);
   // 	    	}
   // 	    	else
   // 	    	{
   // 	    		$image_path = $this->upload->data();
   // 	    		$photo = $image_path['file_name'];
   // 	    		return base_url().'uploads/'.$photo;
   // 	    	 }
   // 	    }

// This is employer section.......................///////////////////////

 /*  	public function emphome()
   	{
   		$this->load->view('company_login.php');
   	}
   	public function post_job()
   	{
   		$this->load->view('post_job_form.php');
   		if($this->input->post('savejob'))
		{
			$data['Company_id']=$this->session->userdata('id');
   	    	$data['job_title']=$this->input->post('jobtitle');
   	    	$data['job_type']=$this->input->post('jobtype');
   	    	$data['work_experience']=$this->input->post('experience');
   	    	$data['qualification']=$this->input->post('qualification');
   	    	$data['salary_range']=$this->input->post('salary');
   	    	$data['no_of_post']=$this->input->post('no_ofpost');
   	    	$data['age_limit']=$this->input->post('age_limit');
   	    	$data['skills_required']=$this->input->post('skills');
   	    	$data['location']=$this->input->post('location');
   	    	$data['job_specification']=$this->input->post('specification');
   	    	$data['post_date']=$this->input->post('post_date');
   	    	$data['last_date']=$this->input->post('last_date');
   	    	 $resp=$this->jobhunt_model->insertjob($data);
			if($resp==true)
			{   
			?>
			
			<script type="text/javascript">
				window.alert("send message successfully !");  
        		//alert(true);
			</script>
			
			<?php	
				// echo "inserted successfully";
				$this->load->view('index.php');
				
				

			}
			else
			{
				echo "insertion error";
			}
   		}
   	}
   
   	public function view_post_job()
   	{
   		$d=$this->session->userdata('id');
   		$resp['dat']=$this->jobhunt_model->display_jobs($d);
   		$this->load->view('View_posted_job.php',$resp);
   	}
*/
// end of employersection....................//////////////


//employee section ........................../////////////



 /*  	public function emp_log_comanydata($cid)
   	{
   		$cmpdata['datas']=$this->jobhunt_model->specify_company($cid);
   		$this->load->view('specify_comp_data',$cmpdata);
   	}
   	public function emp_log_jobdetails($jobid)
   	{
   		$jobdata['dts']=$this->jobhunt_model->jobdetails($jobid);
   		$this->load->view('applyjob',$jobdata);
   	}
   	public function apply_job_form($job_id)
   	{
   		$result=$this->jobhunt_model->ap_job_dtls($job_id);
				if($result->num_rows()>0)
				{ 
					$ds=$result->row()->last_date;
					echo $ds;
				}
		echo $ds;
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
				$this->load->view('apply_jform',$result);
			}
   	}*/

}
?>
</html>