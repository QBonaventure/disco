<?php

/*
 * This file is part of the Disco package.
 *
 * (c) bitExpert AG
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace bitExpert\Disco\Proxy\LazyBean;

use ProxyManager\Generator\Util\UniqueIdentifierGenerator;
use Zend\Code\Generator\PropertyGenerator;

/**
 * Property that contains the beanId of the wrapped value object.
 */
class ValueHolderBeanIdProperty extends PropertyGenerator
{
    /**
     * Creates a new {@link \bitExpert\Disco\Proxy\LazyBean\ValueHolderBeanIdProperty}
     */
    public function __construct()
    {
        parent::__construct(UniqueIdentifierGenerator::getIdentifier('valueHolderBeanId'));

        $this->setVisibility(self::VISIBILITY_PRIVATE);
        $this->setDocBlock('@var \\string beanId');
    }
}
