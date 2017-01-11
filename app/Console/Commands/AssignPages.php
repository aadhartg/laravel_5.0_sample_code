<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Input\InputArgument;
use Auth;
use App\Model\MasterPages;
use App\Model\Pages;

class AssignPages extends Command {

    /**
     * The console command name.
     *
     * @var string
     */
    protected $name = 'pages:assign';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command to assign default pages content to store .';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function fire() {
        $userId = $this->argument('user_id');

        // check if already exsits or not
        $userPages  =   Pages::where('user_id', $userId)->get();
        if (!count($userPages)) {
            // get all default pages of site
            $pages = MasterPages::all();
            foreach ($pages as $page) {
                $data = [

                    'user_id' => $userId,
                    'page' => $page->page_code,
                    'title' => $page->page_title,
                    'content' => $page->page_content,
                    'status' => 1,
                ];

                Pages::create($data);
                $data = [];
            }
        }

        return;
    }

    /**
     * Get the console command arguments.
     *
     * @return array
     */
    protected function getArguments() {
        return [
            ['user_id', InputArgument::REQUIRED, ''],
        ];
    }

    /**
     * Get the console command options.
     *
     * @return array
     */
    protected function getOptions() {
        return [];
    }

}
