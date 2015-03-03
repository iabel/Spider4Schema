<?php
/**
 * A mountain, like Mount Whitney or Mount Everest.
 *
 * @see    http://schema.org/Mountain
*/
abstract class TypeMountain extends TypeLandform
{
	/**
	 * The Schema.org Type Scope
	 *
	 * @var string
	 */
	protected static $scope = 'https://schema.org/Mountain';
}
