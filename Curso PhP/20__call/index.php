<?php
class Logger{
    public function message(Shop $shop){
        print_r($shop->getMessage());
    }
}

class Shop{
    protected Logger $logger;

    public function __construct(Logger $logger){
        $this->logger = $logger;
    }

    public function getMessage(): string{
        return "Nuevo Mensaje";
    }

    public function __call($name, $arguments){
        if (method_exists($this->logger, $name)){
            return $this->logger->{$name}($this);
        }else{
            echo "El metodo {$name} no existe en la clase";
        }
    }
}

$shop = new Shop(new Logger());
echo $shop->message();
echo "<br>";
echo $shop->othermessage();