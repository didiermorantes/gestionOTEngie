<template>
            <div class="card">
                <div class="card-header">Men&uacute; Principal</div>

                <div class="card-body">

                <a href="./gestion" class="btn btn-warning btn-block">Gestionar Trabajadores</a>

                <a href="./formCargarTrabajadores" class="btn btn-success btn-block">CargarTrabajadores Masivo</a>

                <a href="./orden" class="btn btn-warning btn-block">Gestionar &Oacute;rdenes</a>

                <a href="./formCargarOrdenes" class="btn btn-success btn-block">CargarOrdenes Masivo</a>

                <a href="./asignacion" class="btn btn-warning btn-block">Asignar &Oacute;rdenes Pendientes</a>

                <a href="./reporte" class="btn btn-warning btn-block">Reporte de &Oacute;rdenes Ejecutadas </a>
                


                </div>
            </div>
</template>

<script>
    export default {
        mounted() {
            console.log('Componente menu montado.')
        }
    }
</script>