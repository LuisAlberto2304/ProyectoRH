<?php
require("../includes/config/MySQL_ConexionDB.php");
function showTickets() {
    global $db_con;
    $tickets = [];

    try {
        $query = "SELECT * FROM quejas";
        $stm = $db_con->prepare($query);
        $stm->execute();

        while ($row = $stm->fetch(PDO::FETCH_ASSOC)) {
            $tickets[] = $row;
        }
    } catch (PDOException $e) {
        exit("Error en la consulta: " . $e->getMessage());
    }

    return $tickets;
}
function getInfovacations($supervisor) {
    global $db_con;
    $users = [];

    try {
        $query = "SELECT * FROM vacaciones as v INNER JOIN empleado as e on v.empleado = e.numero WHERE e.supervisor = :supervisor";
        $stmt = $db_con->prepare($query);
        $stmt->bindParam(':supervisor', $supervisor, PDO::PARAM_INT); 
        
        // Ejecutar la consulta
        $stmt->execute();

        // Obtener todas las filas de resultados
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            $users[] = $row;
        }
    } catch (PDOException $e) {
        exit("Error en la consulta: " . $e->getMessage());
    }

    return $users;
}

function getInfoEmploy($supervisor) {
    global $db_con;
    $users = [];

    try {
        $query = "SELECT * FROM empleado WHERE supervisor = :supervisor";
        $stmt = $db_con->prepare($query);
        $stmt->bindParam(':supervisor', $supervisor, PDO::PARAM_INT); 
        
        // Ejecutar la consulta
        $stmt->execute();

        // Obtener todas las filas de resultados
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            $users[] = $row;
        }
    } catch (PDOException $e) {
        exit("Error en la consulta: " . $e->getMessage());
    }

    return $users;
}

function showIncidents(){
    global $db_con;
    $incidents = [];

    try {
        $query = "SELECT * FROM incidente";
        $stm = $db_con->prepare($query);
        $stm->execute();

        while ($row = $stm->fetch(PDO::FETCH_ASSOC)) {
            $incidents[] = $row;
        }
    } catch (PDOException $e) {
        exit("Error en la consulta: " . $e->getMessage());
    }

    return $incidents;
}

function showPromotions(){
    global $db_con;
    $promotions = [];

    try {
        $query = "SELECT * FROM promocion";
        $stm = $db_con->prepare($query);
        $stm->execute();

        while ($row = $stm->fetch(PDO::FETCH_ASSOC)) {
            $promotions[] = $row;
        }
    } catch (PDOException $e) {
        exit("Error en la consulta: " . $e->getMessage());
    }

    return $promotions;
}

function showApplication(){
    global $db_con;
    $applications = [];

    try {
        $query = "SELECT * FROM postulacion";
        $stm = $db_con->prepare($query);
        $stm->execute();

        while ($row = $stm->fetch(PDO::FETCH_ASSOC)) {
            $applications[] = $row;
        }
    } catch (PDOException $e) {
        exit("Error en la consulta: " . $e->getMessage());
    }

    return $applications;
}

function showAttandance(){
    global $db_con;
    $attandance = [];

    try {
        $query = "SELECT * FROM ";
        $stm = $db_con->prepare($query);
        $stm->execute();

        while ($row = $stm->fetch(PDO::FETCH_ASSOC)) {
            $attandance[] = $row;
        }
    } catch (PDOException $e) {
        exit("Error en la consulta: " . $e->getMessage());
    }

    return $attandance;
}

?>