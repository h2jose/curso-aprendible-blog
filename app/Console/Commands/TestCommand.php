<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\User;

class TestCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    // protected $signature = 'yo:saludo {user : Su nombre para saludarlo}';
    protected $signature = 'yo:saludo';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Muestra \'Hola User, Bienvenido.\'';

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
        $email = $this->ask('¿Cuál es su correo electrónico?');
        // $i = 1;
        // $arguments = $this->arguments();
        // foreach ($arguments as $key => $value) {
        //     $this->info('Argumento #' . $i . ': ' . $value);
        //     $i++;
        // }
        // $this->info("Hola $name, Bienvenido");
        $headers = ['ID', 'Tercero', 'E-mail'];
        $user = App\User::where('email', $email)->toArray();
        $bar = $this->output->createProgressBar(count($email));
        foreach ($email as $value) {
            $this->performTask($value);
            $bar->advance();
        }
        $bar->finish();
    }
}
