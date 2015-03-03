<?php
/**
 * A page devoted to a single item, such as a particular product or hotel.
 *
 * @see    http://schema.org/ItemPage
*/
abstract class TypeItemPage extends TypeWebPage
{
	/**
	 * The Schema.org Type Scope
	 *
	 * @var string
	 */
	protected static $scope = 'https://schema.org/ItemPage';
}
