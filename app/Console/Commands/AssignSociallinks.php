<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Input\InputArgument;
use Auth;
use App\Model\SocialLinks;
use App\Model\StoreSocialLinks;

class AssignSociallinks extends Command {

    /**
     * The console command name.
     *
     * @var string
     */
    protected $name = 'sociallinks:assign';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command to assign default social links  to store .';

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
        $userLinks  =   StoreSocialLinks::where('user_id', $userId)->get();
        if (!count($userLinks)) {
            // get all default pages of site
            $links = SocialLinks::all();
            foreach ($links as $link) {
                $data = [

                    'user_id' => $userId,
                    'link_url' => $link->link_url,
                    'link_text' => $link->link_text,
                ];

                StoreSocialLinks::create($data);
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
