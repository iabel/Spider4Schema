<?php
/**
 * Describes a reservation for travel, dining or an event. Some reservations require tickets.
 *
 * @see    http://schema.org/Reservation
*/
abstract class TypeReservation extends TypeIntangible
{
	/**
	 * The Schema.org Type Scope
	 *
	 * @var string
	 */
	protected static $scope = 'https://schema.org/Reservation';

	/**
	 * If the reservation was not booked directly through the provider, the third-party booking agent can be recorded through this property.
	 * Expected Type: Person, Organization
	 * 
	 * @var	array
	 */
	protected static $bookingAgent = array('value' => 'bookingAgent',
		'expectedTypes' => array('Person', 'Organization')
	);

	/**
	 * The date and time the reservation was booked.
	 * Expected Type: DateTime
	 * 
	 * @var	array
	 */
	protected static $bookingTime = array('value' => 'bookingTime',
		'expectedTypes' => array('DateTime')
	);

	/**
	 * The date and time the reservation was modified.
	 * Expected Type: DateTime
	 * 
	 * @var	array
	 */
	protected static $modifiedTime = array('value' => 'modifiedTime',
		'expectedTypes' => array('DateTime')
	);

	/**
	 * The currency (in 3-letter ISO 4217 format) of the price or a price component, when attached to PriceSpecification and its subtypes.
	 * Expected Type: Text
	 * 
	 * @var	array
	 */
	protected static $priceCurrency = array('value' => 'priceCurrency',
		'expectedTypes' => array('Text')
	);

	/**
	 * Any membership in a frequent flyer, hotel loyalty program, etc. being applied to the reservation.
	 * Expected Type: ProgramMembership
	 * 
	 * @var	array
	 */
	protected static $programMembershipUsed = array('value' => 'programMembershipUsed',
		'expectedTypes' => array('ProgramMembership')
	);

	/**
	 * The person or organization providing the service, reservation, or creative work. The provider may subcontract out the service.
	 * Expected Type: Person, Organization
	 * 
	 * @var	array
	 */
	protected static $provider = array('value' => 'provider',
		'expectedTypes' => array('Person', 'Organization')
	);

	/**
	 * The thing -- flight, event, restaurant,etc. being reserved.
	 * Expected Type: Thing
	 * 
	 * @var	array
	 */
	protected static $reservationFor = array('value' => 'reservationFor',
		'expectedTypes' => array('Thing')
	);

	/**
	 * A unique identifier for the reservation.
	 * Expected Type: Text
	 * 
	 * @var	array
	 */
	protected static $reservationId = array('value' => 'reservationId',
		'expectedTypes' => array('Text')
	);

	/**
	 * The current status of the reservation.
	 * Expected Type: ReservationStatusType
	 * 
	 * @var	array
	 */
	protected static $reservationStatus = array('value' => 'reservationStatus',
		'expectedTypes' => array('ReservationStatusType')
	);

	/**
	 * A ticket associated with the reservation.
	 * Expected Type: Ticket
	 * 
	 * @var	array
	 */
	protected static $reservedTicket = array('value' => 'reservedTicket',
		'expectedTypes' => array('Ticket')
	);

	/**
	 * The total price for the reservation or ticket, including applicable taxes, shipping, etc.
	 * Expected Type: Text, Number, PriceSpecification
	 * 
	 * @var	array
	 */
	protected static $totalPrice = array('value' => 'totalPrice',
		'expectedTypes' => array('Text', 'Number', 'PriceSpecification')
	);

	/**
	 * The person or organization the reservation or ticket is for.
	 * Expected Type: Person, Organization
	 * 
	 * @var	array
	 */
	protected static $underName = array('value' => 'underName',
		'expectedTypes' => array('Person', 'Organization')
	);

	/**
	 * Return the 'bookingAgent' Property value
	 *
	 * @return	string
	 */
	public static function pBookingAgent()
	{
		return self::getValue(self::$bookingAgent);
	}

	/**
	 * Return the 'bookingTime' Property value
	 *
	 * @return	string
	 */
	public static function pBookingTime()
	{
		return self::getValue(self::$bookingTime);
	}

	/**
	 * Return the 'modifiedTime' Property value
	 *
	 * @return	string
	 */
	public static function pModifiedTime()
	{
		return self::getValue(self::$modifiedTime);
	}

	/**
	 * Return the 'priceCurrency' Property value
	 *
	 * @return	string
	 */
	public static function pPriceCurrency()
	{
		return self::getValue(self::$priceCurrency);
	}

	/**
	 * Return the 'programMembershipUsed' Property value
	 *
	 * @return	string
	 */
	public static function pProgramMembershipUsed()
	{
		return self::getValue(self::$programMembershipUsed);
	}

	/**
	 * Return the 'provider' Property value
	 *
	 * @return	string
	 */
	public static function pProvider()
	{
		return self::getValue(self::$provider);
	}

	/**
	 * Return the 'reservationFor' Property value
	 *
	 * @return	string
	 */
	public static function pReservationFor()
	{
		return self::getValue(self::$reservationFor);
	}

	/**
	 * Return the 'reservationId' Property value
	 *
	 * @return	string
	 */
	public static function pReservationId()
	{
		return self::getValue(self::$reservationId);
	}

	/**
	 * Return the 'reservationStatus' Property value
	 *
	 * @return	string
	 */
	public static function pReservationStatus()
	{
		return self::getValue(self::$reservationStatus);
	}

	/**
	 * Return the 'reservedTicket' Property value
	 *
	 * @return	string
	 */
	public static function pReservedTicket()
	{
		return self::getValue(self::$reservedTicket);
	}

	/**
	 * Return the 'totalPrice' Property value
	 *
	 * @return	string
	 */
	public static function pTotalPrice()
	{
		return self::getValue(self::$totalPrice);
	}

	/**
	 * Return the 'underName' Property value
	 *
	 * @return	string
	 */
	public static function pUnderName()
	{
		return self::getValue(self::$underName);
	}
}
