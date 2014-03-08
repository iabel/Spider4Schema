<?php
/**
 * The act of capturing still images of objects using a camera.
 *
 * @see    http://schema.org/PhotographAction
*/
abstract class TypePhotographAction extends TypeCreateAction
{
	/**
	 * The Schema.org Type Scope
	 *
	 * @var string
	 */
	protected static $scope = 'https://schema.org/PhotographAction';
}
