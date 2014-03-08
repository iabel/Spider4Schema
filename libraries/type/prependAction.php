<?php
/**
 * The act of inserting at the beginning if an ordered collection.
 *
 * @see    http://schema.org/PrependAction
*/
abstract class TypePrependAction extends TypeInsertAction
{
	/**
	 * The Schema.org Type Scope
	 *
	 * @var string
	 */
	protected static $scope = 'https://schema.org/PrependAction';
}
