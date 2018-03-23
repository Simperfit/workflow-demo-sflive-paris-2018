<?php

namespace App\Project;

class Project
{
    public const STATUS_COMPLETION_IN_PROGRESS = 'completion_in_progress';
    public const STATUS_TO_VALIDATE = 'to_validate';
    public const STATUS_VALIDATED = 'validated';
    public const STATUS_PENDING_SEARCH = 'pending_search';
    public const STATUS_FOUND = 'found';
    public const STATUS_STARTED = 'started';
    public const STATUS_FINISHED = 'finished';
    public const STATUS_ABORTED = 'aborted';

    public const STATUSES = [
        self::STATUS_TO_VALIDATE,
        self::STATUS_VALIDATED,
        self::STATUS_PENDING_SEARCH,
        self::STATUS_FOUND,
        self::STATUS_STARTED,
        self::STATUS_FINISHED,
        self::STATUS_ABORTED,
    ];

    private $status = self::STATUS_COMPLETION_IN_PROGRESS;

    public function getStatus(): ?string
    {
        return $this->status;
    }

    public function setStatus(?string $status): self
    {
        $this->status = $status;

        return $this;
    }
}