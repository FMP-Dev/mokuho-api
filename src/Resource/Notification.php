<?php

namespace Fmp\Resource;

use Fmp\Resource\Base;

class Notification extends Base {
    public function getSubject()
    {
        return 'notification';
    }

    public function read() {
        return $this->makeRequest('', 'POST');
    }
}