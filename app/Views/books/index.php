<?= $header ?>
    <a href="<?php base_url('create') ?>">Crear un libro</a>
        <table class="table table-light">
            <thead class="thdead-light">
                <th>#</th>
                <th>Imagen</th>
                <th>Nombre</th>
                <th>Acciones</th>
            </thead>
            <tbody>
            <?php foreach($books as $book): ?>
            <th><?php echo $book['id'] ?></th>
                <td><?php echo $book['image']?></td>
                <td><?php echo $book['name']?></td>
                <td>Editar / Borrar></td>
                <?php endforeach; ?>
            
            </tbody>
        </table>
 <?=$footer?>