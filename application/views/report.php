 <link href="<?= base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet" />
        <link href="<?= base_url(); ?>assets/css/bootstrap-responsive.min.css" rel="stylesheet" />

        <link rel="stylesheet" href="<?= base_url(); ?>assets/css/ace.min.css" />
<link rel="stylesheet" href="<?= base_url(); ?>css/mine.css" />

    <div class="main-content">
    <style>
.form-horizontal .controls {
    margin-left: 2px;
}
</style>

    <div class="page-content">
       
                          <?php echo $this->session->flashdata('msg'); ?>
        
            <div class="row-fluid">
                       <div id="container" style="min-width: 310px; height: 200px; margin: 0 auto"></div>
<div id="container2" style="height: 300px"></div>
<div id="container3" style="height: 300px"></div>
                 
</div>
                                                     
 </div>
                                                


</div><!--/.main-content-->
<script type="text/javascript" src="<?= base_url(); ?>assets/js/jquery-2.0.3.min.js"></script>
<script type="text/javascript">
$(function () {
    $('#container').highcharts({
        chart: {
            zoomType: 'xy'
        },
        title: {
            text: 'Average Monthly number of epidemics'
        },
        subtitle: {
            text: ''
        },
        xAxis: [{
            categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun',
                'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
            crosshair: true
        }],
        yAxis: [{ // Primary yAxis
            labels: {
                format: '{value}million',
                style: {
                    color: Highcharts.getOptions().colors[1]
                }
            },
            title: {
                text: 'Number/Count',
                style: {
                    color: Highcharts.getOptions().colors[1]
                }
            }
        }, { // Secondary yAxis
            title: {
                text: 'Number',
                style: {
                    color: Highcharts.getOptions().colors[0]
                }
            },
            labels: {
                format: '{value} million',
                style: {
                    color: Highcharts.getOptions().colors[0]
                }
            },
            opposite: true
        }],
        tooltip: {
            shared: true
        },
        legend: {
            layout: 'vertical',
            align: 'left',
            x: 120,
            verticalAlign: 'top',
            y: 100,
            floating: true,
            backgroundColor: (Highcharts.theme && Highcharts.theme.legendBackgroundColor) || '#FFFFFF'
        },
        series: [{
            name: 'Number',
            type: 'column',
            yAxis: 1,
            data: [49.9, 71.5, 106.4, 129.2, 144.0, 176.0, 135.6, 148.5, 216.4, 194.1, 95.6, 54.4],
            tooltip: {
                valueSuffix: ' million'
            }

        }, {
            name: 'Count',
            type: 'spline',
            data: [7.0, 6.9, 9.5, 14.5, 18.2, 21.5, 25.2, 26.5, 23.3, 18.3, 13.9, 9.6],
            tooltip: {
                valueSuffix: 'M'
            }
        }]
    });
});
		</script>
                
          <script type="text/javascript">
$(function () {
    $('#container2').highcharts({

        chart: {
            type: 'column',
            options3d: {
                enabled: true,
                alpha: 15,
                beta: 15,
                viewDistance: 25,
                depth: 40
            },
            marginTop: 80,
            marginRight: 40
        },

        title: {
            text: 'Total number of students, grouped by gender'
        },

        xAxis: {
            categories: ['Uganda', 'Kenya', 'Tanzania', 'Rwanda', 'South Sudan']
        },

        yAxis: {
            allowDecimals: false,
            min: 0,
            title: {
                text: 'Number of students'
            }
        },

        tooltip: {
            headerFormat: '<b>{point.key}</b><br>',
            pointFormat: '<span style="color:{series.color}">\u25CF</span> {series.name}: {point.y} / {point.stackTotal}'
        },

        plotOptions: {
            column: {
                stacking: 'normal',
                depth: 40
            }
        },

        series: [{
            name: 'Uganda',
            data: [5, 3, 4, 7, 2],
            stack: 'male'
        }, {
            name: 'Kenya',
            data: [3, 4, 4, 2, 5],
            stack: 'male'
        }, {
            name: 'Tanzania',
            data: [2, 5, 6, 2, 1],
            stack: 'female'
        }, {
            name: 'South Sudan',
            data: [3, 0, 4, 4, 3],
            stack: 'female'
        }]
    });
});


		</script>
                <script type="text/javascript">
$(function () {
    $('#container3').highcharts({
        chart: {
            type: 'pie',
            options3d: {
                enabled: true,
                alpha: 45
            }
        },
        title: {
            text: 'Daily epidermic reports'
        },
        subtitle: {
            text: 'reports pre country'
        },
        plotOptions: {
            pie: {
                innerSize: 100,
                depth: 45
            }
        },
        series: [{
            name: 'Disease',
            data: [
                ['Uganda', 8],
                ['Kenya', 3],
                ['Tanzania', 10],
                ['Rwanda', 6],
                ['South Sudan', 8],
                ['Burundi', 4]
                
            ]
        }]
    });
});
		</script>
                
<script src="<?= base_url(); ?>/js/highcharts.js"></script>
<script src="<?= base_url(); ?>js/highcharts-3d.js"></script>
<script src="<?= base_url(); ?>/js/modules/exporting.js"></script>