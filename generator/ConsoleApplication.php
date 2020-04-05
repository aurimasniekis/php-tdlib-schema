<?php

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema\Generator;

use AurimasNiekis\TdLibSchema\Generator\Parser\SchemaParser;
use Monolog\Logger;
use Symfony\Bridge\Monolog\Handler\ConsoleHandler;
use Symfony\Component\Console\Application;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

/**
 * @author  Aurimas Niekis <aurimas@niekis.lt>
 */
class ConsoleApplication extends Command
{
    private string $version = '1.0';
    private bool   $running = false;

    public function run(InputInterface $input = null, OutputInterface $output = null): int
    {
        if ($this->running) {
            return parent::run($input, $output);
        }

        // We use the command name as the application name
        $application = new Application($this->getName() ?: 'UNKNOWN', $this->version);

        // Fix the usage of the command displayed with "--help"
        $this->setName($_SERVER['argv'][0]);
        $application->add($this);
        $application->setDefaultCommand($this->getName(), true);

        $this->running = true;

        try {
            $ret = $application->run($input, $output);
        } finally {
            $this->running = false;
        }

        return $ret ?? 1;
    }

    protected function configure(): void
    {
        $this->addArgument(
            'tl_file',
            InputArgument::OPTIONAL,
            'Telegram TL file to generate classes from'
        );
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $logger = new Logger('generator');
        $logger->pushHandler(new ConsoleHandler($output));

        $parser  = new SchemaParser($logger, $input->getArgument('tl_file'));
        $classes = $parser->parse();

        $generator = new CodeGenerator('AurimasNiekis\TdLibSchema', __DIR__ . '/../src');
        $generator->generate($classes);

        return 0;
    }
}
