<template>
    <div class="section">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <div v-if="loading">
                        <div class="loader"></div>
                        <h1>{{ message }}</h1>
                    </div>
                    <div v-else>
                        <img src="http://pingendo.github.io/pingendo-bootstrap/assets/placeholder.png"
                             class="img-responsive">
                        <h2>101</h2>
                        <ul class="list-group">
                            <li class="list-group-item">Cras justo odio</li>
                            <li class="list-group-item">Dapibus ac facilisis in</li>
                            <li class="list-group-item">Morbi leo risus</li>
                            <li class="list-group-item">Porta ac consectetur ac</li>
                            <li class="list-group-item">Vestibulum at eros</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>
<script>
    export default {
        data() {
            return {
                message: '',
                loading: true,
                rooms: {}
            }
        },
        mounted() {
            this.message = '载入中...';
            var url = '/v1/users';
            this.$http.get(url).then((response) => {
                this.rooms = response.data;
                console.log(this.rooms);
            });
        }
    }
</script>