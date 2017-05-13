<template>
    <canvas ref="power" class="center-block"></canvas>
</template>

<script>
    import Chart from 'chart.js';
    export default {
        props: ['room'],
        mounted() {
            var url = '/v1/room/' + this.room;
            this.$http.get(url).then((response) => {
                var current = response.data.current_power;
                var total = response.data.total_power;
                var ctx = this.$refs.power;
                this.renderChart(ctx, current, total);
            });
        },
        methods: {
            renderChart: function (ctx, current, total) {
                var myChart = new Chart(ctx, {
                    type: 'bar',
                    data: {
                        labels: ["此时（W）", "总和（度）"],
                        datasets: [{
                            label: '# 能量消耗',
                            data: [current, total],
                            backgroundColor: [
                                'rgba(255, 99, 132, 0.2)',
                                'rgba(54, 162, 235, 0.2)'
                            ],
                            borderColor: [
                                'rgba(255,99,132,1)',
                                'rgba(54, 162, 235, 1)'
                            ],
                            borderWidth: 1
                        }]
                    },
                    options: {
                        scales: {
                            yAxes: [{
                                ticks: {
                                    beginAtZero: true
                                }
                            }]
                        }
                    }
                });
            }
        }
    }
</script>
