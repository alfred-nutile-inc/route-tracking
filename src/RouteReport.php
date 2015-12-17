<?php

namespace AlfredNutileInc\RouteTracking;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;

class RouteReport extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'route:report {page?} {--count} {--clean} ';

    protected $headers          = ['Path', 'Date'];
    protected $headers_count    = ['Count', 'Path',  'Method'];
    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

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

        if($this->option('count'))
        {
            $report = RouteUsage::select(DB::raw('count(*) as used, path'))->groupBy('path')->orderBy('used', 'DESC')->get()->toArray();

            $this->table($this->headers_count, $report);
        }
        elseif($this->option('clean'))
        {
            if($this->confirm("Are you Sure?"))
            {
                DB::table('route_usages')->truncate();
            }
        }
        else
        {
            $report = RouteUsage::select('path', 'method', 'created_at')->orderBy('created_at', "DESC")->get();

            $this->table($this->headers, $report->toArray()['data']);
        }

    }
}
