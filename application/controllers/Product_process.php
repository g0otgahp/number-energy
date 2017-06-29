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
		//กรอกประเภทของเบอร์
		$tmoney = "";
		$twork = "";
		$tcharm = "";
		$tluck = "";
		$twisdom = "";

			$money = array(
				'0' => 19, '1' => 91, '2' => 15, '3' => 51,
				'4' => 22,'5' => 23, '6' => 32, '7' => 24,
				'8' => 42, '9' => 26, '10' => 62, '11' => 28,
				'12' => 82, '13' => 29, '14' => 92, '15' => 36,
				'16' => 63, '17' => 46, '18' => 64, '19' => 65,
				'20' => 66, '21' => 69, '22' => 96, '23' => 78,
				'24' => 87, '25' => 35, '26' => 53, '27' => 16,
				'28' => 61, '29' => 47, '30' => 74,'31' => 89,
				'32' => 98, '33' => 19,'34' => 91,
			);

				$number = substr($this->input->post('product_number'),3);

				foreach ($money as $chk => $value) {
					if (preg_match("/($value)/", $number, $matches)) {
							$tmoney = "การเงิน ";
					}
				}

				$work = array(
					'0' => 35, '1' => 53, '2' => 16, '3' => 61,
					'4' => 47,'5' => 74, '6' => 36, '7' => 63,
					'8' => 89, '9' => 98, '10' => 19, '11' => 91,
				);

					$number = substr($this->input->post('product_number'),3);

					foreach ($work as $chk => $value) {
						if (preg_match("/($value)/", $number, $matches)) {
								$twork = "การงาน ";
						}
					}

					$luck = array(
						'0' => 19, '1' => 91, '2' => 29, '3' => 92,
						'4' => 39,'5' => 93, '6' => 49, '7' => 94,
						'8' => 59, '9' => 95, '10' => 69, '11' => 96,
						'12' => 89, '13' => 98, '14' => 78, '15' => 87,
						'16' => 99,
					);

						$number = substr($this->input->post('product_number'),3);

						foreach ($luck as $chk => $value) {
							if (preg_match("/($value)/", $number, $matches)) {
									$tluck = "โชคลาภ ";
							}
						}

						$charm = array(
							'0' => 19, '1' => 91, '2' => 15, '3' => 51,
							'4' => 22,'5' => 23, '6' => 32, '7' => 24,
							'8' => 42, '9' => 26, '10' => 62, '11' => 28,
							'12' => 82, '13' => 29, '14' => 92, '15' => 36,
							'16' => 63, '17' => 46, '18' => 64, '19' => 65,
							'20' => 66, '21' => 69, '22' => 96, '23' => 78,
							'23' => 87,
						);

							$number = substr($this->input->post('product_number'),3);

							foreach ($charm as $chk => $value) {
								if (preg_match("/($value)/", $number, $matches)) {
										$tcharm = "เสน่ห์ ";
								}
							}

							$wisdom = array(
								'0' => 15, '1' => 51, '2' => 35, '3' => 53,
								'4' => 45,'5' => 54, '6' => 55, '7' => 56,
								'8' => 65, '9' => 59, '10' => 95, '11' => 14,
								'12' => 41, '13' => 16, '14' => 61, '15' => 78,
								'16' => 87,
							);

								$number = substr($this->input->post('product_number'),3);

								foreach ($wisdom as $chk => $value) {
									if (preg_match("/($value)/", $number, $matches)) {
											$twisdom = "ปัญญา";
									}
								}

		// คำนวณราคาขายจากต้นทุน

		if ($this->input->post('product_cost') >= 0 && $this->input->post('product_cost') <= 1000) {
			$i = $this->input->post('product_cost')+1300;
			$price = $this->OOO($i);
		} elseif ($this->input->post('product_cost') >=1001 && $this->input->post('product_cost') <=1500 ) {
			$i = $this->input->post('product_cost')+1700;
			$price = $this->OOO($i);
		} elseif ($this->input->post('product_cost') >=1501 && $this->input->post('product_cost') <=2000 ) {
			$i = $this->input->post('product_cost')+1900;
			$price = $this->OOO($i);
		} elseif ($this->input->post('product_cost') >=2001 && $this->input->post('product_cost') <=2500 ) {
			$i = $this->input->post('product_cost')+2200;
			$price = $this->OOO($i);
		} elseif ($this->input->post('product_cost') >=2501 && $this->input->post('product_cost') <=3000 ) {
			$i = $this->input->post('product_cost')+2600;
			$price = $this->OOO($i);
		} elseif ($this->input->post('product_cost') >=3001 && $this->input->post('product_cost') <=4000 ) {
			$i = $this->input->post('product_cost')+3100;
			$price = $this->OOO($i);
		} elseif ($this->input->post('product_cost') >=4001 && $this->input->post('product_cost') <=5000 ) {
			$i = $this->input->post('product_cost')+3900;
			$price = $this->OOO($i);
		} elseif ($this->input->post('product_cost') >=5001 && $this->input->post('product_cost') <=6000 ) {
			$ii = $this->input->post('product_cost')+4600;
			$price = $this->OOO($i);
		} elseif ($this->input->post('product_cost') >=7001 && $this->input->post('product_cost') <=8000 ) {
			$i = $this->input->post('product_cost')+5500;
			$price = $this->OOOO($i);
		} elseif ($this->input->post('product_cost') >=8001 && $this->input->post('product_cost') <=9000 ) {
			$i = $this->input->post('product_cost')+6000;
			$price = $this->OOOO($i);
		} elseif ($this->input->post('product_cost') >=9001 && $this->input->post('product_cost') <=10000 ) {
			$i = $this->input->post('product_cost')+7500;
			$price = $this->OOOO($i);
		} elseif ($this->input->post('product_cost') >=10001 && $this->input->post('product_cost') <=15000 ) {
			$i = $this->input->post('product_cost')+9000;
			$price = $this->OOOO($i);
		} elseif ($this->input->post('product_cost') >=15001 && $this->input->post('product_cost') <=20000 ) {
			$i = $this->input->post('product_cost')+10500;
			$price = $this->OOOO($i);
		} elseif ($this->input->post('product_cost') >=20001 && $this->input->post('product_cost') <=25000 ) {
			$i = $this->input->post('product_cost')+12000;
			$price = $this->OOOO($i);
		} elseif ($this->input->post('product_cost') >=25001 && $this->input->post('product_cost') <=30000 ) {
			$i = $this->input->post('product_cost')+14000;
			$price = $this->OOOO($i);
		} elseif ($this->input->post('product_cost') >=30001 && $this->input->post('product_cost') <=35000 ) {
			$i = $this->input->post('product_cost')+16000;
			$price = $this->OOOO($i);
		} elseif ($this->input->post('product_cost') >=35001 && $this->input->post('product_cost') <=40000 ) {
			$i = $this->input->post('product_cost')+18000;
			$price = $this->OOOO($i);
		} elseif ($this->input->post('product_cost') >=40001 && $this->input->post('product_cost') <=50000 ) {
			$i = $this->input->post('product_cost')+20000;
			$price = $this->OOOO($i);
		} elseif ($this->input->post('product_cost') >=50001 && $this->input->post('product_cost') <=100000 ) {
			$i = $this->input->post('product_cost')+30000;
			if ($i <100000) {
				$price = $this->OOOO($i);
			} else {
				$price = $this->OOOOO($i);
			}
		} elseif ($this->input->post('product_cost') >100000) {
			$i = $this->input->post('product_cost')+40000;
			if ($i <1000000) {
				$price = $this->OOOOO($i);
			} else {
				$price = $this->OOOOOO($i);
			}
		}

		$input = array(
			'product_mobile_network' => $this->input->post('product_mobile_network'),
			'product_number' => $this->input->post('product_number'),
			'product_cost' => $this->input->post('product_cost'),
			'product_sale' => $price,
			'product_agent' => $this->input->post('product_agent'),
			'product_type' => $tmoney.$twork.$tcharm.$tluck.$twisdom,
			'product_date' => date('Y-m-d'),
			'product_time' => date('H:i:s'),
			'product_note' => $this->input->post('product_note'),
		);

		$TrashNumber = array(
			'0' => 0, '1' => 11, '2' => 12, '3' => 21,
			'4' => 13,'5' => 31, '6' => 17, '7' => 71,
			'8' => 18, '9' => 81, '10' => 25, '11' => 52,
			'12' => 27, '13' => 72, '14' => 33, '15' => 34,
			'16' => 43, '17' => 37, '18' => 73, '19' => 38,
			'20' => 83, '21' => 48, '22' => 84, '23' => 57,
			'24' => 75, '25' => 58, '26' => 85, '27' => 67,
			'28' => 76, '29' => 68, '30' => 86,'31' => 88,
		);

			$number = substr($input['product_number'],3);

			foreach ($TrashNumber as $chk => $value) {
				if (preg_match("/($value)/", $number, $matches)) {
						$input['product_status'] = 2;
				}
			}

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
			'product_note' => $this->input->post('product_note'),
			// 'product_type' => $this->input->post('product_type'),
			// 'product_status' => $this->input->post('product_status'),
		);

		// if ($input['product_status'] ==0) {
		// 	$input['product_date_sale'] = date('Y-m-d');
		// }

		$this->Product_model->product_update($input);
		redirect('Admin/product_list');
	}

	public function product_detail_update()
	{
		date_default_timezone_set('Asia/Bangkok');
		$input = array(
			'product_id' => $this->input->post('product_id'),
			'product_note' => $this->input->post('product_note'),
		);
		$this->Product_model->product_update($input);
		redirect('Admin/product_detail/'.$input['product_id']);
	}

	public function product_payment()
	{
		date_default_timezone_set('Asia/Bangkok');
		$input = array(
			'product_id' => $this->input->post('product_id'),
			'product_status' => 4,
		);
		$this->Product_model->product_update($input);

		$input = array(
			'log_date' => date('Y-m-d H:i:s'),
			'log_product_id' => $this->input->post('product_id'),
			'log_customer_id' => $this->input->post('customer_id'),
			'log_employee_id' => $this->input->post('employee_id'),
			'log_status' => 4,
		);

		$this->Product_model->product_book($input);

		$account = array(
			'account_date' => date('Y-m-d'),
			'account_type' => 1,
			'account_category' => 1,
			'account_detail' => "ขายเบอร์มือถือ",
			'account_quantity' => $this->input->post('product_sale'),
		);

		$this->Account_model->account_insert($account);
		redirect('Admin/product_detail/'.$input['log_product_id']);
	}

	public function product_cancle()
	{
		date_default_timezone_set('Asia/Bangkok');
		$product_id = $this->uri->segment(3);
		$customer_id = $this->uri->segment(4);;
		$employee_id = $this->uri->segment(5);;
		$input = array(
			'product_id' => $product_id,
			'product_status' => 1,
		);
		$this->Product_model->product_update($input);

		$input = array(
			'log_date' => date('Y-m-d H:i:s'),
			'log_product_id' => $product_id,
			'log_customer_id' => $customer_id,
			'log_employee_id' => $employee_id,
			'log_status' => 99,
		);
		$this->Product_model->product_book($input);
		redirect('Admin/product_list/');
	}

	public function product_book()
	{
		$input_status = array(
			'product_id' => $this->input->post('product_id'),
			'product_status' => 3,
		);
		$this->Product_model->product_update($input_status);

		date_default_timezone_set('Asia/Bangkok');
		$input = array(
			'log_date' => date('Y-m-d H:i:s'),
			'log_product_id' => $this->input->post('product_id'),
			'log_customer_id' => $this->input->post('customer_id'),
			'log_employee_id' => $this->input->post('employee_id'),
			'log_status' => 3,
		);

		$this->Product_model->product_book($input);
		redirect('Admin/product_detail/'.$input_status['product_id']);
	}

	public function product_upload()
	{
		date_default_timezone_set('Asia/Bangkok');
		$pathinfo = pathinfo($_FILES["product_data_upload"]["name"],PATHINFO_EXTENSION);
		if ($pathinfo != "csv") {
			echo "<script>alert('ไฟล์สกุลไม่ถูกต้อง')</script>";
			echo "<meta http-equiv='refresh' content='0; url=../admin/product_import' />";
			exit();
		}
		$new_file = date('YmdHis').".".$pathinfo;
		move_uploaded_file($_FILES["product_data_upload"]["tmp_name"],"file/csv/".$new_file); // Copy/Upload CSV

		$file = fopen("file/csv/".$new_file,"r");
		// $i = 0;
		while(! feof($file))
  	{
			$objArr = (fgetcsv($file));

			//กรอกประเภทของเบอร์
			$tmoney = "";
			$twork = "";
			$tcharm = "";
			$tluck = "";
			$twisdom = "";

				$money = array(
					'0' => 19, '1' => 91, '2' => 15, '3' => 51,
					'4' => 22,'5' => 23, '6' => 32, '7' => 24,
					'8' => 42, '9' => 26, '10' => 62, '11' => 28,
					'12' => 82, '13' => 29, '14' => 92, '15' => 36,
					'16' => 63, '17' => 46, '18' => 64, '19' => 65,
					'20' => 66, '21' => 69, '22' => 96, '23' => 78,
					'24' => 87, '25' => 35, '26' => 53, '27' => 16,
					'28' => 61, '29' => 47, '30' => 74,'31' => 89,
					'32' => 98, '33' => 19,'34' => 91,
				);

					$number = substr($objArr[1],3);

					foreach ($money as $chk => $value) {
						if (preg_match("/($value)/", $number, $matches)) {
								$tmoney = "การเงิน ";
						}
					}

					$work = array(
						'0' => 35, '1' => 53, '2' => 16, '3' => 61,
						'4' => 47,'5' => 74, '6' => 36, '7' => 63,
						'8' => 89, '9' => 98, '10' => 19, '11' => 91,
					);

						$number = substr($objArr[1],3);

						foreach ($work as $chk => $value) {
							if (preg_match("/($value)/", $number, $matches)) {
									$twork = "การงาน ";
							}
						}

						$luck = array(
							'0' => 19, '1' => 91, '2' => 29, '3' => 92,
							'4' => 39,'5' => 93, '6' => 49, '7' => 94,
							'8' => 59, '9' => 95, '10' => 69, '11' => 96,
							'12' => 89, '13' => 98, '14' => 78, '15' => 87,
							'16' => 99,
						);

							$number = substr($objArr[1],3);

							foreach ($luck as $chk => $value) {
								if (preg_match("/($value)/", $number, $matches)) {
										$tluck = "โชคลาภ ";
								}
							}

							$charm = array(
								'0' => 19, '1' => 91, '2' => 15, '3' => 51,
								'4' => 22,'5' => 23, '6' => 32, '7' => 24,
								'8' => 42, '9' => 26, '10' => 62, '11' => 28,
								'12' => 82, '13' => 29, '14' => 92, '15' => 36,
								'16' => 63, '17' => 46, '18' => 64, '19' => 65,
								'20' => 66, '21' => 69, '22' => 96, '23' => 78,
								'23' => 87,
							);

								$number = substr($objArr[1],3);

								foreach ($charm as $chk => $value) {
									if (preg_match("/($value)/", $number, $matches)) {
											$tcharm = "เสน่ห์ ";
									}
								}

								$wisdom = array(
									'0' => 15, '1' => 51, '2' => 35, '3' => 53,
									'4' => 45,'5' => 54, '6' => 55, '7' => 56,
									'8' => 65, '9' => 59, '10' => 95, '11' => 14,
									'12' => 41, '13' => 16, '14' => 61, '15' => 78,
									'16' => 87,
								);

									$number = substr($objArr[1],3);

									foreach ($wisdom as $chk => $value) {
										if (preg_match("/($value)/", $number, $matches)) {
												$twisdom = "ปัญญา";
										}
									}

			// คำนวณราคาขายจากต้นทุน

			if ($objArr[2] >= 0 && $objArr[2] <= 1000) {
				$i = $objArr[2]+1300;
				$price = $this->OOO($i);
			} elseif ($objArr[2] >=1001 && $objArr[2] <=1500 ) {
				$i = $objArr[2]+1700;
				$price = $this->OOO($i);
			} elseif ($objArr[2] >=1501 && $objArr[2] <=2000 ) {
				$i = $objArr[2]+1900;
				$price = $this->OOO($i);
			} elseif ($objArr[2] >=2001 && $objArr[2] <=2500 ) {
				$i = $objArr[2]+2200;
				$price = $this->OOO($i);
			} elseif ($objArr[2] >=2501 && $objArr[2] <=3000 ) {
				$i = $objArr[2]+2600;
				$price = $this->OOO($i);
			} elseif ($objArr[2] >=3001 && $objArr[2] <=4000 ) {
				$i = $objArr[2]+3100;
				$price = $this->OOO($i);
			} elseif ($objArr[2] >=4001 && $objArr[2] <=5000 ) {
				$i = $objArr[2]+3900;
				$price = $this->OOO($i);
			} elseif ($objArr[2] >=5001 && $objArr[2] <=6000 ) {
				$ii = $objArr[2]+4600;
				$price = $this->OOO($i);
			} elseif ($objArr[2] >=7001 && $objArr[2] <=8000 ) {
				$i = $objArr[2]+5500;
				$price = $this->OOOO($i);
			} elseif ($objArr[2] >=8001 && $objArr[2] <=9000 ) {
				$i = $objArr[2]+6000;
				$price = $this->OOOO($i);
			} elseif ($objArr[2] >=9001 && $objArr[2] <=10000 ) {
				$i = $objArr[2]+7500;
				$price = $this->OOOO($i);
			} elseif ($objArr[2] >=10001 && $objArr[2] <=15000 ) {
				$i = $objArr[2]+9000;
				$price = $this->OOOO($i);
			} elseif ($objArr[2] >=15001 && $objArr[2] <=20000 ) {
				$i = $objArr[2]+10500;
				$price = $this->OOOO($i);
			} elseif ($objArr[2] >=20001 && $objArr[2] <=25000 ) {
				$i = $objArr[2]+12000;
				$price = $this->OOOO($i);
			} elseif ($objArr[2] >=25001 && $objArr[2] <=30000 ) {
				$i = $objArr[2]+14000;
				$price = $this->OOOO($i);
			} elseif ($objArr[2] >=30001 && $objArr[2] <=35000 ) {
				$i = $objArr[2]+16000;
				$price = $this->OOOO($i);
			} elseif ($objArr[2] >=35001 && $objArr[2] <=40000 ) {
				$i = $objArr[2]+18000;
				$price = $this->OOOO($i);
			} elseif ($objArr[2] >=40001 && $objArr[2] <=50000 ) {
				$i = $objArr[2]+20000;
				$price = $this->OOOO($i);
			} elseif ($objArr[2] >=50001 && $objArr[2] <=100000 ) {
				$i = $objArr[2]+30000;
				if ($i <100000) {
					$price = $this->OOOO($i);
				} else {
					$price = $this->OOOOO($i);
				}
			} elseif ($objArr[2] >100000) {
				$i = $objArr[2]+40000;
				if ($i <1000000) {
					$price = $this->OOOOO($i);
				} else {
					$price = $this->OOOOOO($i);
				}
			}

			//เพิ่ม Import
			$input = array(
				'import_round' => $this->input->post('product_round'),
				'import_network_id' => $objArr[0],
				'import_number' => $objArr[1],
				'import_cost' => $objArr[2],
				'import_price' => $price,
				'import_agent_id' => $this->input->post('agent'),
				'import_product_type' => $tmoney.$twork.$tcharm.$tluck.$twisdom,
			);

			if ($input['import_number'] !='') {
				$this->Product_model->import_insert($input);
			}
  	}

		fclose($file);

		//บันทึกรอบ
		$import_round = array(
			'round_round' => $this->input->post('product_round'),
			'round_datetime' => date('Y-m-d H:i:s'),
		);
		$this->Product_model->round_insert($import_round);

		redirect('Admin/product_import');
	}

	//1,000 ตัดเศษ 100
	public function OOO($data)
	{
		if (substr($data,2) == 0) {
			$n = $data;
		} else {
			$i = substr($data,0,2)+1;
			$n = $i."00";
		}
		return $n;
	}
	//10,000 ตัดเศษ 1,000
	public function OOOO($data)
	{
		if (substr($data,2) == 0) {
			$n = $data;
		} else {
			$i = substr($data,0,2)+1;
			$n = $i."000";
		}
		return $n;
	}
	//100,000 ตัดเศษ 10,000
	public function OOOOO($data)
	{
		if (substr($data,3) == 0) {
			$n = $data;
		} else {
			$i = substr($data,0,3)+1;
			$n = $i."000";
		}
		return $n;
	}
	//1,000,000 ตัดเศษ 10,000
	public function OOOOOO($data)
	{
		if (substr($data,3) == 0) {
			$n = $data;
		} else {
			$i = substr($data,0,3)+1;
			$n = $i."0000";
		}
		return $n;
	}

	public function import_accept()
	{
		date_default_timezone_set('Asia/Bangkok');
		$import = $this->db
		->where('import_status',0)
		->get('dmn_import_tmp')
		->result_array();

		foreach ($import as $row) {

			$input = array(
				'product_round' => $row['import_round'],
				'product_mobile_network' => $row['import_network_id'],
				'product_number' => $row['import_number'],
				'product_cost' => $row['import_cost'],
				'product_sale' => $row['import_price'],
				'product_agent' => $row['import_agent_id'],
				'product_date' => date('Y-m-d'),
				'product_time' => date('H:i:s'),
				'product_type' => $row['import_product_type'],
			 );

			 $TrashNumber = array(
				'0' => 0, '1' => 11, '2' => 12, '3' => 21,
	 			'4' => 13,'5' => 31, '6' => 17, '7' => 71,
	 			'8' => 18, '9' => 81, '10' => 25, '11' => 52,
	 			'12' => 27, '13' => 72, '14' => 33, '15' => 34,
	 			'16' => 43, '17' => 37, '18' => 73, '19' => 38,
	 			'20' => 83, '21' => 48, '22' => 84, '23' => 57,
	 			'24' => 75, '25' => 58, '26' => 85, '27' => 67,
	 			'28' => 76, '29' => 68, '30' => 86,'31' => 88,
			 );

				 $number = substr($input['product_number'],3);

				 foreach ($TrashNumber as $chk => $value) {
					 if (preg_match("/($value)/", $number, $matches)) {
							 $input['product_status'] = 2;
					 }
				 }

			$status['import_status'] = 1;
			$this->db->insert('dmn_product',$input);
			$this->db->where('import_id',$row['import_id'])->update('dmn_import_tmp',$status);
		}

		redirect('Admin/product_list');
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

	public function salary_config_update()
	{
		$input = array(
			'dmn_salary_id' => $this->input->post('dmn_salary_id'),
			'dmn_salary_day' => $this->input->post('dmn_salary_day'),
			'dmn_salary_time' => $this->input->post('dmn_salary_time'),
			'dmn_salary_comission' => $this->input->post('dmn_salary_comission'),
		);
		$this->Homepage_model->salary_config_update($input);
		redirect('Admin/salary_config');
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

	public function product_requiment()
	{
		$product_id = $this->uri->segment(3);
		$requiment = $this->uri->segment(4);
		$input = array(
			'product_id' => $product_id,
			'product_requiment' => $requiment,
		);
		$this->Product_model->product_update($input);
		redirect('Admin/product_list');
	}

}
