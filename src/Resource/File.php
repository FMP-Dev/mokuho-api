<?php

namespace Mokuho\Resource;

use Mokuho\Resource\Base;

class File extends Base {
    public function getSubject()
    {
        return 'file';
    }

    public function upload($params) {
        return $this->makeRequest('upload', 'POST', $params);
    }
}