<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-danger">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">Kolam Udang</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="/1">Kolam 1</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="/2">Kolam 2</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="/3">Kolam 3</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="/4">Kolam 4</a>
                </li>
              
              
            </ul>
          </div>
        </div>
      </nav>
    <div class="container-fluid">
        <h1>{{$kolam->nama_kolam}}</h1>
        <a name="" id="" class="btn btn-primary" href="/export/{{$kolam->id}}" role="button">print excel</a>
        <table class="table col-md-3">
            <thead>
            <tr>
                <th scope="col">No</th>  
                <th scope="col">Waktu</th>
                <th scope="col">suhu(&deg;C)</th>
                <th scope="col">Ph</th>
            </tr>
            </thead>
            <tbody>
                @foreach ($suhuPh as $sh)    
                <tr>
                    <th scope="row">{{$count++}}</th>
                    <th>{{$sh->waktu}}</th>
                    <th>{{$sh->suhu}}</th>
                    <th>{{$sh->ph}}</th>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    
    <div class="row">
        
        <div id="suhuCh" class="col-md-6"></div>
        <div id="phCh" class="col-md-6"></div>
    </div>
    

    
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <script src="https://code.highcharts.com/highcharts.js"></script>
    <script type="text/javascript">
        const namaKolam = {!!json_encode($kolam->nama_kolam)!!}
        const Xwaktu = {!!json_encode($grWaktu)!!}
        const Ysuhu = {!!json_encode($grSuhu)!!}
        const Yph = {!!json_encode($grPh)!!}
        Highcharts.chart('suhuCh', {
            title: {
                text: `data suhu ${namaKolam}`
            },

            

            yAxis: {
                title: {
                    text: 'Suhu'
                }
            },

            xAxis: {
                categories : Xwaktu,
                title: {
                    text: 'Waktu'
                }
            },

            legend: {
                layout: 'vertical',
                align: 'right',
                verticalAlign: 'middle'
            },

            series: [{
                name: 'Suhu',
                data: Ysuhu
            }],

            responsive: {
                rules: [{
                    condition: {
                        maxWidth: 500
                    },
                    chartOptions: {
                        legend: {
                            layout: 'horizontal',
                            align: 'center',
                            verticalAlign: 'bottom'
                        }
                    }
                }]
            }

            });
            Highcharts.chart('phCh', {
            title: {
                text: `data ph ${namaKolam}`
            },

            

            yAxis: {
                title: {
                    text: 'Ph'
                }
            },

            xAxis: {
                categories : Xwaktu,
                title: {
                    text: 'waktu'
                }
            },

            legend: {
                layout: 'vertical',
                align: 'right',
                verticalAlign: 'middle'
            },


            series: [{
                name: 'Ph',
                data: Yph
            }],

            responsive: {
                rules: [{
                    condition: {
                        maxWidth: 500
                    },
                    chartOptions: {
                        legend: {
                            layout: 'horizontal',
                            align: 'center',
                            verticalAlign: 'bottom'
                        }
                    }
                }]
            }

            });
    </script>
</body>
</html>

