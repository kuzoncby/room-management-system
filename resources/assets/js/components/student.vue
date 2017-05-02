<template>
    <div class="well">
        <!--<h1>{{ $user - > name }}</h1>-->
        <table class="table table-bordered table-condensed table-hover table-striped">
            <thead>
            <tr>
                <th>项目</th>
                <th>值</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>email</td>
                <!--<td>{{ $user - > email }}</td>-->
            </tr>
            <tr>
                <td>用户名</td>
                <!--<td>{{ $user - > username }}</td>-->
            </tr>
            <tr>
                <td>类型</td>
                <!--<td>{{ $user - > type }}</td>-->
            </tr>
            <tr>
                <td>房间</td>
                <td>
                    <!--<a href="/room/{{ $user->room->room }}">{{ $user - > room - > room }}</a>-->
                </td>
            </tr>
            </tbody>
        </table>
        <a href="/home" class="btn btn-primary btn-large btn-raised">返回</a>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                message: '',
                loading: true,
                user: {}
            }
        },
        mounted() {
            this.message = '载入中...';
            var url = '/api/user';
            this.$http.get(url).then((response) => {
                console.log(response.data);
                this.rooms = response.data;
                this.loading = false;
            }, (error) => {
                console.log(error.data);
            });
        }
    }
</script>