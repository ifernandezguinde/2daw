<div class="row">
    <div class="col-12">
        <div class="card shadow mb-4">
            <form method="get" action="">
                <input type="hidden" name="order" value="1">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">Filtros</h6>
                </div>
                <!-- Card Body -->
                <div class="card-body">
                    <!--<form action="./?sec=formulario" method="post">                   -->
                    <div class="row">
                        <div class="col-12 col-lg-4">
                            <div class="mb-3">
                                <label for="nombre">Nombre:</label>
                                <input type="text" class="form-control" name="nombre" id="nombre" value="">
                            </div>
                        </div>
                        <div class="col-12 col-lg-4">
                            <div class="mb-3">
                                <label for="dorsal">Dorsal:</label>
                                <input type="number" class="form-control" name="dorsal" id="dorsal" value="">
                            </div>
                        </div>
                        <div class="col-12 col-lg-4">
                            <div class="mb-3">
                                <label for="min_edad">Edad:</label>
                                <div class="row">
                                    <div class="col-6">
                                        <input type="number" class="form-control" name="min_edad" id="min_edad" value=""
                                               placeholder="Mínima">
                                    </div>
                                    <div class="col-6">
                                        <input type="number" class="form-control" name="max_edad" id="max_edad" value=""
                                               placeholder="Máxima">
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
                                               step="0.01" value="" placeholder="Mínima">
                                    </div>
                                    <div class="col-6">
                                        <input type="number" class="form-control" name="max_estatura" id="max_estatura"
                                               step="0.01" value="" placeholder="Máxima">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-lg-4">
                            <div class="mb-3">
                                <label for="posicion">Posición:</label>
                                <select name="posicion" id="posicion" class="form-control" data-placeholder="Posición">
                                    <option value="">-</option>
                                    <option value="F">
                                        Ala-pívot
                                    </option>
                                    <option value="A">
                                        Alero
                                    </option>
                                    <option value="B">
                                        Base
                                    </option>
                                    <option value="E">
                                        Escolta
                                    </option>
                                    <option value="P">
                                        Pívot
                                    </option>
                                </select>
                            </div>
                        </div>
                        <div class="col-12 col-lg-4">
                            <div class="mb-3">
                                <label for="equipo">Equipo:</label>
                                <select name="equipo[]" id="equipo" class="form-control select2"
                                        data-placeholder="Equipo" multiple="">
                                    <option value="ESTU">
                                        Asefa Estudiantes
                                    </option>
                                    <option value="MANR">
                                        Assignia Manresa
                                    </option>
                                    <option value="SEVI">
                                        Banca Cívica
                                    </option>
                                    <option value="VALL">
                                        Blancos de Rueda Valladolid
                                    </option>
                                    <option value="OBRA">
                                        Bluesens Monbus
                                    </option>
                                    <option value="CAI">
                                        CAI Zaragoza
                                    </option>
                                    <option value="BASK">
                                        Caja Laboral
                                    </option>
                                    <option value="BARC">
                                        FC Barcelona Regal
                                    </option>
                                    <option value="JOVE">
                                        FIATC Mutua Joventut
                                    </option>
                                    <option value="BILB">
                                        Gescrap Bizkaia
                                    </option>
                                    <option value="GRAN">
                                        Gran Canaria 2014
                                    </option>
                                    <option value="SANS">
                                        Lagun Aro GBC
                                    </option>
                                    <option value="ALI">
                                        Lucentum Alicante
                                    </option>
                                    <option value="FUEN">
                                        Mad-Croc Fuenlabrada
                                    </option>
                                    <option value="MADR">
                                        Real Madrid
                                    </option>
                                    <option value="MURC">
                                        UCAM Murcia
                                    </option>
                                    <option value="MALA">
                                        Unicaja
                                    </option>
                                    <option value="VALE">
                                        Valencia Basket
                                    </option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    <div class="col-12 text-right">
                        <a href="/xogadores" value="" class="btn btn-danger">Reiniciar
                            filtros</a>
                        <input type="submit" value="Aplicar filtros" class="btn btn-primary ml-2">
                    </div>
                </div>
            </form>
        </div>
    </div>
    <div class="col-12">
        <div class="card shadow mb-4">
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
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
                            <a href="/xogadores?&amp;order=-1">
                                Nombre <i class="fas fa-sort-amount-down-alt"></i> </a>
                        </th>
                        <th>
                            <a href="/xogadores?&amp;order=2">
                                Licencia </a>
                        </th>
                        <th>
                            <a href="/xogadores?&amp;order=3">
                                Equipo </a>
                        </th>
                        <th>
                            <a href="/xogadores?&amp;order=4">
                                Posición </a>
                        </th>
                        <th>
                            <a href="/xogadores?&amp;order=5">
                                Dorsal </a>
                        </th>
                        <th>
                            <a href="/xogadores?&amp;order=6">
                                Estatura </a>
                        </th>
                        <th>
                            <a href="/xogadores?&amp;order=7">
                                Edad </a>
                        </th>
                        <th>
                            <a href="/xogadores?&amp;order=8">
                                Nacionalidade </a>
                        </th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr class="">
                        <td>Abia, Larry</td>
                        <td>25461</td>
                        <td>Valencia Basket</td>
                        <td>Escolta</td>
                        <td>32</td>
                        <td>1.96</td>
                        <td>30</td>
                        <td>España</td>
                    </tr>
                    <tr class="">
                        <td>Abrines, Álex</td>
                        <td>25444</td>
                        <td>Unicaja</td>
                        <td>Alero</td>
                        <td>16</td>
                        <td>1.96</td>
                        <td>30</td>
                        <td>España</td>
                    </tr>
                    <tr class="">
                        <td>Achara, Kieron</td>
                        <td>25247</td>
                        <td>Assignia Manresa</td>
                        <td>Pívot</td>
                        <td>20</td>
                        <td>2.07</td>
                        <td>40</td>
                        <td>Reino Unido</td>
                    </tr>
                    <tr class="">
                        <td>Aguilar, Pablo</td>
                        <td>25300</td>
                        <td>CAI Zaragoza</td>
                        <td>Ala-pívot</td>
                        <td>34</td>
                        <td>2.03</td>
                        <td>34</td>
                        <td>España</td>
                    </tr>
                    <tr class="">
                        <td>Almazán, Pablo</td>
                        <td>25293</td>
                        <td>CAI Zaragoza</td>
                        <td>Alero</td>
                        <td>12</td>
                        <td>2.00</td>
                        <td>35</td>
                        <td>España</td>
                    </tr>
                    <tr class="">
                        <td>Alvarado, Óscar</td>
                        <td>25363</td>
                        <td>Gran Canaria 2014</td>
                        <td>Base</td>
                        <td>19</td>
                        <td>1.84</td>
                        <td>32</td>
                        <td>España</td>
                    </tr>
                    <tr class="table-warning">
                        <td>Archibald, Robert</td>
                        <td>25296</td>
                        <td>CAI Zaragoza</td>
                        <td>Pívot</td>
                        <td>21</td>
                        <td>2.12</td>
                        <td>44</td>
                        <td>Reino Unido</td>
                    </tr>
                    <tr class="">
                        <td>Arteaga, Víctor</td>
                        <td>25274</td>
                        <td>Blancos de Rueda Valladolid</td>
                        <td>Ala-pívot</td>
                        <td>22</td>
                        <td>2.09</td>
                        <td>30</td>
                        <td>España</td>
                    </tr>
                    <tr class="table-warning">
                        <td>Asselin, Josh</td>
                        <td>25236</td>
                        <td>Assignia Manresa</td>
                        <td>Pívot</td>
                        <td>5</td>
                        <td>2.10</td>
                        <td>45</td>
                        <td>República Dominicana</td>
                    </tr>
                    <tr class="">
                        <td>Astilleros, Fabio</td>
                        <td>25383</td>
                        <td>Lucentum Alicante</td>
                        <td>Alero</td>
                        <td>7</td>
                        <td>1.90</td>
                        <td>30</td>
                        <td>España</td>
                    </tr>
                    <tr class="">
                        <td>Augustine, James</td>
                        <td>25423</td>
                        <td>UCAM Murcia</td>
                        <td>Ala-pívot</td>
                        <td>5</td>
                        <td>2.08</td>
                        <td>40</td>
                        <td>Estados Unidos</td>
                    </tr>
                    <tr class="table-warning">
                        <td>Báez, Eulis</td>
                        <td>25331</td>
                        <td>FIATC Mutua Joventut</td>
                        <td>Ala-pívot</td>
                        <td>12</td>
                        <td>2.01</td>
                        <td>42</td>
                        <td>España</td>
                    </tr>
                    <tr class="">
                        <td>Balvin, Ondrej</td>
                        <td>25253</td>
                        <td>Banca Cívica</td>
                        <td>Pívot</td>
                        <td>7</td>
                        <td>2.17</td>
                        <td>31</td>
                        <td>República Checa</td>
                    </tr>
                    <tr class="">
                        <td>Banic, Marko</td>
                        <td>25346</td>
                        <td>Gescrap Bizkaia</td>
                        <td>Ala-pívot</td>
                        <td>13</td>
                        <td>2.05</td>
                        <td>39</td>
                        <td>Croacia</td>
                    </tr>
                    <tr class="">
                        <td>Barlow, David</td>
                        <td>25432</td>
                        <td>UCAM Murcia</td>
                        <td>Alero</td>
                        <td>20</td>
                        <td>2.05</td>
                        <td>40</td>
                        <td>Australia</td>
                    </tr>
                    <tr class="table-warning">
                        <td>Barnes, Lamont</td>
                        <td>25393</td>
                        <td>Lucentum Alicante</td>
                        <td>Pívot</td>
                        <td>31</td>
                        <td>2.08</td>
                        <td>45</td>
                        <td>Estados Unidos</td>
                    </tr>
                    <tr class="">
                        <td>Baron Jr., Jimmy</td>
                        <td>25377</td>
                        <td>Lagun Aro GBC</td>
                        <td>Escolta</td>
                        <td>20</td>
                        <td>1.91</td>
                        <td>38</td>
                        <td>Estados Unidos</td>
                    </tr>
                    <tr class="">
                        <td>Barrera, Alex</td>
                        <td>25340</td>
                        <td>FIATC Mutua Joventut</td>
                        <td>Escolta</td>
                        <td>24</td>
                        <td>1.96</td>
                        <td>32</td>
                        <td>España</td>
                    </tr>
                    <tr class="table-warning">
                        <td>Barton, Lubos</td>
                        <td>25341</td>
                        <td>FIATC Mutua Joventut</td>
                        <td>Alero</td>
                        <td>31</td>
                        <td>2.02</td>
                        <td>44</td>
                        <td>República Checa</td>
                    </tr>
                    <tr class="">
                        <td>Bassas, Ferran</td>
                        <td>25328</td>
                        <td>FIATC Mutua Joventut</td>
                        <td>Base</td>
                        <td>6</td>
                        <td>1.81</td>
                        <td>32</td>
                        <td>España</td>
                    </tr>
                    </tbody>
                </table>
            </div>
            <div class="card-footer">
                <nav aria-label="Navegacion por paginas">
                    <ul class="pagination justify-content-center">
                        <li class="page-item active"><a class="page-link" href="#">1</a></li>
                        <li class="page-item">
                            <a class="page-link" href="/xogadores?&amp;page=2" aria-label="Next">
                                <span aria-hidden="true">&gt;</span>
                                <span class="sr-only">Next</span>
                            </a>
                        </li>
                        <li class="page-item">
                            <a class="page-link" href="/xogadores?&amp;page=13" aria-label="Last">
                                <span aria-hidden="true">»</span>
                                <span class="sr-only">Last</span>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</div>