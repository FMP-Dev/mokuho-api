<?php

namespace Fmp\Resource;

use Fmp\Resource\Base;

class SendingServer extends Base {
    public function getSubject()
    {
        return 'sending_servers';
    }
}