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
                        <h1 class="text-center">{{ room.room }}</h1>
                        <power-chart :room="room.room"></power-chart>
                        <!--<button class="btn btn-block btn-primary" data-toggle="button">停止供电</button>-->
                        <div class="togglebutton text-center">
                            <label>
                                <input type="checkbox" checked=""><span class="toggle"></span> 供电
                            </label>
                        </div>
                        <h3 class="text-center">供电时间</h3>
                        <h3 class="text-center text-warning">{{ room.start_shift }} - {{ room.end_shift }}</h3>
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