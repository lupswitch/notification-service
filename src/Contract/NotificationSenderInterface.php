<?php

namespace App\Contract;

interface NotificationSenderInterface
{
    /**
     * @param array  $user
     * @param array  $notification
     *
     * @return mixed
     */
    public function send(array $user, array $notification);
}
