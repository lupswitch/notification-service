<?php

namespace App\Service;

use App\Contract\QueueProducerInterface;
use OldSound\RabbitMqBundle\RabbitMq\ProducerInterface;

/**
 * Class QueueProducer
 *
 * @package App\Service
 */
class QueueProducer implements QueueProducerInterface
{
    /** @var ProducerInterface $queue */
    private $queue;

    /**
     * QueueProducer constructor.
     *
     * @param ProducerInterface $queue
     */
    public function __construct(ProducerInterface $queue)
    {
        $this->queue = $queue;
    }

    /**
     * {@inheritdoc}
     */
    public function publish(string $message)
    {
        return $this->queue->publish($message);
    }
}
