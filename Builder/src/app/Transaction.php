<?php

namespace App;

use Exception;
use InvalidArgumentException;

class Transaction
{
    //Class CONSTANTS and ARRAY OF CONSTANTS

    public const STATUS_PAID = "paid";
    public const STATUS_PENDING = "pending";
    public const STATUS_DECLINED = "declined";

    public const ALL_STATUSES = [
        self::STATUS_PAID => 'Paid',
        self::STATUS_PENDING => 'Pending',
        self::STATUS_DECLINED => 'Declined'
    ];

    private string $status;

    public function __construct()
    {
        $this->status = self::STATUS_PENDING;
    }

    public function setStatus(string $status): self
    {
        try {
            if (!isset(self::ALL_STATUSES[$status])) {
                throw new InvalidArgumentException('Invalid status');
            }
            $this->status = $status;

        } catch (Exception $e) {
            echo $e->getMessage();
        }
        return $this;
    }
}