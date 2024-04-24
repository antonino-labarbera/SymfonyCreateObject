<?php

namespace App\Command;

use App\Service\BookImporterService;
use App\Service\CsvFileReader;
use Psr\Log\LoggerInterface;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Attribute\AsCommand;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

/**
 * Command for importing books from CSV files into the database.
 */
#[AsCommand(
    name: 'app:book_importer',
    description: 'Update books database.',
    hidden: false,
    aliases: ['app:add-books']
)]
class BooksImporterCommand extends Command
{
    /**
     * @var LoggerInterface The logger instance.
     */
    private $logger;

    /**
     * @var CsvFileReader The CSV file reader service.
     */
    private $csvFile;

    /**
     * @var BookImporterService The book importer service.
     */
    private $bookImporter;

    /**
     * BooksImporterCommand constructor.
     *
     * @param LoggerInterface $logger The logger instance.
     * @param CsvFileReader $csvFile The CSV file reader service.
     * @param BookImporterService $bookImporter The book importer service.
     */
    public function __construct(LoggerInterface $logger, CsvFileReader $csvFile, BookImporterService $bookImporter)
    {
        $this->logger = $logger;
        $this->csvFile = $csvFile;
        $this->bookImporter = $bookImporter;
        parent::__construct();
    }

    /**
     * Configures the command.
     */
    protected function configure()
    {
        $this->addArgument('FilePath', InputArgument::REQUIRED);
    }

    /**
     * Executes the command to import books.
     *
     * @param InputInterface $input The input interface.
     * @param OutputInterface $output The output interface.
     * @return int The command execution status.
     */
    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        try {
            $output->writeln(['Starting import process']);

            $csvFullPath = $input->getArgument('FilePath');
            $data = $this->csvFile->readFile($csvFullPath);
            if (empty($data)) {
                $this->logger->error('Failed to process CSV data');
                $output->writeln(['Failed to process CSV data']);
                return Command::FAILURE;
            }

            foreach ($data as $dataBook) {
                $this->bookImporter->importData($dataBook);
            }

            $output->writeln(['Import process ended successfully!']);
            return Command::SUCCESS;
        } catch (\Exception $e) {
            $output->writeln(['An error occurred while importing book data: ' . $e->getMessage()]);
            $this->logger->error('An error occurred while importing book data: ' . $e->getMessage());
            return Command::FAILURE;
        }
    }
}