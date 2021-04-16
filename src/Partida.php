<?php

use Doctrine\ORM\Mapping as ORM;

// src/Product.php

/** 
 *@ORM\Entity
 *@ORM\Table(name="partida")
 */
class Partida
{
    /** 
     *@ORM\Id
     *@ORM\Column(type="integer")
     *@ORM\GeneratedValue
     */
    protected $idpartida;
    /**
     * @ORM\ManyToOne(targetEntity="Jugador", inversedBy="Partidas", cascade={"persist", "remove" })
     * @ORM\JoinColumn(name="jugadorid", referencedColumnName="idjugador",nullable=true)
     */
    protected $jugador;
    /** 
     *@ORM\Column(type="date") 
     */
    protected $fechapartida;    
    /** 
     *@ORM\Column(type="string") 
     */
    protected $colorseleccionado;
    /** 
     *@ORM\Column(type="string") 
     */
    protected $colorsistema;    
    /** 
     *@ORM\Column(type="integer") 
     */
    protected $dineroapostado;       
    /** 
     *@ORM\Column(type="integer") 
     */
    protected $dineroganado;     
    /** 
     *@ORM\Column(type="integer") 
     */
    protected $dineroperdido;      
    /** 
     *@ORM\Column(type="string") 
     */
    protected $porcentajeapostado;      
     


    public function getIdPartida()
    {
        return $this->idpartida;
    }
    public function getJugador()
    {
        return $this->jugador;
    }    

    public function getFechaPartida()
    {
        return $this->fechapartida;
    }
    public function getColorSeleccionado()
    {
        return $this->colorseleccionado;
    }    
    public function getColorSistema()
    {
        return $this->colorsistema;
    }  
    public function getDineroApostado()
    {
        return $this->dineroapostado;
    } 
    public function getDineroGanado()
    {
        return $this->dineroganado;
    }    
    public function getDineroPerdido()
    {
        return $this->dineroperdido;
    }  
    public function getPorcentaje()
    {
        return $this->porcentajeapostado;
    }                

    //setters
    public function setJugador($jugador)
    {
        $this->jugador = $jugador;
    }
    public function setFechaPartida($fechapartida)
    {
        $this->fechapartida = $fechapartida;
    }
    public function setColorSeleccionado($colorseleccionado)
    {
        $this->colorseleccionado = $colorseleccionado;
    }    
    public function setColorSistema($colorsistema)
    {
        $this->colorsistema = $colorsistema;
    }   
    public function setDineroApostado($dineroapostado)
    {
        $this->dineroapostado = $dineroapostado;
    }
    public function setDineroGanado($dineroganado)
    {
        $this->dineroganado = $dineroganado;
    }    
    public function setDineroPerdido($dineroperdido)
    {
        $this->dineroperdido = $dineroperdido;
    }  
    public function setPorcentaje($porcentajeapostado)
    {
        $this->porcentajeapostado = $porcentajeapostado;
    }             
}
