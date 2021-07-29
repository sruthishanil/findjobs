<?php
class jobhunt_model extends CI_model
{
	function search_job($dat)
	{
      // $this->db->select('*');
      // $this->db->from('job_register');
      // $this->db->like('job_title','$dat[key]');


      // $this->db->like('job_type','$dat[cat]');
      // $this->db->like('location','$dat[loc]');
      //$query=$this->db->get();

		$query=$this->db->query("select * from job_register where job_title like '%$dat[key]%' or job_type like '%$dat[cat]%' or location like '%$dat[loc]%' ");
		
      return $query->result();

	}
	function upload_candidate($data)
	{
		 $this->db->insert('candidate_tb',$data);
        return true;
	}

	function saverecords($data)
	{
        $this->db->insert('jobseekers',$data);
        return true;
	}
	function login($dat)
	{
		
		$que=$this->db->query("select * from jobseekers where first_name='$dat[name]' and password='$dat[password]' ");
		return $que;
	}
	function savecontact($data)
	{
		$this->db->insert('contact_tb',$data);
		return true;
	}
	function company_details($data)
	{
		$this->db->insert('employer',$data);
        return true;
	}
	function company_login($dat)
	{
		$qry=$this->db->query("select * from employer where Company_name='$dat[name]' and Password='$dat[password]' ");
		return $qry;	
	}
	function insertjob($data)
	{
		$this->db->insert('job_register',$data);
		return true;
	}
	function display_jobs($d)
	{

		$query=$this->db->query("select * from job_register where Company_id='$d' ");
		return $query->result();
	}
	function emp_jobs_disp($spcify)
	{
		//$query=$this->db->query("select * from job_register where qualification='$spcify' ");
		$this->db->select('*');
		$this->db->from('employer');
		$this->db->join('job_register','employer.id = job_register.Company_id');
		$this->db->where('job_register.qualification= "'.$spcify.'"');
		$query = $this->db->get();
		return $query->result();
	}
	function specify_company($cid)
	{
		$query=$this->db->query("select * from employer where id='$cid' ");
		return $query->result();
	}
	function jobdetails($jobid)
	{
		$this->db->select('*');
		$this->db->from('employer');
		$this->db->join('job_register','employer.id = job_register.Company_id');
		$this->db->where('job_register.id= "'.$jobid.'"');
		$query = $this->db->get();
		return $query->result();

	}
	function chk_applied($jobid)
	{
		$empid=$this->session->userdata('id');
		$qry=$this->db->query("select * from applied_employees where Job_id='$jobid' and employee_id='$empid' ");
		return $qry;
	}
	function ap_job_dtls($job_id)
	{
		$query=$this->db->query("select last_date from job_register where id='$job_id' ");
		return $query;

	}
	function apply_jobdetails($job_id)
	{
		$emid=$this->session->userdata('id');
		$data['employee_id']=$this->session->userdata('id');
		$q=$this->db->query("select Company_id from job_register where id='$job_id' ");
		$data['Employer_id']=$q->row()->Company_id;
		$data['	Job_id']=$job_id;
		//$qr=$this->db->query("insert into")
		$this->db->insert('applied_employees',$data);
		return true;

		//$qry=$this->db->query("select * from applied_employees where Job_id='$job_id' and employee_id='$emid' ");
		//return $qry->result();
	 }
	function profile($id)
	{

		$query=$this->db->query("select * from employee_datas where jobseeker_id='$id' ");
		return $query;
		// $query=$this->db->query("select * from employee_datas where jobseeker_id='$id' ");
		// if($query->num_rows()>0)
		// {
		// 	$this->db->select('*');
		//     $this->db->from('employee_datas');
		//     $this->db->join('jobseekers','employee_datas.jobseeker_id = jobseekers.id');
		//     $this->db->where('jobseekers.id= "'.$id.'"');
		//     $query = $this->db->get();
		//     return $query->result();
		// }
		// else
		// {
		// 	$query=$this->db->query("select * from jobseekers where id='$id' ");
		// 	return $query->result();
		// }
	}
	function employee_datass($data)
	{

		$this->db->insert('employee_datas',$data);
        return true;


	}
	function edit_data($id)
	{
		
		$query=$this->db->query("select * from jobseekers,employee_datas where jobseekers.id='$id' and  employee_datas.jobseeker_id='$id' ");
		return $query->result();
	}
	function update_employee($upd)
	{
		$eid=$this->session->userdata('id');
		$query=$this->db->query("update jobseekers SET experience='$upd[experience]', qualification='$upd[qualification]' where id='$eid' ");
		$query=$this->db->query("update employee_datas SET age='$upd[age]', gender='$upd[gender]', place='$upd[place]', address='$upd[address]', marital_status='$upd[marital_status]', skills='$upd[skills]' where jobseeker_id='$eid' ");
		return true;

	}



	function display_applied_emps($d)
	{
		// $query=$this->db->query("select * from applied_employees where Employer_id='$d'  ");
		// $d['r']=$query->result();
		// $i=1;
		// foreach ($r as $row) {

		// 	$emp=$row->employee_id;
		// 	$jid=$row->Job_id;
		// }
		$this->db->select('*');
		$this->db->from('applied_employees');
		$this->db->join('job_register','applied_employees.Job_id = job_register.id');
		$this->db->join('jobseekers','applied_employees.employee_id = jobseekers.id');
		$this->db->where('applied_employees.Employer_id= "'.$d.'"');
		$query = $this->db->get();
		return $query->result();

		//return $query->result();
	}

}

?>