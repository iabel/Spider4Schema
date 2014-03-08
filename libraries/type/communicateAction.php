<?php
/**
 * The act of conveying information to another person via a communication medium (instrument) such as speech, email, or telephone conversation.
 *
 * @see    http://schema.org/CommunicateAction
*/
abstract class TypeCommunicateAction extends TypeInteractAction
{
	/**
	 * The Schema.org Type Scope
	 *
	 * @var string
	 */
	protected static $scope = 'https://schema.org/CommunicateAction';

	/**
	 * The subject matter of the content.
	 * Expected Type: Thing
	 * 
	 * @var	array
	 */
	protected static $about = array('value' => 'about',
		'expectedTypes' => array('Thing')
	);

	/**
	 * A sub property of instrument. The languaged used on this action.
	 * Expected Type: Language
	 * 
	 * @var	array
	 */
	protected static $language = array('value' => 'language',
		'expectedTypes' => array('Language')
	);

	/**
	 * A sub property of participant. The participant who is at the receiving end of the action.
	 * Expected Type: Audience, Organization, Person
	 * 
	 * @var	array
	 */
	protected static $recipient = array('value' => 'recipient',
		'expectedTypes' => array('Audience', 'Organization', 'Person')
	);

	/**
	 * Return the 'about' Property value
	 *
	 * @return	string
	 */
	public static function pAbout()
	{
		return self::getValue(self::$about);
	}

	/**
	 * Return the 'language' Property value
	 *
	 * @return	string
	 */
	public static function pLanguage()
	{
		return self::getValue(self::$language);
	}

	/**
	 * Return the 'recipient' Property value
	 *
	 * @return	string
	 */
	public static function pRecipient()
	{
		return self::getValue(self::$recipient);
	}
}
