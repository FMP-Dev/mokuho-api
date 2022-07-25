<?php

namespace Mokuho;

use Mokuho\Resource\Base;
use Mokuho\Resource\Campaign;
use Mokuho\Resource\MailList;
use Mokuho\Resource\Subscriber;
use Mokuho\Resource\Plan;
use Mokuho\Resource\SendingServer;
use Mokuho\Resource\Customer;
use Mokuho\Resource\Subscription;
use Mokuho\Resource\Notification;
use Mokuho\Resource\File;

class Client {
    private $token;
    private $uri;

    public function __construct($uri, $token)
    {
        $this->uri = $uri;
        $this->token = $token;
    }

    public function getToken()
    {
        return $this->token;
    }

    public function getUri()
    {
        return $this->uri;
    }

    public function campaign() {
        return new Campaign([], $this);
    }

    public function list() {
        return new MailList([], $this);
    }

    public function subscriber() {
        return new Subscriber([], $this);
    }

    public function plan() {
        return new Plan([], $this);
    }

    public function sendingServer() {
        return new SendingServer([], $this);
    }

    public function customer() {
        return new Customer([], $this);
    }

    public function subscription() {
        return new Subscription([], $this);
    }

    public function sending_server() {
        return new SendingServer([], $this);
    }

    public function notification() {
        return new Notification([], $this);
    }

    public function file() {
        return new File([], $this);
    }

    public function loginToken() {
        $base = new Base([], $this);
        return $base->makeRequest('login-token', 'POST');
    }
}