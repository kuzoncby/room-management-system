<template>
    <div class="section">
        <div class="container">
            <div class="row">
                <div class="col-md-3" v-for="room in rooms">
                    <div v-if="loading">
                        <div class="loader"></div>
                        <h1>{{ message }}</h1>
                    </div>
                    <div v-else>
                        <div class="well">
                            <img src="http://pingendo.github.io/pingendo-bootstrap/assets/placeholder.png"
                                 class="img-responsive">
                            <h2 v-text="room.room"></h2>
                            <ul class="list-group">
                                <li class="list-group-item" v-for="user in room.user">{{ user.name }}</li>
                            </ul>
                        </div>
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
            var url = '/v1/rooms';
            this.$http.get(url).then((response) => {
                this.rooms = response.data;
                this.loading = false;
                console.log(this.rooms);
            });
        }
    }
</script>