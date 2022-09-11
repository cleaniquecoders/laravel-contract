<?php

use Illuminate\Support\Facades\Artisan;

it('has make:contract command', function () {
    $commands = array_keys(Artisan::all());
    sort($commands);
    $this->assertTrue(in_array('make:contract', $commands));
});

it('can make a contract', function () {
    Artisan::call('make:contract Action');
    $this->assertTrue(
        file_exists(base_path('app/Contracts/Action.php'))
    );
    unlink(base_path('app/Contracts/Action.php'));
});
