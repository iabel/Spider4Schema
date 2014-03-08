<?php
/**
 * The act of committing to/adopting an object.Related actions:RejectAction: The antagonym of AcceptAction.
 *
 * @see    http://schema.org/AcceptAction
*/
abstract class TypeAcceptAction extends TypeAllocateAction
{
	/**
	 * The Schema.org Type Scope
	 *
	 * @var string
	 */
	protected static $scope = 'https://schema.org/AcceptAction';
}
