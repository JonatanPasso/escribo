<template>
    <div class="container" id="app">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">1º Teste Escribo - JavaScript</div>

                    <div class="card-body">
                        <div class="form-row">
                            <div class="form-group col-md-4">
                                <label for="inputNumero">Entre com um número inteiro</label>
                                <input type="email" class="form-control" id="inputNumero" placeholder="Número" v-model="numero">
                            </div>
                        </div>
                        <button class="btn btn-primary" v-bind:disabled="numero == ''" @click="calcularInteiro">Calcular</button>
                        <button class="btn btn-secondary" v-bind:disabled="numero == ''">Limpar</button>
                    </div>
                </div>
            </div>
        </div>
        <hr>
        <div class="row justify-content-center" id="lista">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Resultado</div>

                    <div class="card-body table-responsive" style="text-align: center">
                        <h3>Somatório é: {{resultado}}</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>

export default {

    name: "TesteEscribo",

    mounted() {
        var self = this;


    },

    methods: {

        calcularInteiro: function (){

            var self = this;

            var data = {
                inteiro: self.numero
            }

            axios.post('/calcular-numero', data).then(function(response){

                self.resultado = response.data;

            });
        }

    },

    data: function (){
        return {
            numero: '',
            resultado: ''
        }
    }
}

</script>
