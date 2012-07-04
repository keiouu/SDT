<?php
/**
 * The Default Theme
 */

class DefaultTheme extends Theme
{
	/**
	 * Add any media files this Theme uses to a MediaManager
	 * 
	 * @param MediaManager $media A MediaManager object
	 */
	public function media($media) {
		$media->addFile(__DIR__ . "/less/content.less");
	}
}
