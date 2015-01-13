<?php

require_once("MySQL.php");
require_once("Contrato.php");

class ContratoDAO {

    function listar($contrato) {
        $sql = "select * from contrato where codi_empr='$contrato->codi_empr' and codi_trab='$contrato->codi_trab' ";
        $lista = MySQL::arrayObject($sql);
        return $lista;
    }

    function listar_todo($contrato){
        $sql = "SELECT c.*,t.nume_dni,concat(t.appa_trab,' ', t.apma_trab,' ', t.nomb_trab) as nombre,r.desc_tipo,g.desc_carg,o.desc_cond,d.desc_dist,dire_trab,fech_naci
        FROM contrato c 
        INNER JOIN trabajador t on c.codi_trab=t.codi_trab and c.codi_empr=t.codi_empr
        INNER JOIN tipo_trabajador r on r.codi_tipo=c.codi_tipo and c.codi_empr=r.codi_empr
        INNER JOIN cargo g on c.codi_carg=g.codi_carg and c.codi_empr=g.codi_empr
        INNER JOIN condicion o on c.codi_cond=o.codi_cond and c.codi_empr=o.codi_empr 
        INNER JOIN distrito d on t.codi_dist=d.codi_dist and t.codi_empr=d.codi_empr where  c.codi_empr='$contrato->codi_empr'";    
        $lista = MySQL::arrayObject($sql);
        return $lista;
    }

    function seleccionarReporte($contrato, $criterio) {
        $criterio = $criterio . '%';
        $sql = "SELECT c.*,t.nume_dni,concat(t.appa_trab,' ', t.apma_trab,' ', t.nomb_trab) as nombre,r.desc_tipo,g.desc_carg,o.desc_cond,d.desc_dist,dire_trab,fech_naci
        FROM contrato c 
        INNER JOIN trabajador t on c.codi_trab=t.codi_trab and c.codi_empr=t.codi_empr
        INNER JOIN tipo_trabajador r on r.codi_tipo=c.codi_tipo and c.codi_empr=r.codi_empr
        INNER JOIN cargo g on c.codi_carg=g.codi_carg and c.codi_empr=g.codi_empr
        INNER JOIN condicion o on c.codi_cond=o.codi_cond and c.codi_empr=o.codi_empr 
        INNER JOIN distrito d on t.codi_dist=d.codi_dist and t.codi_empr=d.codi_empr where  c.codi_empr='$contrato->codi_empr' and t.appa_trab like '$criterio' ";
        $lista = MySQL::arrayObject($sql);
        return $lista;
    }

    /*function seleccionarReporte($codi_empr,$id) {
    
       $sql= "SELECT c.*, t.appa_trab, t.apma_trab, t.nomb_trab, t.nume_dni, g.desc_carg, o.desc_cond, d.desc_dist, t.dire_trab, t.fech_naci 
              FROM contrato c INNER JOIN trabajador t on c.codi_trab=t.codi_trab and c.codi_empr=t.codi_empr 
                              INNER JOIN cargo g on c.codi_carg=g.codi_carg and c.codi_empr=g.codi_empr 
                              INNER JOIN condicion o on c.codi_cond=o.codi_cond and c.codi_empr=o.codi_empr 
                              INNER JOIN distrito d on t.codi_dist=d.codi_dist and t.codi_empr=d.codi_empr  
              WHERE c.codi_empr='$codi_empr' and c.codi_contr='$id' ";        
       $lista=MySQL::arrayObject($sql);       
       return $lista[0];
    }*/

    function buscar($codi_empr, $texto) {
        $sql = "SELECT t.*,desc_dist FROM trabajador t inner join distrito d on t.codi_dist=d.codi_dist and appa_trab like '" . $texto . "%' and t.codi_empr='$codi_empr' order by appa_trab,apma_trab,nomb_trab  ";

        $lista = MySQL::arrayObject($sql);
        return $lista;
    }

