<?php
include_once 'utils.php';



?>   

<div class="table">
    <table class="table table-striped table-hover">
        <thead class="thead">
            <tr>                            
                <th>Identificador</th>
                <th>Descriptción</th>
                <th>Estado</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($listadoTarefas as $tarefa):?>
            <tr>
                <td><?php echo $tarefa["id"]; ?></td>
                <td><?php echo filtrar($tarefa["descripcion"]); ?></td>
                <td><?php echo filtrar($tarefa["estado"]); ?></td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>  
</div>        
    