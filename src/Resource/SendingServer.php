<?php

namespace Mokuho\Resource;

use Mokuho\Resource\Base;

class SendingServer extends Base {
    public function getSubject()
    {
        return 'sending_servers';
    }
}