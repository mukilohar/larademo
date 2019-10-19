<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use DB;
use App\MyFacades\Facades\LocationFacades;
use App\Location;

class LocationImport extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'import:location';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Location Import To local';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $data = LocationFacades::getallData()->records;
        foreach ($data as $key => $value) {
            $flight = Location::create(collect($value)->toArray());
        }
    }
}
