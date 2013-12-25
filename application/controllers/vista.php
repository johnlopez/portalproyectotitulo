<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * Created by JetBrains PhpStorm.
 * User: isra
 * Date: 19/01/13
 * Time: 18:51
 * To change this template use File | Settings | File Templates.
 */
class Vista extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
		
    }

    public function index()
	{	
		$this->load->view('vista_view');
		
	}
}