<?php

use Doctrine\ORM\Mapping as ORM;

// src/Product.php

/** 
 *@ORM\Entity
 *@ORM\Table(name="jugador")
 */
class Jugador
{
    /** 
     *@ORM\Id
     *@ORM\Column(type="integer")
     *@ORM\GeneratedValue
     */
    protected $idjugador;
    /** 
     *@ORM\Column(type="string") 
     */
    protected $nickname;
    /** 
     *@ORM\Column(type="string") 
     */
    protected $password;    
    /** 
     *@ORM\Column(type="integer") 
     */
    protected $saldo;
    /** 
     *@ORM\Column(type="string") 
     */
    protected $rutaimagen;    


    public function getIdJugador()
    {
        return $this->idjugador;
    }

    public function getNickname()
    {
        return $this->nickname;
    }
    public function getPassword()
    {
        return $this->password;
    }    
    public function getSaldo()
    {
        return $this->saldo;
    }    
    public function getRutaImagen()
    {
        return $this->rutaimagen;
    }       

    public function setNickname($nickname)
    {
        $this->nickname = $nickname;
    }
    public function setPassword($password)
    {
        $this->password = $password;
    }    
    public function setSaldo($saldo)
    {
        $this->saldo = $saldo;
    }    
    public function setRutaImagen($rutaimagen)
    {
        $this->rutaimagen = $rutaimagen;
    }     
}
