<?php
/**
 * An agent orders an object/product/service to be delivered/sent.
 *
 * @see    http://schema.org/OrderAction
*/
abstract class TypeOrderAction extends TypeTradeAction
{
	/**
	 * The Schema.org Type Scope
	 *
	 * @var string
	 */
	protected static $scope = 'https://schema.org/OrderAction';
}
