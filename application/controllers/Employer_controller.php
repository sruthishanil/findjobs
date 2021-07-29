<html>
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Employer_controller extends CI_Controller {

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


    public function emphome()
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
   	public function applied_list()
   	{
   		$d=$this->session->userdata('id');
   		$resp['dat']=$this->jobhunt_model->display_applied_emps($d);
   		$this->load->view('view_applied_emps.php',$resp);
   	}

 }
 ?>
 </html>