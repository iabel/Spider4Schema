<?php
/**
 * An action performed by a direct agent and indirect participants upon a direct object. Optionally happens at a location with the help of an inanimate instrument. The execution of the action may produce a result. Specific action sub-type documentation specifies the exact expectation of each argument/role. See also blog post and Actions overview document.
 *
 * @see    http://schema.org/Action
*/
abstract class TypeAction extends TypeThing
{
	/**
	 * The Schema.org Type Scope
	 *
	 * @var string
	 */
	protected static $scope = 'https://schema.org/Action';

	/**
	 * Indicates the current disposition of the Action.
	 * Expected Type: ActionStatusType
	 * 
	 * @var	array
	 */
	protected static $actionStatus = array('value' => 'actionStatus',
		'expectedTypes' => array('ActionStatusType')
	);

	/**
	 * The direct performer or driver of the action (animate or inanimate). e.g. *John* wrote a book.
	 * Expected Type: Organization, Person
	 * 
	 * @var	array
	 */
	protected static $agent = array('value' => 'agent',
		'expectedTypes' => array('Organization', 'Person')
	);

	/**
	 * The endTime of something. For a reserved event or service (e.g. FoodEstablishmentReservation), the time that it is expected to end. For actions that span a period of time, when the action was performed. e.g. John wrote a book from January to *December*. Note that Event uses startDate/endDate instead of startTime/endTime, even when describing dates with times. This situation may be clarified in future revisions.
	 * Expected Type: DateTime
	 * 
	 * @var	array
	 */
	protected static $endTime = array('value' => 'endTime',
		'expectedTypes' => array('DateTime')
	);

	/**
	 * For failed actions, more information on the cause of the failure.
	 * Expected Type: Thing
	 * 
	 * @var	array
	 */
	protected static $error = array('value' => 'error',
		'expectedTypes' => array('Thing')
	);

	/**
	 * The object that helped the agent perform the action. e.g. John wrote a book with *a pen*.
	 * Expected Type: Thing
	 * 
	 * @var	array
	 */
	protected static $instrument = array('value' => 'instrument',
		'expectedTypes' => array('Thing')
	);

	/**
	 * The location of the event, organization or action.
	 * Expected Type: PostalAddress, Place
	 * 
	 * @var	array
	 */
	protected static $location = array('value' => 'location',
		'expectedTypes' => array('PostalAddress', 'Place')
	);

	/**
	 * The object upon the action is carried out, whose state is kept intact or changed. Also known as the semantic roles patient, affected or undergoer (which change their state) or theme (which doesn't). e.g. John read *a book*.
	 * Expected Type: Thing
	 * 
	 * @var	array
	 */
	protected static $object = array('value' => 'object',
		'expectedTypes' => array('Thing')
	);

	/**
	 * Other co-agents that participated in the action indirectly. e.g. John wrote a book with *Steve*.
	 * Expected Type: Organization, Person
	 * 
	 * @var	array
	 */
	protected static $participant = array('value' => 'participant',
		'expectedTypes' => array('Organization', 'Person')
	);

	/**
	 * The result produced in the action. e.g. John wrote *a book*.
	 * Expected Type: Thing
	 * 
	 * @var	array
	 */
	protected static $result = array('value' => 'result',
		'expectedTypes' => array('Thing')
	);

	/**
	 * The startTime of something. For a reserved event or service (e.g. FoodEstablishmentReservation), the time that it is expected to start. For actions that span a period of time, when the action was performed. e.g. John wrote a book from *January* to December. Note that Event uses startDate/endDate instead of startTime/endTime, even when describing dates with times. This situation may be clarified in future revisions.
	 * Expected Type: DateTime
	 * 
	 * @var	array
	 */
	protected static $startTime = array('value' => 'startTime',
		'expectedTypes' => array('DateTime')
	);

	/**
	 * Indicates a target EntryPoint for an Action.
	 * Expected Type: EntryPoint
	 * 
	 * @var	array
	 */
	protected static $target = array('value' => 'target',
		'expectedTypes' => array('EntryPoint')
	);

	/**
	 * Return the 'actionStatus' Property value
	 *
	 * @return	string
	 */
	public static function pActionStatus()
	{
		return self::getValue(self::$actionStatus);
	}

	/**
	 * Return the 'agent' Property value
	 *
	 * @return	string
	 */
	public static function pAgent()
	{
		return self::getValue(self::$agent);
	}

	/**
	 * Return the 'endTime' Property value
	 *
	 * @return	string
	 */
	public static function pEndTime()
	{
		return self::getValue(self::$endTime);
	}

	/**
	 * Return the 'error' Property value
	 *
	 * @return	string
	 */
	public static function pError()
	{
		return self::getValue(self::$error);
	}

	/**
	 * Return the 'instrument' Property value
	 *
	 * @return	string
	 */
	public static function pInstrument()
	{
		return self::getValue(self::$instrument);
	}

	/**
	 * Return the 'location' Property value
	 *
	 * @return	string
	 */
	public static function pLocation()
	{
		return self::getValue(self::$location);
	}

	/**
	 * Return the 'object' Property value
	 *
	 * @return	string
	 */
	public static function pObject()
	{
		return self::getValue(self::$object);
	}

	/**
	 * Return the 'participant' Property value
	 *
	 * @return	string
	 */
	public static function pParticipant()
	{
		return self::getValue(self::$participant);
	}

	/**
	 * Return the 'result' Property value
	 *
	 * @return	string
	 */
	public static function pResult()
	{
		return self::getValue(self::$result);
	}

	/**
	 * Return the 'startTime' Property value
	 *
	 * @return	string
	 */
	public static function pStartTime()
	{
		return self::getValue(self::$startTime);
	}

	/**
	 * Return the 'target' Property value
	 *
	 * @return	string
	 */
	public static function pTarget()
	{
		return self::getValue(self::$target);
	}
}
