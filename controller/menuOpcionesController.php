<?php

session_start();
$accion = $_GET['accion'];
$codi_usua = $_SESSION['codi_usua'];
$codi_empr = $_SESSION['codi_empr'];
switch ($accion) {
    case 'condiciones':
        require_once('../modelo/CondicionDAO.php');
        $condicionDAO = new CondicionDAO();
        $listaCondicion = $condicionDAO->listar($codi_empr);
        require_once('../condicionLista.php');
        break;
    case 'area':
        require_once('../modelo/AreaDAO.php');
        $areaDAO = new AreaDAO();
        $listaArea = $areaDAO->listar($codi_empr);
        require_once('../areaLista.php');
        break;
    case 'comboCargos':
        $agregando = $_GET['agregando'];
        $codi_tipo = $_GET['codi_tipo'];
        require_once('../modelo/CargoDAO.php');
        require_once('../modelo/Cargo.php');
        $cargo = new Cargo($codi_empr, '', '', $codi_tipo);
        $cargoDAO = new CargoDAO();
        $listaCargo = $cargoDAO->listar($cargo);
        require_once('../util/DataCombo.php');
        if ($agregando <> 1)
            DataCombo::mostrar('codi_carg', $listaCargo, 'codi_carg', 'desc_carg', 1, '');
        else
            DataCombo::mostrar('codi_carg', $listaCargo, 'codi_carg', 'desc_carg', '', '');
        break;
    case 'cargos':
        if (!isset($_GET['codi_tipo']))
            $codi_tipo = 1;
        else
            $codi_tipo = $_GET['codi_tipo'];
        require_once('../modelo/TipoDAO.php');
        $tipoDAO = new TipoDAO();
        $listaTipo = $tipoDAO->listar($codi_empr);
        require_once('../modelo/CargoDAO.php');
        require_once('../modelo/Cargo.php');
        $cargo = new Cargo($codi_empr, '', '', $codi_tipo);
        $cargoDAO = new CargoDAO();
        $listaCargo = $cargoDAO->listar($cargo);
        require_once('../cargoLista.php');
        break;
    case 'trabajador':
        if (isset($_GET['val'])) {
            $val = $_GET['val'];
        }

        $buscar = $_GET['buscar'];
        if(isset($_GET['criterioBuscar']))
            $criterioBuscar = $_GET['criterioBuscar'];
        require_once('../trabajadorLista.php');      
        break;

    case 'cumpleanios':
        require_once('../modelo/TrabajadorDAO.php');
        $trabajadorDAO = new TrabajadorDAO();
        $listaTrabajador = $trabajadorDAO->listarCumpleaniosMes();
        require_once('../trabajadorCumpleanios.php');
        break;

    case 'contratos':
        if (isset($_GET['val'])) {
            $val = $_GET['val'];
        }  
        require_once('../contratoLista.php');
        break;
}
?>
