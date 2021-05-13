<?php

 namespace Brain\Games\Cli;

 use function cli\line;
 use function cli\prompt;

function askHim()
{
    line('Welcome to the Brain Games!');
    $name = prompt('May I have youre name?');
    line("Hello, %s!", $name);
}
