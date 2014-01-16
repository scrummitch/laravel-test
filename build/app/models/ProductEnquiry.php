<?php
/**
 * Product Enqiry Class
 *
 * @author  mitch@des.sk
 */
class ProductEnquiry extends Eloquent {

	/**
	 * @var  array
	 */
	protected $_rules = array(
		'first_name'     => 'required',
		'last_name'      => 'required',
		'email'          => array('required', 'email'),
		'contact_number' => 'required|email',
		'address'        => 'required|min:5',
		'suburb'         => 'required',
		'state'          => array('required'),
		'post_code'      => 'required',
		'enquiry_type'   => 'required',
		'product_name'   => 'required',
		'product_size'   => 'required',
		'useby_date'     => 'required',
		'batch_code'     => 'required',
		'enquiry'        => 'required',
	);

	/**
	 * @var  array
	 */
	public $states = array('ACT', 'NSW', 'NT', 'QLD', 'SA', 'TAS', 'VIC', 'WA');

	/**
	 * @var  array
	 */
	public $enquiry_types = array('General Enqiry', 'Product feedback', 'Product Complaint');

	/**
	 *
	 *
	 * @param   array  $values  Values to validate
	 * @return
	 * @throws
	 */
	public function validate($values)
	{
		return Validator::make($values, $this->_rules);
	}
}
