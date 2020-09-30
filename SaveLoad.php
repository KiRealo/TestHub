<?php

class SaveLoad
{
    public function save(array $numbers)
    {
        return file_put_contents('./numbers.txt', implode(' ', $numbers));
    }

    public function load()
    {
        return explode(' ', file_get_contents('./numbers.txt'));
    }
}