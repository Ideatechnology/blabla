<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Publikasi_model extends BF_Model {

	protected $table_name	= "publikasi";
	protected $key			= "id_publikasi";
	protected $soft_deletes	= false;
	protected $date_format	= "datetime";
	protected $set_created	= false;
	protected $set_modified = false;
}
