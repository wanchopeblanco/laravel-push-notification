<?php namespace Davibennun\LaravelPushNotification;

class PushNotification {

    public function app($service, $config){
        if($service != 'apns' || $service != 'gcm'){
            $service = 'apns';
        }
        return new App($config, $service);
    }

    public function Message()
    {
      $instance = (new \ReflectionClass('Sly\NotificationPusher\Model\Message'));
        return $instance->newInstanceArgs(func_get_args());
    }

    public function Device()
    {
      $instance = (new \ReflectionClass('Sly\NotificationPusher\Model\Device'));
        return $instance->newInstanceArgs(func_get_args());
    }

    public function DeviceCollection()
    {
      $instance = (new \ReflectionClass('Sly\NotificationPusher\Collection\DeviceCollection'));
        return $instance->newInstanceArgs(func_get_args());
    }

    public function PushManager()
    {
      $instance = (new \ReflectionClass('Sly\NotificationPusher\PushManager'));
        return $instance->newInstanceArgs(func_get_args());
    }

    public function ApnsAdapter()
    {
      $instance = (new \ReflectionClass('Sly\NotificationPusher\Adapter\ApnsAdapter'));
        return $instance->newInstanceArgs(func_get_args());
    }

    public function GcmAdapter()
    {
      $instance = (new \ReflectionClass('Sly\NotificationPusher\Model\GcmAdapter'));
        return $instance->newInstanceArgs(func_get_args());
    }

    public function Push()
    {
      $instance = (new \ReflectionClass('Sly\NotificationPusher\Model\Push'));
        return $instance->newInstanceArgs(func_get_args());
    }

}
