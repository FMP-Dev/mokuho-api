<?php

namespace Mokuho\Resource;

use Mokuho\Resource\Base;

class Subscriber extends Base {
    public function getSubject()
    {
        return 'subscribers';
    }

    public function findByEmail($email)
    {
        return $this->makeRequest('email/' . $email, 'PATCH');
    }

    public function findByID($email)
    {
        return $this->makeRequest('id/' . $email, 'PATCH');
    }

    public function subscribe($uid)
    {
        return $this->makeRequest($uid . '/subscribe', 'PATCH');
    }

    public function unsubscribe($uid)
    {
        return $this->makeRequest($uid . '/unsubscribe', 'PATCH');
    }

    public function addTag($uid)
    {
        return $this->makeRequest($uid . '/add-tag', 'POST');
    }
}