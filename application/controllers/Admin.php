<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {


	public function __construct()
	{
			parent::__construct();
			@session_start();
			if(@$_SESSION['dmn_user_id']==""){
				redirect('login/index');
			}
	}
	public function index()
	{
		// $data['CountToday'] = $this->Account_model->account_count_today();
		// $data['CountOrder'] = $this->Account_model->account_count_order();
		// $data['CountMember'] = $this->Account_model->account_count_member();
		$data['MaxDay'] = $this->Account_model->MaxDay();
		$data['SaleOrder'] = $this->Account_model->account_count_saleorder();
		$data['mobile_network'] = $this->Product_model->mobile_network_list();
		$data['product'] = $this->Product_model->product_list_saled();

		$data['page'] = "admin/index";
		$this->load->view('admin/theme',$data);
	}
	#กิจกรรมและโปรโมชั่น
	public function actipromo_list()
	{
		$data['actipromo'] = $this->Actipromo_model->actipromo_list();

		$data['page'] = "admin/actipromo_list";
		$this->load->view('admin/theme',$data);
	}
	public function actipromo_insert()
	{
		$data['page'] = "admin/actipromo_insert";
		$this->load->view('admin/theme',$data);
	}
	public function actipromo_update()
	{
		$actipromo_id = $this->uri->segment(3);
		$data['actipromo'] = $this->Actipromo_model->actipromo_detail($actipromo_id);

		$data['page'] = "admin/actipromo_update";
		$this->load->view('admin/theme',$data);
	}
	public function actipromo_delete()
	{
		$actipromo_id = $this->uri->segment(3);
		$this->Actipromo_model->actipromo_delete($actipromo_id);
		echo "<script>alert('ทำรายการลบข้อมูลเรียบร้อยแล้ว')</script>";
		echo "<meta http-equiv='refresh' content='0; url=../actipromo_list' />";
	}

	#ลูกค้า
	public function customer_list()
	{
		$data['customer'] = $this->Customer_model->customer_list();

		$data['page'] = "admin/customer_list";
		$this->load->view('admin/theme',$data);
	}
	public function customer_insert()
	{
		$data['relate'] = $this->Customer_model->relate_list();

		$data['page'] = "admin/customer_insert";
		$this->load->view('admin/theme',$data);
	}
	public function customer_update()
	{
		$customer_id = $this->uri->segment(3);
		$data['customer'] = $this->Customer_model->customer_detail($customer_id);
		$data['relate'] = $this->Customer_model->relate_list();

		$data['page'] = "admin/customer_update";
		$this->load->view('admin/theme',$data);
	}
	public function customer_delete()
	{
		$customer_id = $this->uri->segment(3);
		$this->Customer_model->customer_delete($customer_id);
		echo "<script>alert('ทำรายการลบข้อมูลเรียบร้อยแล้ว')</script>";
		echo "<meta http-equiv='refresh' content='0; url=../customer_list' />";
	}

	#ตัวแทน
	public function agent_list()
	{
		$data['agent'] = $this->Agent_model->agent_list();
		$data['page'] = "admin/agent_list";
		$this->load->view('admin/theme',$data);
	}
	public function agent_insert()
	{
		$data['page'] = "admin/agent_insert";
		$this->load->view('admin/theme',$data);
	}
	public function agent_update()
	{
		$agent_id = $this->uri->segment(3);
		$data['agent'] = $this->Agent_model->agent_detail($agent_id);

		$data['page'] = "admin/agent_update";
		$this->load->view('admin/theme',$data);
	}
	public function agent_delete()
	{
		$agent_id = $this->uri->segment(3);
		$this->Agent_model->agent_delete($agent_id);
		echo "<script>alert('ทำรายการลบข้อมูลเรียบร้อยแล้ว')</script>";
		echo "<meta http-equiv='refresh' content='0; url=../agent_list' />";
	}

	#พนักงาน
	public function employees_list()
	{
		$data['employees'] = $this->Employees_model->employees_list();

		$data['page'] = "admin/employees_list";
		$this->load->view('admin/theme',$data);
	}
	public function employees_insert()
	{
		$data['level'] = $this->Employees_model->level_list();

		$data['page'] = "admin/employees_insert";
		$this->load->view('admin/theme',$data);
	}
	public function employees_update()
	{
		$secretcode = $this->uri->segment(3);
		$data['employees'] = $this->Employees_model->employees_detail($secretcode);
		$data['level'] = $this->Employees_model->level_list();

		$data['page'] = "admin/employees_update";
		$this->load->view('admin/theme',$data);
	}
	public function employees_delete()
	{
		$secretcode = $this->uri->segment(3);
		$this->Employees_model->employees_delete($secretcode);
		$this->Employees_model->user_delete($secretcode);
		echo "<script>alert('ทำรายการลบข้อมูลเรียบร้อยแล้ว')</script>";
		echo "<meta http-equiv='refresh' content='0; url=../employees_list' />";
	}

	#บัญชีรายรับรายจ่าย
	public function account_list()
	{
		$data['account'] = $this->Account_model->account_list();

		$data['page'] = "admin/account_list";
		$this->load->view('admin/theme',$data);
	}
	public function account_insert()
	{
		$data['page'] = "admin/account_insert";
		$this->load->view('admin/theme',$data);
	}
	public function get_account_category()
	{
		$account_category_type = $this->input->post('account_type');
		$account_category = $this->Account_model->get_account_category($account_category_type);

		echo '<option value="">--- เลือกรายการ ---</option>';
		foreach ($account_category as $account_category) {
            echo '<option value="'.$account_category['account_category_id'].'">'.$account_category['account_category_list'].'</option>';
    }
	}
	public function account_detail()
	{
		$account_id = $this->uri->segment(3);
		$data['account'] = $this->Account_model->account_detail($account_id);

		$data['page'] = "admin/account_detail";
		$this->load->view('admin/theme',$data);
	}
	public function account_delete()
	{
		$account_id = $this->uri->segment(3);
		$this->Account_model->account_delete($account_id);
		echo "<script>alert('ทำรายการลบข้อมูลเรียบร้อยแล้ว')</script>";
		echo "<meta http-equiv='refresh' content='0; url=../account_list' />";
	}
	public function account_category_list()
	{
		$data['account_category'] = $this->Account_model->account_category_list();

		$data['page'] = "admin/account_category_list";
		$this->load->view('admin/theme',$data);
	}
	public function account_category_insert()
	{
		$data['page'] = "admin/account_category_insert";
		$this->load->view('admin/theme',$data);
	}
	public function account_category_update()
	{
		$account_category_id = $this->uri->segment(3);
		$data['account_category'] = $this->Account_model->account_category_detail($account_category_id);

		$data['page'] = "admin/account_category_update";
		$this->load->view('admin/theme',$data);
	}
	public function account_category_delete()
	{
		$account_category_id = $this->uri->segment(3);
		$this->Account_model->account_category_delete($account_category_id);
		echo "<script>alert('ทำรายการลบข้อมูลเรียบร้อยแล้ว')</script>";
		echo "<meta http-equiv='refresh' content='0; url=../account_category_list' />";
	}

	#เครือข่ายมือถือ
	public function mobile_network_list()
	{
		$data['mobile_network'] = $this->Product_model->mobile_network_list();
		$data['page'] = "admin/mobile_network_list";
		$this->load->view('admin/theme',$data);
	}
	public function mobile_network_insert()
	{
		$data['page'] = "admin/mobile_network_insert";
		$this->load->view('admin/theme',$data);
	}
	public function mobile_network_update()
	{
		$mobile_network_id = $this->uri->segment(3);
		$data['mobile_network'] = $this->Product_model->mobile_network_detail($mobile_network_id);

		$data['page'] = "admin/mobile_network_update";
		$this->load->view('admin/theme',$data);
	}
	public function mobile_network_delete()
	{
		$mobile_network_id = $this->uri->segment(3);
		$this->Product_model->mobile_network_delete($mobile_network_id);
		echo "<script>alert('ทำรายการลบข้อมูลเรียบร้อยแล้ว')</script>";
		echo "<meta http-equiv='refresh' content='0; url=../mobile_network_list' />";
	}

	#สินค้า
	public function product_list()
	{
		$data['product'] = $this->Product_model->product_list();
		$data['trash'] = $this->Product_model->product_trash_list();
		$data['page'] = "admin/product_list";
		$this->load->view('admin/theme',$data);
	}
	public function product_insert()
	{
		$data['mobile_type'] = $this->Homepage_model->Product_Type();
		$data['mobile_network'] = $this->Product_model->mobile_network_list();
		$data['agent'] = $this->Agent_model->agent_list();

		$data['page'] = "admin/product_insert";
		$this->load->view('admin/theme',$data);
	}
	public function product_update()
	{
		$product_id = $this->uri->segment(3);
		$data['product'] = $this->Product_model->product_detail($product_id);
		$data['mobile_network'] = $this->Product_model->mobile_network_list();
		$data['mobile_type'] = $this->Homepage_model->Product_Type();
		$data['agent'] = $this->Agent_model->agent_list();

		$data['page'] = "admin/product_update";
		$this->load->view('admin/theme',$data);
	}
	public function product_delete()
	{
		$product_id = $this->uri->segment(3);
		$this->Product_model->product_delete($product_id);
		echo "<script>alert('ทำรายการลบข้อมูลเรียบร้อยแล้ว')</script>";
		echo "<meta http-equiv='refresh' content='0; url=../product_list' />";
	}
	public function product_import()
	{
		$data['round'] = $this->Product_model->round_count();
		$data['import_round'] = $this->Product_model->import_round($data['round']);
		$data['mobile_network'] = $this->Product_model->mobile_network_list();
		$data['Import'] = $this->Product_model->import_list();

		$data['page'] = "admin/product_import";
		$this->load->view('admin/theme',$data);
	}


	#ประเภทของเบอร์
	public function product_type_list()
	{
		$data['Product_Type'] = $this->Product_model->product_type_list();
		$data['page'] = "admin/product_type_list";
		$this->load->view('admin/theme',$data);
	}
	public function product_type_insert()
	{
		$data['page'] = "admin/product_type_insert";
		$this->load->view('admin/theme',$data);
	}
	public function product_type_update()
	{
		$product_type_id = $this->uri->segment(3);
		$data['Product_Type'] = $this->Product_model->product_type_detail($product_type_id);

		$data['page'] = "admin/product_type_update";
		$this->load->view('admin/theme',$data);
	}
	public function product_type_delete()
	{
		$product_type_id = $this->uri->segment(3);
		$this->Product_model->product_type_delete($product_type_id);
		echo "<script>alert('ทำรายการลบข้อมูลเรียบร้อยแล้ว')</script>";
		echo "<meta http-equiv='refresh' content='0; url=../product_type_list' />";
	}

	#ตั้งค่าทั่วไป
	public function general_config()
	{
		$data['Config'] = $this->Homepage_model->General_config();
		$data['page'] = "admin/general_config";
		$this->load->view('admin/theme',$data);
	}

	#ตั้งค่าเกี่ยวกับเรา
	public function abountus_config()
	{
		$data['Abountus'] = $this->Homepage_model->Abountus();
		$data['page'] = "admin/abountus_config";
		$this->load->view('admin/theme',$data);
	}

	#การจัดการบทความ
	public function contents_list()
	{
		$data['contents'] = $this->Homepage_model->Story_List();
		$data['page'] = "admin/contents_list";
		$this->load->view('admin/theme',$data);
	}
	public function contents_insert()
	{
		$data['page'] = "admin/contents_insert";
		$this->load->view('admin/theme',$data);
	}
	public function contents_update()
	{
		$id = $this->uri->segment(3);
		$data['contents'] = $this->Homepage_model->Story_By_Id($id);

		$data['page'] = "admin/contents_update";
		$this->load->view('admin/theme',$data);
	}

	public function contents_delete()
	{
		$id = $this->uri->segment(3);
		$this->Product_model->contents_delete($id);
		echo "<script>alert('ทำรายการลบข้อมูลเรียบร้อยแล้ว')</script>";
		echo "<meta http-equiv='refresh' content='0; url=../contents_list' />";
	}

}
