<?php

/*
 * This file is part of the Sylius package.
 *
 * (c); Paweł Jędrzejewski
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Sylius\Bundle\AssortmentBundle\Model\Property;

use Sylius\Bundle\ResourceBundle\Model\TimestampableInterface;

/**
 * Product property interface.
 *
 * @author Paweł Jędrzejewski <pjedrzejewski@diweb.pl>
 */
interface PropertyInterface extends TimestampableInterface
{
    /**
     * Get internal name.
     * It's used when editing product.
     *
     * @return string
     */
    public function getName();

    /**
     * Set internal name.
     *
     * @param string $name
     */
    public function setName($name);

    /**
     * The name displayed to user.
     *
     * @return string
     */
    public function getPresentation();

    /**
     * Set presentation.
     *
     * @param string $presentation
     */
    public function setPresentation($presentation);

    /**
     * The type of the property.
     *
     * @return string
     */
    public function getType();

    /**
     * Set type of the property.
     *
     * @param string $type
     */
    public function setType($type);

    /**
     * @return array
     */
    public function getOptions();

    /**
     * @param array
     */
    public function setOptions($options);
}
