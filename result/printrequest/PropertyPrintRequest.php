<?php

namespace Ask\Language\PrintRequest;
use DataValues\PropertyValue;

/**
 * Print request that specifies values for a property should be displayed.
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
class PropertyPrintRequest extends PrintRequest implements \Ask\Immutable {

	/**
	 * @since 0.1
	 *
	 * @var PropertyValue
	 */
	protected $property;

	/**
	 * Constructor.
	 *
	 * @since 0.1
	 *
	 * @param string[] $labels
	 * @param PropertyValue $property
	 * @param string[] $options
	 */
	public function __construct( $labels, PropertyValue $property, array $options = array() ) {
		$this->labels = $labels;
		$this->property = $property;
		$this->options = $options;
	}

	/**
	 * @see PrintRequest::getType
	 *
	 * @since 0.1
	 *
	 * @return string
	 */
	public function getType() {
		return PrintRequest::TYPE_PROP;
	}

	/**
	 * Returns the print request's property.
	 *
	 * @since 0.1
	 *
	 * @return PropertyValue
	 */
	public function getProperty() {
		return $this->property;
	}

}
