<?php

namespace PoaBundle\Entity;

use Doctrine\ORM\EntityRepository;
use PoaBundle\Entity\tArticulos;


class tArticulosRepository extends EntityRepository
{
	
    public function getArticulosPublicos() {
        $em = $this->getEntityManager();                
        
        $dql = "SELECT i.idarticulo, i.articulo, i.unidad, i.precio, i.partida, i.idgrupo, i.idUniAcdemica
                    FROM PoaBundle:tArticulos i
                    WHERE i.partida ='25500'";
        $query = $em->createQuery($dql);
        
        return $query->getArrayResult();
    }


    public function partidas($tecnica)
    {
        getArticulosPublicos();       
         /*
        $em = $this->getEntityManager();              
    	$tecnica='25500' ;
		return $this->getEntityManager()->getConnection()->executeQuery("SELECT  idarticulo as id, articulo, unidad, precio, partida, idgrupo, idUniAcdemica
		FROM tArticulos 
		WHERE partida ='$tecnica'")->fetchAll();
        */

    }


    public function pPrueba() {
            
            $em = $this->getEntityManager();                
            
            $dql = "exec pPrueba";
            $query = $em->createQuery($dql);
            
            return $query->getArrayResult();
        }


}

