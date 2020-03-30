<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard2 extends CI_Controller {

	public function index()
	{
		// File json yang akan dibaca (full path file)
		$file 			= "https://api.kawalcorona.com";
		$file_positif 	= "https://api.kawalcorona.com/positif";
		$file_sembuh 	= "https://api.kawalcorona.com/sembuh";
		$file_meninggal	= "https://api.kawalcorona.com/meninggal";
		$file_provinsi	= "https://api.kawalcorona.com/indonesia/provinsi";

		// Mendapatkan file json
		$anggota 			= file_get_contents($file);
		$anggota_positif 	= file_get_contents($file_positif);
		$anggota_sembuh 	= file_get_contents($file_sembuh);
		$anggota_meninggal 	= file_get_contents($file_meninggal);
		$anggota_provinsi 	= file_get_contents($file_provinsi);

		// Mendecode anggota.json
		$data['data'] 			= json_decode($anggota, true);
		$data['data_positif']   = json_decode($anggota_positif, true);
		$data['data_sembuh']   	= json_decode($anggota_sembuh, true);
		$data['data_meninggal'] = json_decode($anggota_meninggal, true);
		$data['data_provinsi']  = json_decode($anggota_provinsi, true);

		// echo "<pre>";
		// print_r($data['data_provinsi']);
		// die();
		// echo "</pre>";
		// foreach($data as $a1){
		// 	foreach($a1 as $a2){
		// 		foreach($a2 as $a3 => $val){
		// 			if($val['OBJECTID']==63){
		// 				echo $val['Country_Region'];
		// 			}
		// 		}
		// 	}
		// }

		// die();
		// Membaca data array menggunakan foreach
		$this->load->view('dashboard2', $data);
	}
}
