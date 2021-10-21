<?= $this->layout('layouts/app', ['title' => 'Home']) ?>
<h1>Home</h1>
<a href="destroy" class="btn btn-primary">Salir</a>

<form class="input-group input-group-lg mt-5" method="POST" action="home">
    <input class="form-control input-lg" type="search" placeholder="Search" name="search" id="search" required>
    <span class="input-group-btn">
     <button class="btn btn-outline-success btn-lg" type="submit">Buscar</button>
    </span>
</form>

<div class="row row-cols-2 mt-5">
    <?php 
    if (isset($result)) {
        foreach ($result as $key => $value) {
    ?>
            <div class="col-6">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title"><?= $result[$key]->first_name." ".$result[$key]->last_name; ?></h5>
                        <p class="card-text"><?= $result[$key]->email ?></p>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item"><b>Documento: </b><?= $result[$key]->email ?></li>
                        <li class="list-group-item"><b>Telefono: </b><?= $result[$key]->phone_number ?></li>
                        <li class="list-group-item"><b>País: </b><?= $result[$key]->country ?></li>
                        <li class="list-group-item"><b>Estado: </b><?= $result[$key]->state ?></li>
                        <li class="list-group-item"><b>Ciudad: </b><?= $result[$key]->city ?></li>
                    </ul>
                </div>
            </div>
    <?php
        }
        if (empty($result)) {
            echo '<div class="ml-5 alert alert-danger" role="alert">No se encontraron resultados, recuerde que la busqueda debe ser exacta por nombre o correo</div>';
        }
    }
    ?>
</div>