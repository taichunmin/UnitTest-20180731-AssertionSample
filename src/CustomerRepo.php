<?php

namespace AssertionSample;

use DateTime;

class CustomerRepo
{
    public function get() : Customer
    {
        $customer = new Customer;

        $customer->id = 2;
        $customer->age = 18;
        $customer->birthday = new DateTime('1990/01/26');

        return $customer;
    }

    public function getAll() : array
    {
        $customers = [
            [3, 20, new DateTime('1993/01/02')],
            [4, 21, new DateTime('1993/01/03')]
        ];

        return array_map(function ($data) {
            $customer = new Customer;

            $customer->id = $data[0];
            $customer->age = $data[1];
            $customer->birthday = $data[2];

            return $customer;
        }, $customers);
    }

    public function getComposedCustomer() : Customer
    {
        $order = new Order;
        $order->id = 19;
        $order->price = 91;

        $customer = new Customer;
        $customer->id = 11;
        $customer->age = 30;
        $customer->birthday = new DateTime('1999/09/09');
        $customer->order = $order;

        return $customer;
    }
}
