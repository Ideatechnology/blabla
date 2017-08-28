<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/modules/data.js"></script>


<h1 class="judul_kotak_fullborder">Polling</h1>

    <?php if($this->session->flashdata("error_captcha2")): ?>
	  <div class="alert alert-danger">
	  <?php echo $this->session->flashdata("error_captcha2");?>
	  </div>
	  <?php endif; ?>
 


<div id="chart" style="min-width: 310px; height: 400px; margin: 0 auto"></div>



 <script type="text/javascript">

// Create the chart
Highcharts.chart('chart', {
    chart: {
        type: 'column'
    },
    title: {
        text: '<?php echo $poll->judul;?>'
    },
    xAxis: {
        type: 'category'
    },
    yAxis: {
        title: {
            text: 'Total Vote'
        }

    },
    legend: {
        enabled: false
    },
    plotOptions: {
        series: {
            borderWidth: 0,
            dataLabels: {
                enabled: true,
                //format: '{point.y:.1f}%'
            }
        }
    },

    tooltip: {
        headerFormat: '<span style="font-size:11px">{series.name}</span><br>',
        pointFormat: '<span style="color:{point.color}">{point.name}</span>: <b>{point.y:.f}</b><br/>'
    },

    series: [{
        name: 'Brands',
        colorByPoint: true,
        data: [
            <?php 	if(!empty($poll->jawab1)){ ?>
            {
            name: '<?php echo $poll->jawab1;?>',
            y: <?php echo $poll_count->jawab1;?>,
           
        }, 
        <?php } ?>
        <?php if(!empty($poll->jawab2)){ ?>
        {
            name: '<?php echo $poll->jawab2;?>',
            y: <?php echo $poll_count->jawab2;?>,
           
        },
        <?php } ?>
        <?php if(!empty($poll->jawab3)){ ?>
         {
            name: '<?php echo $poll->jawab3;?>',
            y: <?php echo $poll_count->jawab3;?>,
           
        },
        <?php } ?>
        <?php if(!empty($poll->jawab4)){  ?>
         {
            name: '<?php echo $poll->jawab4;?>',
            y: <?php echo $poll_count->jawab4;?>,
           
        }, 
        <?php } ?>
        <?php if(!empty($poll->jawab5)){   ?>
        {
            name: '<?php echo $poll->jawab5;?>',
            y: <?php echo $poll_count->jawab5;?>,
            
        }
        <?php } ?>
        ]
    }],
  
});

 </script>