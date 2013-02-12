<?php

namespace Ask\Language\PrintRequest;

/**
 * Base class for print requests.
 *
 * A print request specifies that a certain value should be displayed
 * and in what manner this display should happen.
 *
 * This program is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation; either version 2 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License along
 * with this program; if not, write to the Free Software Foundation, Inc.,
 * 51 Franklin Street, Fifth Floor, Boston, MA 02110-1301, USA.
 * http://www.gnu.org/copyleft/gpl.html
 *
 * @since 0.1
 *
 * @file
 * @ingroup Ask
 *
 * @licence GNU GPL v2+
 * @author Jeroen De Dauw < jeroendedauw@gmail.com >
 */
abstract class PrintRequest {

	const TYPE_PROP = 1;
	const TYPE_THIS = 2;

	/**
	 * @since 0.1
	 *
	 * @var string[]
	 */
	protected $labels;

	/**
	 * @since 0.1
	 *
	 * @var string[]
	 */
	protected $options = array();

	/**
	 * Returns the labels that describes the printout.
	 * The format is an associative array in which the keys
	 * are language codes and the values are the labels for
	 * the language represented by their corresponding key
	 *
	 * @since 0.1
	 *
	 * @return string[]
	 */
	public function getLabels() {
		return $this->labels;
	}

	/**
	 * Returns the options for the print request.
	 *
	 * @since 0.1
	 *
	 * @return string[]
	 */
	public function getOptions() {
		return $this->options;
	}

	/**
	 * Returns the type of the print request.
	 *
	 * @since 0.1
	 *
	 * @return string
	 */
	public abstract function getType();

}
