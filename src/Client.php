<?php

namespace Fmp;

use Fmp\Resource\Base;
use Fmp\Resource\Campaign;
use Fmp\Resource\MailList;
use Fmp\Resource\Subscriber;
use Fmp\Resource\Plan;
use Fmp\Resource\SendingServer;
use Fmp\Resource\Customer;
use Fmp\Resource\Subscription;
use Fmp\Resource\Notification;
use Fmp\Resource\File;

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