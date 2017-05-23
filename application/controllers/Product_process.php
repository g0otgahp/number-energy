<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Product_process extends CI_Controller {


	public function __construct()
	{
			parent::__construct();
			@session_start();
			if(@$_SESSION['dmn_user_id']==""){
				redirect('login/index');
			}
	}
	public function mobile_network_insert()
	{
		if (!empty($_FILES["network_img_upload"]["name"])) {
			$pathinfo = pathinfo($_FILES["network_img_upload"]["name"],PATHINFO_EXTENSION);
			$new_file = date('YmdHis').".".$pathinfo;
			move_uploaded_file($_FILES["network_img_upload"]["tmp_name"],"images/networklogo/".$new_file); // Copy/Upload รูปถาพ
		} else {
			$new_file = "no_pic.png";
		}

		$input = array(
			'mobile_network_code' => $this->input->post('mobile_network_code'),
			'mobile_network_name' => $this->input->post('mobile_network_name'),
			'mobile_network_pic' => $new_file,
		);
		$this->Product_model->mobile_network_insert($input);
		redirect('Admin/mobile_network_list');
	}
	public function mobile_network_update()
	{
		if (!empty($_FILES["network_img_upload"]["name"])) {
			$pathinfo = pathinfo($_FILES["network_img_upload"]["name"],PATHINFO_EXTENSION);
			$new_file = date('YmdHis').".".$pathinfo;
			move_uploaded_file($_FILES["network_img_upload"]["tmp_name"],"images/networklogo/".$new_file); // Copy/Upload รูปถาพ
		} else {
			$new_file = $this->input->post('mobile_network_pic');
		}

		$input = array(
			'mobile_network_id' => $this->input->post('mobile_network_id'),
			'mobile_network_code' => $this->input->post('mobile_network_code'),
			'mobile_network_name' => $this->input->post('mobile_network_name'),
			'mobile_network_pic' => $new_file,

		);
		$this->Product_model->mobile_network_update($input);
		redirect('Admin/mobile_network_list');
	}

	public function product_insert()
	{
		date_default_timezone_set('Asia/Bangkok');

		$input = array(
			'product_mobile_network' => $this->input->post('product_mobile_network'),
			'product_number' => $this->input->post('product_number'),
			'product_cost' => $this->input->post('product_cost'),
			'product_sale' => $this->input->post('product_sale'),
			'product_agent' => $this->input->post('product_agent'),
			'product_type' => $this->input->post('product_type'),
			'product_date' => date('Y-m-d'),
			'product_time' => date('H:i:s'),
		);

		$this->Product_model->product_insert($input);
		redirect('Admin/product_list');
	}
	public function product_update()
	{
		date_default_timezone_set('Asia/Bangkok');
		$input = array(
			'product_id' => $this->input->post('product_id'),
			'product_mobile_network' => $this->input->post('product_mobile_network'),
			'product_number' => $this->input->post('product_number'),
			'product_cost' => $this->input->post('product_cost'),
			'product_sale' => $this->input->post('product_sale'),
			'product_agent' => $this->input->post('product_agent'),
			'product_type' => $this->input->post('product_type'),
			'product_date' => date('Y-m-d'),
			'product_time' => date('H:i:s'),
		);
		$this->Product_model->product_update($input);
		redirect('Admin/product_list');
	}
	public function product_upload()
	{
		date_default_timezone_set('Asia/Bangkok');
		$pathinfo = pathinfo($_FILES["product_data_upload"]["name"],PATHINFO_EXTENSION);
		$new_file = date('YmdHis').".".$pathinfo;
		move_uploaded_file($_FILES["product_data_upload"]["tmp_name"],"file/csv/".$new_file); // Copy/Upload CSV

		$file = fopen("file/csv/".$new_file,"r");
		// $i = 0;
		while(! feof($file))
  	{
			$objArr = (fgetcsv($file));

			//กรอกประเภทของเบอร์
			$type = 1;
			$subtype	= 2;





			//เพิ่ม Import
			$input = array(
				'import_round' => $this->input->post('product_round'),
				'import_network_id' => $objArr[0],
				'import_number' => $objArr[1],
				'import_cost' => $objArr[2],
				'import_price' => $objArr[3],
				'import_agent_id' => $objArr[4],
				'import_product_type' => $type,
				'import_product_subtype' => $subtype,
			);
			if ($input['import_network_id'] !='') {
				$this->Product_model->import_insert($input);
			}
  	}

		fclose($file);

		date_default_timezone_set('Asia/Bangkok');
		$import_round = array(
			'round_round' => $this->input->post('product_round'),
			'round_datetime' => date('Y-m-d H:i:s'),
		);
		$this->Product_model->round_insert($import_round);

		// unset($input[$i-1]);
		// echo "<pre>";
		// print_r($input);
		// exit();
		// move_uploaded_file($_FILES["product_data_upload"]["tmp_name"],"file/csv/".$_FILES["product_data_upload"]["name"]); // Copy/Upload CSV
		//
		// //$objConnect = mysql_connect("localhost","root","root") or die("Error Connect to Database"); // Conect to MySQL
		// //$objDB = mysql_select_db("mydatabase");
		//
		// $objCSV = fopen($_FILES["product_data_upload"]["name"],"r");
		// while(($objArr = fgetcsv($objCSV,20,","))!==FALSE){
		// 	// $strSQL = "INSERT INTO customer ";
		// 	// $strSQL .="(CustomerID,Name,Email,CountryCode,Budget,Used) ";
		// 	// $strSQL .="VALUES ";
		// 	// $strSQL .="('".$objArr[0]."','".$objArr[1]."','".$objArr[2]."' ";
		// 	// $strSQL .=",'".$objArr[3]."','".$objArr[4]."','".$objArr[5]."') ";
		// 	// $objQuery = mysql_query($strSQL);
		// 	echo $objArr[0];
		// }
		// fclose($objCSV);
		//
		// echo "Upload & Import Done.";
		redirect('Admin/product_import');
	}

	public function remove_import()
	{
		$id = $this->uri->segment(3);
		$this->db->where('import_round',$id)->delete('dmn_import_tmp');
		$this->db->where('round_round',$id)->delete('dmn_round');
		redirect('Admin/product_import');
	}

	public function remove_import_by_id()
	{
	  $id = $this->uri->segment(3);
		$round = $this->uri->segment(4);
	  $this->db->where('import_id',$id)->delete('dmn_import_tmp');

		$query = $this->db
		->where('import_round',$round)
		->get('dmn_import_tmp')
		->num_rows();
		if ($query == 0) {
			$this->db->where('round_round',$round)->delete('dmn_round');
		}
		redirect('Admin/product_import');
	}

	public function product_type_insert()
	{

		$input = array(
			'product_type_name' => $this->input->post('product_type_name'),
		);
		$this->Product_model->product_type_insert($input);
		redirect('Admin/product_type_list');
	}

	public function product_type_update()
	{
		$input = array(
			'product_type_id' => $this->input->post('product_type_id'),
			'product_type_name' => $this->input->post('product_type_name'),
		);
		$this->Product_model->product_type_update($input);
		redirect('Admin/product_type_list');
	}

	public function general_config_update()
	{
		if (!empty($_FILES["general_config_pic"]["name"])) {
			$pathinfo = pathinfo($_FILES["general_config_pic"]["name"],PATHINFO_EXTENSION);
			$new_file = date('YmdHis').".".$pathinfo;
			move_uploaded_file($_FILES["general_config_pic"]["tmp_name"],"images/bg/".$new_file); // Copy/Upload รูปถาพ
		} else {
			$new_file = $this->input->post('general_config_pic');
		}

		if (!empty($_FILES["admin_pic"]["name"])) {
			$pathinfo = pathinfo($_FILES["admin_pic"]["name"],PATHINFO_EXTENSION);
			$admin_file = date('YmdHis').".".$pathinfo;
			move_uploaded_file($_FILES["admin_pic"]["tmp_name"],"theme/assets/images/".$admin_file); // Copy/Upload รูปถาพ
		}  else {
			$admin_file = $this->input->post('admin_pic');
		}

		$input = array(
			'general_config_id' => $this->input->post('general_config_id'),
			'general_config_txt_top' => $this->input->post('general_config_txt_top'),
			'general_config_txt_bot' => $this->input->post('general_config_txt_bot'),
			'general_config_pic' => $new_file,
			'general_config_admin_pic' => $admin_file,

		);
		$this->Homepage_model->General_config_update($input);
		echo "<script>alert('แก้ไขข้อมูลเรียบร้อยแล้ว')</script>";
		redirect('Admin/general_config');
	}

	public function contents_insert()
	{
		$input = $this->input->post();
		$this->Product_model->contents_insert($input);
		redirect('Admin/contents_list');
	}

	public function contents_update()
	{
		$input = $this->input->post();
		$this->Product_model->contents_update($input);
		redirect('Admin/contents_list');
	}

	public function abountus_update()
	{
		$input = $this->input->post();
		$this->Product_model->abountus_update($input);
		redirect('Admin/abountus_config');
	}

}
