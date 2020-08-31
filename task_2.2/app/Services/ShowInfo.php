<?php


namespace App\Services;


class ShowInfo
{
    public function showInfo(): void
    {
        $name = config('app.name');
        echo 'Текущее окружение: ' . \App::environment() . PHP_EOL;
        echo 'Ваше имя: ' . $name . PHP_EOL;
    }
}
