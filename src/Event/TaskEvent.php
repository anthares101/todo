<?php
/**
 * Created by PhpStorm.
 * User: i62hepea
 * Date: 5/04/18
 * Time: 15:20
 */

namespace App\Event;

use App\Entity\Task;
use Symfony\Component\EventDispatcher\Event;

class TaskEvent extends Event
{
    /**
     * @var Task
     */
    private $task;

    /**
     * TaskEvent constructor.
     */
    public function __construct(Task $task)
    {
        $this->task = $task;
    }

    /**
     * @return mixed
     */
    public function getTask()
    {
        return $this->task;
    }


}