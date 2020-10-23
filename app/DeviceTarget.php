<?php

/*
 * UrlHum (https://urlhum.com)
 *
 * @link      https://github.com/urlhum/UrlHum
 * @copyright Copyright (c) 2019 Christian la Forgia
 * @license   https://github.com/urlhum/UrlHum/blob/master/LICENSE.md (MIT License)
 */

namespace App;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\Model;

/**
 * Model for the Url table, used for advanced functions too.
 *
 * Class Url
 */
class DeviceTarget extends Model
{
    /**
     * @var string
     */
    protected $table = 'device_targets';

    public function enum()
    {
        return $this->hasOne(DeviceTargetsEnum::class, 'id', 'device');
    }

    /**
     * Create a Device Target based on the given parameters.
     * @param $data
     */
    public static function createDeviceTarget($data)
    {
//        $device_target = new self;
//        $device_target->device = $device;
//        $device_target->short_url_id = $short_url_id;
//        $device_target->target_url = $target_url;
//        $device_target->hide_stats = $hideUrlStats;

        // THIS IS THE PROBLEM =======
        $data->save();
//        print $ret;
//        print "saved";

    }
}
