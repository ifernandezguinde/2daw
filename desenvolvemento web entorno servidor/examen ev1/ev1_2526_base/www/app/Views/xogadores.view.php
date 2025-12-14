<!--Inicio HTML -->
<div class="row">
    <div class="col-12">
        <div class="card shadow mb-4">
            <form method="get" action="">
                <input type="hidden" name="order" value="<?php echo $order; ?>"/>
                <div
                        class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">Filtros</h6>
                </div>
                <!-- Card Body -->
                <div class="card-body">
                    <!--<form action="./?sec=formulario" method="post">                   -->
                    <div class="row">
                        <div class="col-12 col-lg-4">
                            <div class="mb-3">
                                <label for="nombre">Nombre:</label>
                                <input type="text" class="form-control" name="nombre" id="nombre"
                                       value="<?php echo $input['nombre'] ?? '' ?>"/>
                            </div>
                        </div>
                        <div class="col-12 col-lg-4">
                            <div class="mb-3">
                                <label for="dorsal">Dorsal:</label>
                                <input type="number" class="form-control" name="dorsal" id="dorsal"
                                       value="<?php echo $input['dorsal'] ?? '' ?>"/>
                            </div>
                        </div>
                        <div class="col-12 col-lg-4">
                            <div class="mb-3">
                                <label for="min_edad">Edad:</label>
                                <div class="row">
                                    <div class="col-6">
                                        <input type="number" class="form-control" name="min_edad" id="min_edad"
                                               value="<?php echo $input['min_edad'] ?? '' ?>"
                                               placeholder="Mínima"/>
                                    </div>
                                    <div class="col-6">
                                        <input type="number" class="form-control" name="max_edad" id="max_edad"
                                               value="<?php echo $input['max_edad'] ?? '' ?>"
                                               placeholder="Máxima"/>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-lg-4">
                            <div class="mb-3">
                                <label for="min_estatura">Estatura:</label>
                                <div class="row">
                                    <div class="col-6">
                                        <input type="number" class="form-control" name="min_estatura" id="min_estatura"
                                               step="0.01" value="<?php echo $input['min_estatura'] ?? '' ?>" placeholder="Mínima"/>
                                    </div>
                                    <div class="col-6">
                                        <input type="number" class="form-control" name="max_estatura" id="max_estatura"
                                               step="0.01" value="<?php echo $input['max_estatura'] ?? '' ?>" placeholder="Máxima"/>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-lg-4">
                            <div class="mb-3">
                                <label for="posicion">Posición:</label>
                                <select name="posicion" id="posicion" class="form-control" data-placeholder="Posición">
                                    <option value="">-</option>
                                    <?php
                                    foreach ($posiciones as $posicion) {
                                        ?>
                                        <option value="<?php echo $posicion['codigo_posicion']; ?>" <?php echo isset($input['posicion']) && $input['posicion'] == $posicion['codigo_posicion'] ? 'selected' : '' ?>>
                                            <?php echo $posicion['nome_posicion'] ?>
                                        </option>
                                        <?php
                                    }
                                    ?>
                                </select>
                            </div>
                        </div>
                        <div class="col-12 col-lg-4">
                            <div class="mb-3">
                                <label for="equipo">Equipo:</label>
                                <select name="equipo[]" id="equipo" class="form-control select2"
                                        data-placeholder="Equipo" multiple>
                                    <?php
                                    foreach ($equipos as $equipo) {
                                        ?>
                                        <option value="<?php echo $equipo['codigo']; ?>" <?php echo isset($input['equipo']) && in_array($equipo['codigo'], $input['equipo']) ? 'selected' : '' ?>>
                                            <?php echo $equipo['nome_equipo'] ?>
                                        </option>
                                        <?php
                                    }
                                    ?>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    <div class="col-12 text-right">
                        <a href="<?php echo strtok($_SERVER['REQUEST_URI'], '?'); ?>" value="" class="btn btn-danger">Reiniciar
                            filtros</a>
                        <input type="submit" value="Aplicar filtros" class="btn btn-primary ml-2"/>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <?php
    if ($xogadores !== []) {
        ?>
        <div class="col-12">
            <div class="card shadow mb-4">
                <div
                        class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">Jugadores</h6>
                </div>
                <!-- Card Body -->
                <div class="card-body" id="card_table">
                    <div id="button_container" class="mb-3"></div>
                    <!--<form action="./?sec=formulario" method="post">                   -->
                    <table id="tabladatos" class="table table-striped">
                        <thead>
                        <tr>
                            <th>
                                <a href="<?php echo $url ?>&order=<?php echo $order === 1 ? '-' : ''; ?>1">
                                    Nombre <?php echo abs($order) === 1 ? '<i class="fas fa-sort-amount-' . (($order < 0) ? 'up' : 'down') . '-alt"></i>' : ''; ?>
                                </a>
                            </th>
                            <th>
                                <a href="<?php echo $url ?>&order=<?php echo $order === 2 ? '-' : ''; ?>2">
                                    Licencia <?php echo abs($order) === 2 ? '<i class="fas fa-sort-amount-' . (($order < 0) ? 'up' : 'down') . '-alt"></i>' : ''; ?>
                                </a>
                            </th>
                            <th>
                                <a href="<?php echo $url ?>&order=<?php echo $order === 3 ? '-' : ''; ?>3">
                                    Equipo <?php echo abs($order) === 3 ? '<i class="fas fa-sort-amount-' . (($order < 0) ? 'up' : 'down') . '-alt"></i>' : ''; ?>
                                </a>
                            </th>
                            <th>
                                <a href="<?php echo $url ?>&order=<?php echo $order === 4 ? '-' : ''; ?>4">
                                    Posición <?php echo abs($order) === 4 ? '<i class="fas fa-sort-amount-' . (($order < 0) ? 'up' : 'down') . '-alt"></i>' : ''; ?>
                                </a>
                            </th>
                            <th>
                                <a href="<?php echo $url ?>&order=<?php echo $order === 5 ? '-' : ''; ?>5">
                                    Dorsal <?php echo abs($order) === 5 ? '<i class="fas fa-sort-amount-' . (($order < 0) ? 'up' : 'down') . '-alt"></i>' : ''; ?>
                                </a>
                            </th>
                            <th>
                                <a href="<?php echo $url ?>&order=<?php echo $order === 6 ? '-' : ''; ?>6">
                                    Estatura <?php echo abs($order) === 6 ? '<i class="fas fa-sort-amount-' . (($order < 0) ? 'up' : 'down') . '-alt"></i>' : ''; ?>
                                </a>
                            </th>
                            <th>
                                <a href="<?php echo $url ?>&order=<?php echo $order === 7 ? '-' : ''; ?>7">
                                    Edad <?php echo abs($order) === 7 ? '<i class="fas fa-sort-amount-' . (($order < 0) ? 'up' : 'down') . '-alt"></i>' : ''; ?>
                                </a>
                            </th>
                            <th>
                                <a href="<?php echo $url ?>&order=<?php echo $order === 8 ? '-' : ''; ?>8">
                                    Nacionalidade <?php echo abs($order) === 8 ? '<i class="fas fa-sort-amount-' . (($order < 0) ? 'up' : 'down') . '-alt"></i>' : ''; ?>
                                </a>
                            </th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php
                        foreach ($xogadores as $xogador) {
                            ?>
                            <tr class="<?php echo $xogador['idade'] > 40 ? 'table-warning' : '' ?>">
                                <td><?php echo $xogador['nome']; ?></td>
                                <td><?php echo $xogador['numero_licencia'] ?></td>
                                <td><?php echo $xogador['nome_equipo'] ?></td>
                                <td><?php echo $xogador['nome_posicion']; ?></td>
                                <td><?php echo $xogador['numero']; ?></td>
                                <td><?php echo $xogador['estatura']; ?></td>
                                <td><?php echo $xogador['idade']; ?></td>
                                <td><?php echo $xogador['nome_nacionalidade'] ?? '-'; ?></td>
                            </tr>
                            <?php
                        }
                        ?>
                        </tbody>
                    </table>
                </div>
                <div class="card-footer">
                    <nav aria-label="Navegacion por paginas">
                        <ul class="pagination justify-content-center">
                            <?php
                            if ($page > 1) {
                                ?>
                                <li class="page-item">
                                    <a class="page-link" href="<?php echo $urlPage; ?>&page=1" aria-label="First">
                                        <span aria-hidden="true">&laquo;</span>
                                        <span class="sr-only">First</span>
                                    </a>
                                </li>
                                <li class="page-item">
                                    <a class="page-link" href="<?php echo $urlPage; ?>&page=<?php echo $page - 1 ?>"
                                       aria-label="Previous">
                                        <span aria-hidden="true">&lt;</span>
                                        <span class="sr-only">Previous</span>
                                    </a>
                                </li>
                                <?php
                            }
                            ?>
                            <li class="page-item active"><a class="page-link" href="#"><?php echo $page ?></a></li>
                            <?php
                            if ($page < $pageMax) {
                                ?>
                                <li class="page-item">
                                    <a class="page-link" href="<?php echo $urlPage; ?>&page=<?php echo $page + 1 ?>"
                                       aria-label="Next">
                                        <span aria-hidden="true">&gt;</span>
                                        <span class="sr-only">Next</span>
                                    </a>
                                </li>
                                <li class="page-item">
                                    <a class="page-link" href="<?php echo $urlPage; ?>&page=<?php echo $pageMax ?>"
                                       aria-label="Last">
                                        <span aria-hidden="true">&raquo;</span>
                                        <span class="sr-only">Last</span>
                                    </a>
                                </li>
                                <?php
                            }
                            ?>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
        <?php
    } else {
        ?>
        <div class="col-12">
            <div class="callout callout-warning">
                <h5>No existen jugadores que cumplan los requisitos</h5>
                <p>Realice otra búsqueda o reinicie el listado para ver resultados.</p>
            </div>
        </div>
        <?php
    }
    ?>
</div>
<!--Fin HTML -->