    function seleccionar(Contrato $contrato) {
        $sql = "SELECT c.*,t.nume_dni,concat(t.appa_trab,' ', t.apma_trab,' ', t.nomb_trab) as nombre,r.desc_tipo,g.desc_carg,o.desc_cond,d.desc_dist,dire_trab,fech_naci,indt_cont,mont_cont
        FROM contrato c 
        INNER JOIN trabajador t on c.codi_trab=t.codi_trab and c.codi_empr=t.codi_empr
        INNER JOIN tipo_trabajador r on r.codi_tipo=c.codi_tipo and c.codi_empr=r.codi_empr
        INNER JOIN cargo g on c.codi_carg=g.codi_carg and c.codi_empr=g.codi_empr
        INNER JOIN condicion o on c.codi_cond=o.codi_cond and c.codi_empr=o.codi_empr 
        INNER JOIN distrito d on t.codi_dist=d.codi_dist and t.codi_empr=d.codi_empr 
        where  c.codi_empr='$contrato->codi_empr' and c.codi_contr=$contrato->codi_contr";

        $lista = MySQL::arrayObject($sql);
        return $lista[0];
    }

    function seleccionarImpre($codi_empr,$id) {
    
       $sql= "SELECT c.*, t.appa_trab, t.apma_trab, t.nomb_trab, t.nume_dni, g.desc_carg, o.desc_cond, d.desc_dist, t.dire_trab, t.fech_naci
              FROM contrato c INNER JOIN trabajador t on c.codi_trab=t.codi_trab and c.codi_empr=t.codi_empr 
                              INNER JOIN cargo g on c.codi_carg=g.codi_carg and c.codi_empr=g.codi_empr 
                              INNER JOIN condicion o on c.codi_cond=o.codi_cond and c.codi_empr=o.codi_empr 
                              INNER JOIN distrito d on t.codi_dist=d.codi_dist and t.codi_empr=d.codi_empr
                              

              WHERE c.codi_empr='$codi_empr' and c.codi_contr='$id' ";        
       $lista=MySQL::arrayObject($sql);       
       return $lista[0];
    }

    function seleccionarImpre2($codi_empr, $id, $codi_trab){
        $sql = "SELECT dp.*, cf.desc_cfp, cf.ruc_cfp, cf.dir_cfp, cf.rep_cfp
                FROM detalle_practic dp INNER JOIN cfprof cf on dp.codi_cfp=cf.codi_cfp
                WHERE dp.codi_empr='$codi_empr' and dp.codi_contr='$id' and dp.codi_trab='$codi_trab'";

        $lista = MySQL::arrayObject($sql);
        return $lista[0];
    }

    function agregar(Contrato $contrato) {
        try {
            $sql = "select max(codi_contr) as codi from contrato where codi_empr='$contrato->codi_empr'  ";
            $lista = MySQL::arrayObject($sql);
            $correlativo = $lista[0]->codi;
            $correlativo = $correlativo + 1;
        } catch (Exception $ex) {
            $correlativo = 1;
        }

        $sql = "INSERT INTO contrato(codi_empr,codi_contr,codi_trab,codi_tipo,
                                      codi_carg,codi_cond,fech_inic,fech_fin, 
                                      indt_cont,mont_cont) 
                              VALUES('$contrato->codi_empr','$correlativo','$contrato->codi_trab','$contrato->codi_tipo',
                                     '$contrato->codi_carg','$contrato->codi_cond','$contrato->fech_inic','$contrato->fech_fin',
                                     $contrato->indt_cont,'$contrato->mont_cont')";

        
        return MySQL::abrirQuery($sql);
    }

    function editar(Contrato $contrato) {
        $sql = "update contrato set codi_tipo='$contrato->codi_tipo',
       								codi_carg='$contrato->codi_carg',
                      codi_cond='$contrato->codi_cond',
                      fech_inic='$contrato->fech_inic',
       								fech_fin='$contrato->fech_fin',
       								indt_cont=$contrato->indt_cont,
       								mont_cont=$contrato->mont_cont,
                      codi_trab=$contrato->codi_trab                     
       								 where codi_contr=$contrato->codi_contr  and codi_empr='$contrato->codi_empr' ";


        return MySQL::abrirQuery($sql);
    }

}

?>