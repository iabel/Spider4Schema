<?php
/**
 * @copyright  Copyright (C) 2013 - 2014 P.Alex (Alexandru Pruteanu)
 * @license    Licensed under the MIT License; see LICENSE
 */

include_once 'http.php';

/**
 *
 */
class HttpTest extends PHPUnit_Framework_TestCase
{
	/**
	 * Tested class handler
	 * 
	 * @var object
	 */
	protected $handle;

	/**
	 * Test setup
	 * 
	 * @return	void
	 */
	public function setUp()
	{
		$this->handle = new Http;
	}

	/**
	 * Test basic asserts
	 * 
	 * @return	void
	 */
	public function testAsserts()
	{
		$url = 'https://schema.org';

		$response = $this->handle->httpRequest($url);

		$this->assertArrayHasKey('status', $response);
		$this->assertArrayHasKey('error', $response);
		$this->assertArrayHasKey('file', $response);
	}
}
