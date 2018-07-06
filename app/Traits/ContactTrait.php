<?php

namespace App\Traits;

//use App\Http\Controllers\ContactInfo;

trait ContactTrait
{
    public $email;
    public $phone;

    public function setContact($email, $phone)
    {
        $obj = new \App\Classes\ContactInfo();

        $obj->email = $email;
        $obj->phone = $phone;

        return $obj;
    }

    public function getContact($id, $info)
    {
        if (isset($info[$id]))
            return $info[$id];
        else
            return 0;
    }
}