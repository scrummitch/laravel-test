<?php
/**
 * Main Index Controller
 *
 * @author  mitch@des.sk
 */
class IndexController extends BaseController {

	/**
	 * Page for product enquiries
	 *
	 * @return  View
	 */
	public function index()
	{
		return View::make('index');
	}

	/**
	 * Accepting Product enquiries
	 */
	public function enquire()
	{
		$post_data = Input::all();

		if (empty($post_data))
			App::abort(401);

		$product_enquiry = new ProductEnquiry();

		$validation = $product_enquiry->validate($post_data);

		if ($validation->fails())
			return Redirect::to('/')
				->withErrors($validation)
				->withInput();

		// Save the product enquiry
		try
		{
			ProductEnquiry::create($post_data);
		}
		catch(Exception $e)
		{
			dd($e);
		}

		// Redirect to our success page
		Redirect::route('enquiry_success');
	}

}
