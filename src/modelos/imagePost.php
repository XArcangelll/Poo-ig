<?php

namespace Diego\Poo\modelos;

use Diego\Poo\modelos\IPost;

//clases en la misma carpeta no deben ser importadas con use salvo q esten en otra carpeta usa use
class ImagePost extends Post implements IPost{

    public function __construct(private string $mensaje, private string $imagen)
    {
        parent::__construct($mensaje);
    }

  
    public function getImagen():string{
        return $this->imagen;
    }

    public function toStringgg():string{
        $info = "id: " . $this->getId(). "\n";
        $info .= "Mensaje: " . $this->getMensaje() . "\n";
        $info .= "Imagen: " .$this->getImagen() . "\n";
        $info .= "Likes: " . count($this->getLikes()) . "\n";

        return $info;
    }

}