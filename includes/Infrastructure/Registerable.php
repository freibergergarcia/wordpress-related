<?php
/**
 * Interface Registerable.
 *
 * This code is adapted from the original work by Alain Schlesser in his project at
 * https://www.mwpd.io/
 *
 * @copyright 2019 Alain Schlesser
 * @license   MIT
 *
 * Adapted for the WordPress Related project.
 *
 * @link      https://www.github.com/freibergergarcia/wordpress-related
 * @copyright 2023 Bruno Freiberger Garcia
 * @license   http://www.gnu.org/licenses/gpl-2.0.html GNU General Public License v2.0
 */

declare( strict_types=1 );

namespace WordPress_Related\Infrastructure;

/**
 * Something that can be registered.
 *
 * @since 1.0.0
 */
interface Registerable {

	/**
	 * Register the service.
	 *
	 * @since 1.0.0
	 */
	public function register(): void;
}
