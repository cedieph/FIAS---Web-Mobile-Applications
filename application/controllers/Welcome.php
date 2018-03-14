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
	public function index()
	{
		$years = $this->admin->fetch('transactions');
		$year_arr = array();
		$month_arr = array();
		foreach($years as $y){
				$curr_y = date('Y',$y->tran_created_at);
				$curr_m = date('m',$y->tran_created_at);
				array_push($year_arr,$curr_y);
				array_push($month_arr,$curr_m);
		}
		$total_per_year = array_count_values($year_arr);
		$available_years = array_unique($year_arr);
		
		$total_per_month = array_count_values($month_arr);
		$available_months = array_unique($month_arr);
		
		echo 'Available Months<pre>';
		print_r($available_months);
		echo '</pre>';
		echo 'Available Years<pre>';
		print_r($available_years);
		echo '</pre>';
		echo 'Total Per Month<pre>';
		print_r($total_per_month);
		echo '</pre>';
		echo 'Total Per Year<pre>';
		print_r($total_per_year);
		echo '</pre>';
	
		$sum_per_year = array('years'=>array());
		$temp = 0;
		foreach($years as $y){
			$curr_y = date('Y',$y->tran_created_at);
			if($curr_y == '2016'){
				$temp += $y->tran_total_bill;
			}
			for($i = 0;$i < count($available_years);$i++){
				if($curr_y == $available_years[$i]){
					$sum = isset($sum_per_year['years'][$available_years[$i]]) ; 
					$sum_per_year['years'][$available_years[$i]] = $sum + $y->tran_total_bill;
				}	
			}
			// $available_years[$curr_y][];
		}

		echo 'Sum Per Year<pre>';
		print_r($sum_per_year);
		echo '</pre>';
		echo $temp;

	}
}
