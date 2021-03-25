<?php

class OrderService{
    const STATUS_NEW = 0;
    const STATUS_IN_PROCESS = 1;
    const STATUS_COMPLITED = 2;
    const STATUS_CANCELED = 3;

    public static function getStatuses(){
        return[
            self::STATUS_NEW => 'New',
            self::STATUS_IN_PROCESS => 'In progress',
            self::STATUS_COMPLITED => 'Complated',
            self::STATUS_CANCELED => 'Canceled'  
        ];
    }

}