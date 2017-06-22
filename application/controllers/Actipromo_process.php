<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Actipromo_process extends CI_Controller {


	public function __construct()
	{
			parent::__construct();
			@session_start();
			if(@$_SESSION['dmn_user_id']==""){
				redirect('login/index');
			}
	}
	public function actipromo_insert()
	{
		if(trim($_FILES["actipromo_image"]["tmp_name"])!="")
		{
			// $pathinfo = pathinfo($_FILES["actipromo_image"]["name"],PATHINFO_EXTENSION);
			// $images = $_FILES["actipromo_image"]["tmp_name"];
			// $new_images = "dmn".date('YmdHis').".".$pathinfo;
			// //copy($_FILES["actipromo_image"]["tmp_name"],"images/actipromo/".$_FILES["actipromo_image"]["name"]);
			// $width=500; //*** Fix Width & Heigh (Autu caculate) ***//
			// $size=GetimageSize($images);
			// $height=round($width*$size[1]/$size[0]);
			// $images_orig = ImageCreateFromJPEG($images);
			// $photoX = ImagesX($images_orig);
			// $photoY = ImagesY($images_orig);
			// $images_fin = ImageCreateTrueColor($width, $height);
			// ImageCopyResampled($images_fin, $images_orig, 0, 0, 0, 0, $width+1, $height+1, $photoX, $photoY);
			// ImageJPEG($images_fin,"images/actipromo/".$new_images);
			// ImageDestroy($images_orig);
			// ImageDestroy($images_fin);

			$pathinfo = pathinfo($_FILES["actipromo_image"]["name"],PATHINFO_EXTENSION);
			$new_file = date('YmdHis').".".$pathinfo;
			move_uploaded_file($_FILES["actipromo_image"]["tmp_name"],"images/actipromo/".$new_file); // Copy/Upload รูปถาพ

		}
		$input = array(
			'actipromo_type' => $this->input->post('actipromo_type'),
			'actipromo_image' => $new_file,
			'actipromo_name' => $this->input->post('actipromo_name'),
			'actipromo_title' => $this->input->post('actipromo_title'),
			'actipromo_subtitle' => $this->input->post('actipromo_subtitle'),
			'actipromo_detail' => $this->input->post('actipromo_detail'),
			'actipromo_date' => $this->input->post('actipromo_date'),
			'actipromo_date_end' => $this->input->post('actipromo_date_end'),
		);

		$this->Actipromo_model->actipromo_insert($input);
		redirect('Admin/actipromo_list');
	}
	public function actipromo_update()
	{
		if(trim($_FILES["actipromo_image"]["tmp_name"])!="")
		{
			// $pathinfo = pathinfo($_FILES["actipromo_image"]["name"],PATHINFO_EXTENSION);
			// $images = $_FILES["actipromo_image"]["tmp_name"];
			// $new_images = "dmn".date('YmdHis').".".$pathinfo;
			//copy($_FILES["actipromo_image"]["tmp_name"],"images/actipromo/".$_FILES["actipromo_image"]["name"]);
			// $width=500; //*** Fix Width & Heigh (Autu caculate) ***//
			// $size=GetimageSize($images);
			// $height=round($width*$size[1]/$size[0]);
			// $images_orig = ImageCreateFromJPEG($images);
			// $photoX = ImagesX($images_orig);
			// $photoY = ImagesY($images_orig);
			// $images_fin = ImageCreateTrueColor($width, $height);
			// ImageCopyResampled($images_fin, $images_orig, 0, 0, 0, 0, $width+1, $height+1, $photoX, $photoY);
			// ImageJPEG($images_fin,"images/actipromo/".$new_images);
			// ImageDestroy($images_orig);
			// ImageDestroy($images_fin);

			$pathinfo = pathinfo($_FILES["actipromo_image"]["name"],PATHINFO_EXTENSION);
			$new_file = date('YmdHis').".".$pathinfo;
			move_uploaded_file($_FILES["actipromo_image"]["tmp_name"],"images/actipromo/".$new_file); // Copy/Upload รูปถาพ

			$input = array(
				'actipromo_id' => $this->input->post('actipromo_id'),
				'actipromo_type' => $this->input->post('actipromo_type'),
				'actipromo_image' => $new_file,
				'actipromo_name' => $this->input->post('actipromo_name'),
				'actipromo_title' => $this->input->post('actipromo_title'),
				'actipromo_subtitle' => $this->input->post('actipromo_subtitle'),
				'actipromo_detail' => $this->input->post('actipromo_detail'),
				'actipromo_date' => $this->input->post('actipromo_date'),
				'actipromo_date_end' => $this->input->post('actipromo_date_end'),
			);
		}else{
			$input = array(
				'actipromo_id' => $this->input->post('actipromo_id'),
				'actipromo_type' => $this->input->post('actipromo_type'),
				'actipromo_name' => $this->input->post('actipromo_name'),
				'actipromo_title' => $this->input->post('actipromo_title'),
				'actipromo_subtitle' => $this->input->post('actipromo_subtitle'),
				'actipromo_detail' => $this->input->post('actipromo_detail'),
				'actipromo_date' => $this->input->post('actipromo_date'),
				'actipromo_date_end' => $this->input->post('actipromo_date_end'),
			);
		}
		$this->Actipromo_model->actipromo_update($input);
		redirect('Admin/actipromo_list');
	}



}
