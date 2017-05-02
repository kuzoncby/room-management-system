<template>
    <div class="section">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12" v-for="room in rooms">
                    <div v-if="loading">
                        <div class="loader"></div>
                        <h1>{{ message }}</h1>
                    </div>
                    <div v-else>
                        <div class="well">
                            <h2 class="text-center">{{ room.room }}</h2>
                            <power-chart :room="room.room"></power-chart>
                            <h3 class="text-center">供电时间</h3>
                            <h3 class="text-center text-warning">{{ room.start_shift }} - {{ room.end_shift }}</h3>
                            <ul class="list-group">
                                <li class="list-group-item" v-for="user in room.user">
                                    <a class="btn btn-block" v-bind:href="/user/ + user.username">{{ user.name }}</a>
                                </li>
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
            });
        }
    }
</script>