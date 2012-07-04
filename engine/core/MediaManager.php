<?php
/**
 * The MediaManager holds a record of all snippet and tool media for a page load event
 */

class MediaManager
{
	private $_media = array();
	
	/**
	 * Add a file to the manager
	 * 
	 * @param string $filename The full filename to add
	 */
	public function addFile($filename) {
		$this->_media[] = $filename;
	}
	
	/**
	 * Returns all media items in the manager
	 * @return Array Media items in the manager
	 */
	public function getList() {
		return $this->_media;
	}
	
	/**
	 * Return the attached items as a string
	 * @return string The required HTML for items in this manager
	 */
	public function __toString() {
		return "";
	}
}
