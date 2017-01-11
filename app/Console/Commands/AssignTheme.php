<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Input\InputArgument;
use Auth;
use App\Model\Themes;
use App\Model\StoreThemes;
use App\Model\DesignSettings;
use App\Http\Services\BackendCommonService;

class AssignTheme extends Command {

    /**
     * The console command name.
     *
     * @var string
     */
    protected $name = 'theme:assign';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Set Default theme on signup.';

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
        $store_name = $this->argument('store_name');

        // If not set
        $check = DesignSettings::where(array('user_id' => $userId, 'theme_type' => 'default'))->get();

        if (!count($check)) {
            $default = Themes::where('theme_type', '=', 'default')->first();

            //move default them to store
            $common = new BackendCommonService();
            $themePath = $common->moveThemeToStore($default->id, $userId);

            $data = [
                'user_id' => $userId,
                'theme_id' => $default->id,
                'store_theme_path' => $themePath,
                'theme_tpl_path' => THEME_VIEW_PATH . $default->theme,
                'status' => 1,
            ];

            // theme saved to store
            StoreThemes::create($data);

            // save desig settings
            $defaultCssPath = '/' . $themePath . '/css/default.css';
            $design = DesignSettings::setdefaulAttribute($userId, $default->id, $default->theme_type, $store_name, $defaultCssPath);
            DesignSettings::create($design);
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
            ['store_name', InputArgument::REQUIRED, ''],
        ];
    }

    /**
     * Get the console command options.
     *
     * @return array
     */
    protected function getOptions() {
        return [
                //['example', null, InputOption::VALUE_OPTIONAL, 'An example option.', null],
        ];
    }

}
