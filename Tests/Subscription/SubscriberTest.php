<?php

/*
 * Copyright (c) 2011 Hearsay News Products, Inc.
 * 
 * Permission is hereby granted, free of charge, to any person obtaining a copy 
 * of this software and associated documentation files (the "Software"), to deal
 * in the Software without restriction, including without limitation the rights
 * to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
 * copies of the Software, and to permit persons to whom the Software is
 * furnished to do so, subject to the following conditions:
 * 
 * The above copyright notice and this permission notice shall be included in
 * all copies or substantial portions of the Software.
 * 
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 * FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 * AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 * LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 * OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE
 * SOFTWARE.
 */

namespace Hearsay\SuperfeedrBundle\Tests\Subscription;

use Hearsay\SuperfeedrBundle\Subscription\Subscriber;
use Liip\FunctionalTestBundle\Test\WebTestCase;

/**
 * Unit and functional tests for the feed subscriber.
 * @author Kevin Montag <kevin@hearsay.it>
 */
class SubscriberTest extends WebTestCase
{
    /**
     * Get the configured subscriber service.
     * @return Subscriber The subscriber.
     */
    protected function getSubscriber() {
        return $this->getContainer()->get('hearsay_superfeedr.subscriber');
    }
    
    /**
     * Make sure we can subscribe to, and then unsubscribe from, a feed via
     * Superfeedr.
     * @covers Hearsay\SuperfeedrBundle\Subscription\Subscriber
     */
    public function testSubscriptionAndUnsubscriptionPossible() {
        $subscriber = $this->getSubscriber();
        $subscriber->subscribe('hi');
    }
}
