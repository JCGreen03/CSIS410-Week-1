<?php
class employee{
    public $employee_rank;
    public $employee_name;
    public $employee_email;
    public $employee_favoriteBook;

}

$vincent = new employee();
$vincent ->employee_rank = 'Event Coordinator';
$vincent ->employee_email = 'VVMichael@NewlyRisen.com';
$vincent ->employee_name = 'Vincent Van Michael';
$vincent ->employee_favoriteBook = 'Cyberpunk Red Player Handbook';


$reggie = new employee();
$reggie ->employee_rank = 'CFO';
$reggie ->employee_email = 'RDiMarizio@NewlyRisen.com';
$reggie ->employee_name = 'Reggie DiMarzio';
$reggie ->employee_favoriteBook = 'Wiseguy by Nicholas Pileggi';

$guy = new employee();
$guy ->employee_rank = 'CEO';
$guy ->employee_email = 'GMann@NewlyRisen.com';
$guy ->employee_name = 'Guy Mann';
$guy ->employee_favoriteBook = 'The Mist by Stephen King';

?>