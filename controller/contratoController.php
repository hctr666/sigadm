<?php

session_start();
if (isset($_SESSION['codi_usua'])) {
    $accion = $_GET['accion'];
    $codi_usua = $_SESSION['codi_usua'];
    $codi_empr = $_SESSION['codi_empr'];
    if (isset($_GET['criterioBuscar'])) {
        $criterioBuscar = $_GET['criterioBuscar'];
    }
    switch ($accion) {
        case 'buscar':
            require_once '../modelo/TrabajadorDAO.php';
            require_once '../modelo/Trabajador.php';
            $trabajadorDAO = new TrabajadorDAO();
            $listaTrabajador = $trabajadorDAO->buscar($codi_empr, $criterioBuscar);
            require_once '../contratoTrabajadorListado.php';
            break;
        case 'imprimir':
            $id = $_GET['id'];
            require_once '../modelo/Trabajador.php';
            break;
        case 'mostrarContratos':
            $criterioBuscar = $_GET['criterioBuscar'];
            require_once '../modelo/ContratoDAO.php';
            require_once '../modelo/Contrato.php';
            $contrato = new Contrato();
            $contrato->codi_empr = $codi_empr;
            $contratoDAO = new ContratoDAO();
            $listacontratos = $contratoDAO->seleccionarReporte($contrato, $criterioBuscar);
            require_once '../contratos.php';
            break;

        case 'mostrartodo':
            require_once("../modelo/ContratoDAO.php");
            require_once("../modelo/Contrato.php");
            $contrato = new Contrato();
            $contrato->codi_empr = $codi_empr;
            $contratoDAO = new ContratoDAO();
            $listacontratos = $contratoDAO->listar_todo($contrato);
            require_once '../contratos.php';
            break;

        case 'nuevo':
            $codi_trab = '';//$_GET['codi_trab'];
            $codi_contr ='';// $_GET['codi_contr'];
            $criterioBuscar = $_GET['criterioBuscar'];
            require_once '../modelo/TrabajadorDAO.php';
            require_once '../modelo/Trabajador.php';
            $agregando = true;
            $trabajador = new Trabajador();
            $trabajadorDAO = new TrabajadorDAO();
            //$registro = $trabajadorDAO->seleccionar($codi_empr, $codi_trab);
            
            require_once '../modelo/ContratoDAO.php';
            require_once '../modelo/Contrato.php';
            $contrato = new Contrato();
            $contrato->codi_empr = $codi_empr;
            $contrato->codi_contr = $codi_contr;
            $contratoDAO = new ContratoDAO();
            //$contrato = $contratoDAO->seleccionar($contrato);
           
            require_once '../modelo/TipoDAO.php';
            $tipoDAO = new TipoDAO();
            $listaTipo = $tipoDAO->listar($codi_empr);
            
            
            require_once '../modelo/CargoDAO.php';
            require_once '../modelo/Cargo.php';
            $cargo = new Cargo($codi_empr, '', '', '1');
            $cargoDAO = new CargoDAO();
            $listaCargo = $cargoDAO->listar($cargo);
            
            require_once '../modelo/CondicionDAO.php';
            require_once '../modelo/Condicion.php';
            $condicionDAO = new CondicionDAO();
            $listaCondicion = $condicionDAO->listar($codi_empr);
            require_once '../contratoEditar.php';
            break;
        case 'editar':
            $codi_trab = $_GET['codi_trab'];
            $codi_contr = $_GET['codi_contr'];

            if (isset($_GET['criterioBuscar'])) {
                $criterioBuscar = $_GET['criterioBuscar'];
            }

            require_once '../modelo/TrabajadorDAO.php';
            require_once '../modelo/Trabajador.php';
            $agregando = false;
            $trabajador = new Trabajador();
            $trabajadorDAO = new TrabajadorDAO();
            $registro = $trabajadorDAO->seleccionar($codi_empr, $codi_trab);
            
            require_once '../modelo/ContratoDAO.php';
            require_once '../modelo/Contrato.php';
            $contrato = new Contrato();
            $contrato->codi_empr = $codi_empr;
            $contrato->codi_contr = $codi_contr;
            $contratoDAO = new ContratoDAO();
            $contrato = $contratoDAO->seleccionar($contrato);
           
            require_once '../modelo/TipoDAO.php';
            $tipoDAO = new TipoDAO();
            $listaTipo = $tipoDAO->listar($codi_empr);
            
            
            require_once '../modelo/CargoDAO.php';
            require_once '../modelo/Cargo.php';
            $cargo = new Cargo($codi_empr, '', '', $contrato->codi_tipo);
            $cargoDAO = new CargoDAO();
            $listaCargo = $cargoDAO->listar($cargo);
            
            require_once '../modelo/CondicionDAO.php';
            require_once '../modelo/Condicion.php';
            $condicionDAO = new CondicionDAO();
            $listaCondicion = $condicionDAO->listar($codi_empr);
            
            require_once '../contratoEditar.php';
            break;
            
        case 'grabar_editar':
            require_once '../modelo/ContratoDAO.php';
            require_once '../modelo/Contrato.php';
            $contrato = new Contrato();
            $contrato->codi_empr = $codi_empr;
            $contrato->codi_contr = $_GET['codi_contr'];
            $contrato->codi_trab = $_GET['codi_trab'];
            $contrato->codi_tipo = $_GET['codi_tipo'];
            $contrato->codi_carg = $_GET['codi_carg'];
            $contrato->codi_cond = $_GET['codi_cond'];
            $contrato->indt_cont = $_GET['indt_cont'];
            $contrato->mont_cont = $_GET['mont_cont'];
            $yearIni = substr($_GET['fech_inic'], 6, 4);
            $monthIni = substr($_GET['fech_inic'], 3, 2);
            $dayIni = substr($_GET['fech_inic'], 0, 2);
            $contrato->fech_inic = $yearIni . '-' . $monthIni . '-' . $dayIni;
            $yearFin = substr($_GET['fech_fin'], 6, 4);
            $monthFin = substr($_GET['fech_fin'], 3, 2);
            $dayFin = substr($_GET['fech_fin'], 0, 2);
            $contrato->fech_fin = $yearFin . '-' . $monthFin . '-' . $dayFin;
            $contrato->codi_empr = $codi_empr;
            $contratoDAO = new ContratoDAO();
            
            if ($contratoDAO->editar($contrato) == 1) {
                $criterioBuscar = substr($_GET['nombre'], 0, 1);
                $listacontratos = $contratoDAO->seleccionarReporte($contrato, $criterioBuscar);
                require_once '../contratos.php';
            }
            break;
        case 'grabar_nuevo':
            require_once '../modelo/ContratoDAO.php';
            require_once '../modelo/Contrato.php';
            $contrato = new Contrato();
            $contrato->codi_empr = $codi_empr;
            $contrato->codi_contr = $_GET['codi_contr'];
            $contrato->codi_trab = $_GET['codi_trab'];
            $contrato->codi_tipo = $_GET['codi_tipo'];
            $contrato->codi_carg = $_GET['codi_carg'];
            $contrato->codi_cond = $_GET['codi_cond'];
            $contrato->indt_cont = $_GET['indt_cont'];
            $contrato->mont_cont = $_GET['mont_cont'];
            $yearIni = substr($_GET['fech_inic'], 6, 4);
            $monthIni = substr($_GET['fech_inic'], 3, 2);
            $dayIni = substr($_GET['fech_inic'], 0, 2);
            $contrato->fech_inic = $yearIni . '-' . $monthIni . '-' . $dayIni;
            $yearFin = substr($_GET['fech_fin'], 6, 4);
            $monthFin = substr($_GET['fech_fin'], 3, 2);
            $dayFin = substr($_GET['fech_fin'], 0, 2);
            $contrato->fech_fin = $yearFin . '-' . $monthFin . '-' . $dayFin;
            $contrato->codi_empr = $codi_empr;
            $contratoDAO = new ContratoDAO();
            
            if ($contratoDAO->agregar($contrato) == 1) {
                $criterioBuscar = substr($_GET['nombre'], 0, 1);
                $listacontratos = $contratoDAO->seleccionarReporte($contrato, $criterioBuscar);
                require_once '../contratos.php';
            }
            break;
        case 'imprimirContrato':
            $id = $_GET['id'];
            $codi_empr = $_SESSION['codi_empr'];
            require_once '../modelo/ContratoDAO.php';
            require_once '../modelo/Contrato.php';

            $contratoDAO = new ContratoDAO();
            $contrato = new Contrato();
            $contrato->codi_empr = $codi_empr;
            $contrato->codi_contr = $id;
            $registro = $contratoDAO->seleccionarImpre($codi_empr,$id);

            //$_SESSION["contrato"] = $registro;
            switch ($registro->codi_cond) {
                case '01':
                    require_once('../reporte/art58.php');
                    break;  
                case '02':
                    require_once("../reporte/art58.php");
                    break;
                case '03':
                    require_once("../reporte/suplencia.php");
                    break;
                case '04':
                    require_once("../reporte/vacaciones.php");
                    break;
                case '05':
                    require_once("../reporte/tmpAlta.php");
                    break;
                case '06':
                    require_once("../reporte/art57.php");
                    break;
                case '07':
                    require_once("");
                    break; 
                case '08':
                    require_once("../reporte/art57sin.php");
                    break;
                case '09':
                    require_once("");
                    break;
                case '10':
                    require_once("");
                    break;      
            }

            break;
            
    }
} else {
    echo 'Usted no tiene acceso';
}
?>
