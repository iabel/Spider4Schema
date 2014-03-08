<?php
/**
 * The act of distributing content to people for their amusement or edification.
 *
 * @see    http://schema.org/ShareAction
*/
abstract class TypeShareAction extends TypeCommunicateAction
{
	/**
	 * The Schema.org Type Scope
	 *
	 * @var string
	 */
	protected static $scope = 'https://schema.org/ShareAction';
}
