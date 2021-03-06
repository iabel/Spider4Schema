<?php
/**
 * A medical procedure intended primarily for diagnostic, as opposed to therapeutic, purposes.
 *
 * @see    http://schema.org/DiagnosticProcedure
*/
abstract class TypeDiagnosticProcedure extends TypeMedicalTest
{
	/**
	 * The Schema.org Type Scope
	 *
	 * @var string
	 */
	protected static $scope = 'https://schema.org/DiagnosticProcedure';
}
