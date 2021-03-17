<?php 



class Computer
{
    protected $name;
    protected $disk;
    protected $ram;
    protected $price;
    protected $qta = 100;

    public function __construct(string $name, int $disk, int $ram, int $price){
        $this->name = $name;
        $this->disk = $disk;
        $this->ram = $ram;
        $this->price = $price;
    }
    

}

class ComputerStore extends Computer
{


}



class Carrello 
{
    protected $computer;
    protected $qtaAcquisto;

    public function __construct(Computer $computer, int $qta){
        $this->computer = $computer;
        $this->qtaAcquisto = $qta;
    }

    
    //setter qta
}

class User extends Carrello
{
    protected $name;
    protected $surname;
    protected $email;

    public function setUser($name, $surname, $email){
       $this -> name = $name;
       $this -> surname = $surname;
       $this ->email = $email; 
    }
    

    
}

class CreditCard extends User 
{
    protected $number;
    protected $expire;
    protected $cvc;

    public function setCreditCard (int $number, string $expire, int $cvc  ){
        $this->number= $number;
        $this->expire = $expire;
        $this->cvc = $cvc;
    }
}



$apple = new Computer ('apple', 250, 16, 1700 );

var_dump($apple);



$acquisto = new CreditCard ($apple, 1 );
$acquisto -> setUser('edoardo', 'pizzicannella', 'edo@pizzi.it');
$acquisto -> setCreditCard (56565656, '03/2021', '777');


var_dump ($acquisto);