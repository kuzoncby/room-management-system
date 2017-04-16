<template>
    <div class="section">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-md-offset-3 well">
                    <div v-if="loading">
                        <div class="loader"></div>
                        <h1 class="text-center">载入中...</h1>
                    </div>
                    <div v-else>
                        <power-chart :room="room.room"></power-chart>
                        <h1 class="text-center">{{ room.room }}</h1>
                        <i class="material-icons text-info">star_rate</i>
                        <i class="material-icons text-info">star_rate</i>
                        <i class="material-icons text-info">star_rate</i>
                        <table class="table table-bordered table-condensed table-hover table-striped">
                            <thead>
                            <tr>
                                <th>姓名</th>
                                <th>email</th>
                                <th>用户名</th>
                                <th>类型</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr v-for="user in room.user">
                                <td>
                                    <a v-bind:href="/user/+ user.username">{{ user.name }}</a>
                                </td>
                                <td>{{ user.email }}</td>
                                <td>{{ user.username }}</td>
                                <td>{{ user.type }}</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    import Chart from 'chart.js';
    export default {
        data() {
            return {
                loading: true,
                room: {}
            }
        },
        mounted() {
            var url = '/v1' + window.location.pathname;
            this.$http.get(url).then((response) => {
                this.room = response.data;
                this.loading = false;
            });
        }
    }
</script>