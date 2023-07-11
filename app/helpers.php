<?php

use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;

if (!function_exists('responseJson')) {
    function responseJson($status, $message, $data=[], $statusCode = 200): \Illuminate\Http\JsonResponse
    {
        return response()->json(
            [
                'status' => $status,
                'message' => $message,
                'data' => $data
            ],
            $statusCode
        );
    }
}

if (!function_exists('uploadImage')) {
    function uploadImage($file, $name = "")
    {

        $date = date('Y-m-d');
        $file_url = $file->store('/images/' . $date, ['disk' => 'uploads']);
        $size = $file->getSize();
        $type = $file->extension();
        $file_name = cleanFileName($file_url);
        return [
            'file_url' => $file_url,
            'size' => $size,
            'type' => $type,
            'file_name' => $file_name,
            'name_file' => $name
        ];
    }
}
if (!function_exists('uploadImageAs')) {
    function uploadImageAs($file, $file_name = '', $name = "")
    {
        $date = date('Y-m-d');
        $file_url = $file->storeAs('/images/' . $date, $file_name, 'uploads');
        $size = $file->getSize();
        $type = $file->extension();

        return [
            'file_url' => $file_url,
            'size' => $size,
            'type' => $type,
            'file_name' => $file_name,
            'name_file' => $name
        ];
    }
}

if (!function_exists('getvalue')){
    function getvalue($key, Array $array) {
        if (!isset($array[$key])) {
            return false;
        }
        return $array[$key];
    }
}


if (!function_exists('authUser')) {
    function authUser($guard = 'web')
    {
        // guard = sanctum for api
        return Auth::guard($guard)->user();
    }
}

if (!function_exists('cleanFileName')) {
    function cleanFileName($file_name)
    {
        $file_ext = pathinfo($file_name, PATHINFO_EXTENSION);
        $file_name_str = pathinfo($file_name, PATHINFO_FILENAME);

        // Replaces all spaces with hyphens.
        $file_name_str = str_replace(' ', '-', $file_name_str);
        // Removes special chars.
        $file_name_str = preg_replace('/[^A-Za-z0-9\-\_]/', '', $file_name_str);
        // Replaces multiple hyphens with single one.
        $file_name_str = preg_replace('/-+/', '-', $file_name_str);

        $clean_file_name = $file_name_str . '.' . $file_ext;

        return $clean_file_name;
    }
}

if (!function_exists('getTimeAsHour')) {
    function getTimeAsHour($time)
    {
        return intdiv($time, 60) . ':' . ($time % 60);
    }
}
if (!function_exists('discount')) {
    function discount($price, $discount)
    {

        return $price - ($discount / 100 * $price);
    }
}

if (!function_exists('getTaxValue')) {
    function getTaxValue($price, $tax)
    {

        return ($price * ($tax / 100));
    }
}


if (!function_exists('getKeyForm')) {
    function getKeyForm($key, array $array)
    {
        if (!isset($array[$key])) {
            return false;
        }
        return $array[$key];
    }
}
