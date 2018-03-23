<?php


namespace App\Command;

use App\Project\Project;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Workflow\Workflow;

class CanCommand extends Command
{
    private $projectWorkflow;

    public function __construct(Workflow $projectWorkflow)
    {
        parent::__construct();
        $this->projectWorkflow = $projectWorkflow;
    }

    /**
     * {@inheritdoc}
     */
    public function configure(): void
    {
        $this
            ->setName('project:can')
            ->setDescription('can transition');
    }

    /**
     * {@inheritdoc}
     */
    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $project = new Project();
        var_dump($this->projectWorkflow->can($project, Project::STATUS_TO_VALIDATE));
        var_dump($this->projectWorkflow->can($project, Project::STATUS_FOUND));
    }
}
