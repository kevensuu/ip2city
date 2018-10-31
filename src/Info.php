<?php

namespace Ip2city;

class Info
{
    public static function show($ip)
    {
        if(!$ip) return [];

        try
        {
            $db = $db = new Reader(__DIR__.'/ipiptest.ipdb');
            return $db->find($ip);
        }
        catch (Exception $e)
        {
            return [];
        }

        return [];
    }
}