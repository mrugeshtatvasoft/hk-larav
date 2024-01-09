<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\File;

class GenerateRepository extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'generate:repository {model}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $module  = $this->argument('model');
        $this->CreateRepository();
        dd($module);
    }


    public function CreateRepository(){
        $name = $this->argument('model');
        $repositoryClassName = $name;
        $filename = app_path("Repositories/{$repositoryClassName}Repository.php");
        
        if (File::exists($filename)) {
            $this->error('Repository already exists!');
            return;
        }
        
        $stub = file_get_contents(base_path('stubs/repository.stub'));
        $stub = str_replace('{{ Class }}', $repositoryClassName, $stub);
// dd($stub);
        File::put($filename, $stub);
    }

}
