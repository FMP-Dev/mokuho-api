<?php

namespace Mokuho\Resource;

use Mokuho\Resource\Base;

class Customer extends Base {
    public function getSubject()
    {
        return 'customers';
    }

    public function disable($uid)
    {
        return $this->makeRequest($uid . '/disable', 'PATCH');
    }

    public function enable($uid)
    {
        return $this->makeRequest($uid . '/enable', 'PATCH');
    }

    public function assignPlan($uid, $plan_uid)
    {
        return $this->makeRequest($uid . '/assign-plan/' . $plan_uid, 'POST');
    }
}