<div>
    <br>
    <body>
        <br>
            <script src="https://cdn.jsdelivr.net/npm/chart.js@3.9.1/dist/chart.min.js"></script>
            <form >
                <div class="busqueda">
                    <div class="row g-3">
                        <div class="col-sm" >
                            <input type="text" class="form-control"  id="año" placeholder="Año a buscar"  wire:model="anio" style="width:300px ;">
                           
                        </div>
                         
                    </div>       
                </div>
            </form>
            <br>
            <br>    
            <div class="chart-container">
                <canvas id="Chart" ></canvas>
            </div>
            
           
            <script>
            
            let valores= [] 
            const ctx = document.getElementById('Chart').getContext('2d');
            document.addEventListener('livewire:load', function () {
                    valores = @this.valores
                    console.log(valores) 
            const myChart = new Chart(ctx, {
                type: 'bar',
                data: {
                    labels: ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'],
                    datasets: [{
                        label: ' Cantidad de usuarios',
                        data: valores,
                        backgroundColor: [
                            'rgba(255, 99, 132, 0.2)',
                            'rgba(54, 162, 235, 0.2)',
                            'rgba(255, 206, 86, 0.2)',
                            'rgba(75, 192, 192, 0.2)',
                            'rgba(153, 102, 255, 0.2)',
                            'rgba(255, 159, 64, 0.2)',
                            'rgba(255, 99, 132, 0.2)',
                            'rgba(54, 162, 235, 0.2)',
                            'rgba(255, 206, 86, 0.2)',
                            'rgba(75, 192, 192, 0.2)',
                            'rgba(153, 102, 255, 0.2)',
                            'rgba(255, 159, 64, 0.2)'
                        ],
                        borderColor: [
                            'rgba(255, 99, 132, 1)',
                            'rgba(54, 162, 235, 1)',
                            'rgba(255, 206, 86, 1)',
                            'rgba(75, 192, 192, 1)',
                            'rgba(153, 102, 255, 1)',
                            'rgba(255, 159, 64, 1)',
                            'rgba(255, 99, 132, 1)',
                            'rgba(54, 162, 235, 1)',
                            'rgba(255, 206, 86, 1)',
                            'rgba(75, 192, 192, 1)',
                            'rgba(153, 102, 255, 1)',
                            'rgba(255, 159, 64, 1)'
                        ],
                        borderWidth: 1
                    }]
                },
                options: {
                    scales: {
                        y: {
                            beginAtZero: true
                        }
                    }
                }
            });
            var updateChart = function() {
            $.ajax({
            url: "{{ route('reporteUsers') }}",
            type: 'GET',
            dataType: 'json',
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            success: function(data) {
                Chart.data.labels = data.labels;
                Chart.data.datasets[0].data = data.data;
                Chart.update();
            },
            error: function(data){
                console.log(data);
            }
            });
        }
        
        updateChart();
        setInterval(() => {
            updateChart();
        }, 1000);
        })
            </script>
            
            
            <br>
            <br>
    </body>
</div>
<style>


.canvas {
  border: 1px dotted red;
}

.chart-container {
  position: relative;
  margin: auto;
  height: 80vh;
  width: 80vw;
  background: #1D1F20;
  padding: 16px;
}

.chart-container-segundo {
  position: relative;
  margin: auto;
  height: 80vh;
  width: 80vw;
  background: #1D1F20;
  padding: 50px;
}

.busqueda{
    position: relative;
    margin: auto;
    right: -125px;
    
  
}
</style>
