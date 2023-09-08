<h1 class="text-center">Puntos en Nicaragua en el Mapa</h1>
<div class="text-center">
    <div class="btn-group" role="group">
        <button class="btn btn-danger btn-sm" id="actualizar" name="actualizar">ACTUALIZAR</button>
        <a class="btn btn-primary btn-sm" href="/prueba_mapas/mapa">
            <i class="bi bi-globe-americas me-2"></i> REINICIAR
        </a>
    </div>
</div>

<div class="row justify-content-center mb-3">
    <div class="col-lg-11 border rounded mt-2" id="mapa" name="mapa" style="height: 60vh; min-height: auto;">

    </div>
</div>
<script src="<?= asset('build/js/mapa/index.js') ?>"></script>