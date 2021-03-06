<?php

namespace Ivoz\Provider\Domain\Model\RouteLock;

/**
 * RouteLock
 */
class RouteLock extends RouteLockAbstract implements RouteLockInterface
{
    use RouteLockTrait;

    /**
     * @codeCoverageIgnore
     * @return array
     */
    public function getChangeSet()
    {
        return parent::getChangeSet();
    }

    /**
     * Get id
     * @codeCoverageIgnore
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Return in current lock status is open
     *
     * @return boolean
     */
    public function isOpen()
    {
        return $this->getOpen() == '1';
    }
}
