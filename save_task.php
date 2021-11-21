<?php 
include("db.php");
if (isset($_POST ['save_task'])){
    $title = $_POST['titulo'];
    $descripcionT = $_POST['descripcion'];
    $query =  "INSERT INTO tareas(titulo, descripcion) VALUES ('$title','$descripcionT')";
    $resultado = mysqli_query($conn, $query);
    if (!$resultado) {
        die("Query Failed");
    }
    $_SESSION['message'] = 'tarea guardada sactisfactoriamente';
    $_SESSION['message_type'] = 'success';
    header("Location: index.php");
}
?>