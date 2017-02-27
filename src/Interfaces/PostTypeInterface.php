<?php
namespace BGW\CPT\Interfaces;

/**
 * Interface PostTypeInterface
 *
 * @package BGW\CPT\Interfaces
 */
interface PostTypeInterface {
	/**
	 * Setup WordPress hooks.
	 *
	 * @return mixed
	 */
	public function hooks();

	/**
	 * Register the post type.
	 *
	 * @return mixed
	 */
	public function register();

	/**
	 * Labels for the post type.
	 *
	 * @return array
	 */
	public function labels();

	/**
	 * Arguments for registering the post type.
	 *
	 * @return array
	 */
	public function args();
}
