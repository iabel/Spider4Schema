<?php
/**
 * A collection of music tracks in playlist form.
 *
 * @see    http://schema.org/MusicPlaylist
*/
abstract class TypeMusicPlaylist extends TypeCreativeWork
{
	/**
	 * The Schema.org Type Scope
	 *
	 * @var string
	 */
	protected static $scope = 'https://schema.org/MusicPlaylist';

	/**
	 * The number of tracks in this album or playlist.
	 * Expected Type: Integer
	 * 
	 * @var	array
	 */
	protected static $numTracks = array('value' => 'numTracks',
		'expectedTypes' => array('Integer')
	);

	/**
	 * A music recording (track)—usually a single song. If an ItemList is given, the list should contain items of type MusicRecording. Supersedes tracks.
	 * Expected Type: ItemList, MusicRecording
	 * 
	 * @var	array
	 */
	protected static $track = array('value' => 'track',
		'expectedTypes' => array('ItemList', 'MusicRecording')
	);

	/**
	 * Return the 'numTracks' Property value
	 *
	 * @return	string
	 */
	public static function pNumTracks()
	{
		return self::getValue(self::$numTracks);
	}

	/**
	 * Return the 'track' Property value
	 *
	 * @return	string
	 */
	public static function pTrack()
	{
		return self::getValue(self::$track);
	}
}
