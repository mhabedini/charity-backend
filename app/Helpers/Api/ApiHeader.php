<?php


namespace App\Helpers\Api;

class ApiHeader
{
    public const HEADER_APPLICATION_TYPE = 'Application-Type';
    public const HEADER_APPLICATION_ID = 'Application-Id';
    public const HEADER_DEVICE_ID = 'Device-Id';
    public const HEADER_DEVICE_NAME = 'Device-Name';
    public const HEADER_APPLICATION_VERSION_CODE = 'Application-Version-Code';
    public const HEADER_APPLICATION_VERSION_NAME = 'Application-Version-Name';
    public const HEADER_FIREBASE_TOKEN = 'Firebase-Token';
    public const HEADER_PLATFORM = 'Platform';
    public const HEADER_PLATFORM_VERSION = 'Platform-Version';

    public const APPLICATION_TYPE_CUSTOMER = 'Customer';
    public const APPLICATION_TYPE_VENDOR = 'Vendor';

    /**
     * @return bool true if request comes from Vendor application
     */
    public function isVendor()
    {
        return request()->header(self::HEADER_APPLICATION_TYPE) == self::APPLICATION_TYPE_VENDOR;
    }

    /**
     * @return bool true if request comes from Customer application
     */
    public function isCustomer()
    {
        return request()->header(self::HEADER_APPLICATION_TYPE) == self::APPLICATION_TYPE_CUSTOMER;
    }
}
