<?php

class Calc extends CI_Controller
{

	private $list = array();

	public function get_list()
	{
		return $this->list;
	}

	public function __construct()
	{
		parent::__construct();

		$this->load->model('map' , 'map');
	}

	private function _program()
	{
		if( $this->input->post('origin_data'))
		{
			$nt = $this->input->post('origin_data');

			$nt = preg_replace('/[.]/', '', $nt);

			$data = str_split( $nt , 1);

			foreach ($data as $key => $value) {
				$data[$key] = floatval( $value);
			}

			if( count( $data) === 6)
			{
				$this->list = $data;

				return $this->list;
			}else
			{
				return false;
			}
		}
	}

	public function index()
	{

		if( $this->_program())
			$status = true;
		else
			$status = false;

		$this->template->build('calc/index' , array( 'status' => $status));
		
	}
}