<template>
            <div class="card">
                <div class="card-header">Men&uacute; Principal</div>

                <div class="card-body">

                <a href="./gestion" class="btn btn-warning btn-block">Gestionar Trabajadores</a>

                <a href="./orden" class="btn btn-warning btn-block">Gestionar Ordenes</a>
                


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