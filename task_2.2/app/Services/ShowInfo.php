<?php


namespace App\Services;


class ShowInfo
{
    public function showInfo(): void
    {
        echo 'Текущее окружение: ' . \App::environment() . PHP_EOL;
        echo 'Ваше имя: ' . env('NAME') . PHP_EOL;
    }
}
