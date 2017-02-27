<?php
namespace BGW\CPT;
/**
 * Plugin Name: Board Game Weekly Custom Post Types and Taxonomies
 * Plugin URI: https://jmichaelward.com
 * Description: Registers Custom Post Types and Taxonomies to be accessed via the API.
 * Author: J. Michael Ward
 * Author URI: https://jmichaelward.com
 */

use BGW\CPT\Interfaces\PostTypeInterface;
use BGW\CPT\PostType\Game;
use BGW\CPT\Taxonomy\GameStatus;

require_once plugin_dir_path( __FILE__ ) . 'src/Interfaces/PostTypeInterface.php';
require_once plugin_dir_path( __FILE__ ) . 'src/PostType/Game.php';
require_once plugin_dir_path( __FILE__ ) . 'src/Taxonomy/GameStatus.php';

/** @var PostTypeInterface $type */
foreach ( [ new Game() ] as $type ) {
	$type->hooks();
}

foreach ( [ new GameStatus() ] as $taxonomy ) {
	$taxonomy->hooks();
}
