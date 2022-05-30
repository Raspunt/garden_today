<?php

class Resource
{
    public static function json($data,$status)
    {
        $resource = [
            'status' => $status,
            'data' => $data,
        ];
        http_response_code($status);
        return json_encode($resource);
    }
}