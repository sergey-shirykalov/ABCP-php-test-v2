<?php

namespace NW\WebService\References\Operations\Notification;

/**
 * @property Seller $seller
 */
class Contractor
{
    const TYPE_CUSTOMER = 0;
    public int $id;
    public int $type;
    public string $name;
    public string $email;
    public string $mobile;
    private int $resellerId;

    public function __get($name)
    {
        if ($name === "seller") {
            return Seller::getById($this->resellerId);
        }
    }

    public function __construct(int $resellerId)
    {
        $this->resellerId = $resellerId;
    }

    /**
     * Get by id
     * @param int $resellerId
     * @return self
     */
    public static function getById(int $resellerId): self
    {
        return new self($resellerId); // fakes the getById method
    }

    /**
     * Get full name
     * @return string
     */
    public function getFullName(): string
    {
        return $this->name . ' ' . $this->id;
    }
}

class Seller extends Contractor
{
}

class Employee extends Contractor
{
}

class Status
{
    /**
     * @param int $id
     * @return string
     */
    public static function getName(int $id): string
    {
        $names = [
            0 => 'Completed',
            1 => 'Pending',
            2 => 'Rejected',
        ];
        
        return $names[$id];

    }
}

abstract class ReferencesOperation
{
    /**
     * Do operation
     * @abstract
     * @return array
     */
    abstract public function doOperation(): array;

    /**
     * Get input request
     * @param $pName
     * @return mixed
     */
    public function getRequest($pName)
    {
        return $_REQUEST[$pName];
    }
}

/**
 *  Get reseller email from
 *
 * @return string
 */
function getResellerEmailFrom(): string
{
    return 'contractor@example.com';
}

/**
 * Get emails by permit
 *
 * @param int $resellerId
 * @param string $event
 * @return string[]
 */
function getEmailsByPermit(int $resellerId, string $event): array
{
    // fakes the method
    return ['someemeil@example.com', 'someemeil2@example.com'];
}

class NotificationEvents
{
    const CHANGE_RETURN_STATUS = 'changeReturnStatus';
}