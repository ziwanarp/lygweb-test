<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>lygweb-test</title>
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
        <link href="https://cdn.datatables.net/1.13.8/css/dataTables.jqueryui.min.css" rel="stylesheet" />
        <link href="{{ asset('/css/styles.css') }}" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
        <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
        <script src="https://cdn.datatables.net/1.13.8/js/jquery.dataTables.min.js"></script>
        <script src="https://cdn.datatables.net/1.13.8/js/dataTables.jqueryui.min.js"></script>
    </head>
    <body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <!-- Navbar Brand-->
            <a class="navbar-brand ps-3" href="/">LYGWEB-test</a>
            <!-- Sidebar Toggle-->
            <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
            <!-- Navbar Search-->
        </nav>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <div class="sb-sidenav-menu-heading">Menu</div>
                            <a class="nav-link" href="/">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Sewing
                            </a>
                        </div>
                </nav>
            </div>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">SEWING</h1>
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                <b>SUMMARY</b>
                            </div>
                            <div class="card-body">
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th>Date</th>
                                            <th>Style</th>
                                            <th>Total Size</th>
                                            <th>Total Output</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    @forelse ( $data as $item )
                                    <tbody>
                                        <tr>
                                            <td>{{ $item->date }}</td>
                                            <td>{{ $item->style }}</td>
                                            <td>{{ $item->totalSize }}</td>
                                            <td>{{ $item->totalOutput }}</td>
                                            <td ><button class="btn btn-primary btn-sm" type="button" id="idButtonAction{{ $loop->iteration }}" onclick="buttonAction('{{ $loop->iteration }}','{{ $item->date }}','{{ $item->style }}');">View Detail</button></td>
                                        </tr>
                                    </tbody>
                                    @empty
                                        <tbody>
                                            <tr>
                                                <h3>data null</h3>
                                            </tr>
                                        </tbody>
                                    @endforelse
                                </table>
                            </div>
                        </div>
                        

                        <div id="headerDataJs" style="display: none;" class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                <b><span id="titleTable"></span></b>
                            </div>
                            <table id="dataJs" class="table table-bordered">
                               {{-- table here --}}
                            </table>
                        </div>


                    </div>
                </main>
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid px-4">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; lygweb-test 2023</div>
                            <div>
                                <a href="https://id.linkedin.com/in/ziwanarp">Ziwana Rizwan Pramudia</a>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        <script>
            var close = 0;
            function buttonAction(loop ,date, style){
                    var buttonElement = document.getElementById('idButtonAction'+loop);
                    var dataJs = document.getElementById('dataJs');
                    var headerDataJs = document.getElementById('headerDataJs');
                    var titleTable = document.getElementById('titleTable');

                    if(close == 0){
                        if (buttonElement) {
                            buttonElement.innerText = 'Close View';
                            buttonElement.className = 'btn btn-danger btn-sm';
                            close = 1;

                            $.ajax({
                                url: '/api/getDataByDateAndStyle',
                                type: 'POST',
                                data: {
                                    date: date,
                                    style: style
                                },
                                success: function(response) {
                                    dataJs.innerHTML ="";
                                    headerDataJs.style.display = "";
                                    titleTable.innerText = style;
                                    var html = "";

                                        html+= "<thead>";
                                        html+=      "<tr>";
                                        html+=          "<th>Date</th>";
                                        html+=          "<th>Style</th>";
                                        html+=          "<th>Total Size</th>";
                                        html+=          "<th>Total Output</th>";
                                        html+=      "</tr>";
                                        html+="</thead>";

                                        for(var i = 0; i < response.length; i++){
                                            console.log(response[i]);
                                            html+="<tbody>";
                                            html+=      "<tr>";
                                            html+=          "<td>"+response[i].TrnDate+"</td>";
                                            html+=          "<td>"+response[i].StyleCode+"</td>";
                                            html+=          "<td>"+response[i].SizeName+"</td>";
                                            html+=          "<td>"+response[i].QtyOutput+"</td>";
                                            html+=      "</tr>";
                                            html+="</tbody>";
                                        }

                                    dataJs.innerHTML = html;
                                },
                                error: function(error) {
                                    console.error(error);
                                }
                            });
                        }
                    } else {
                        if (buttonElement) {
                            dataJs.innerHTML = "";
                            buttonElement.innerText = 'View Detail';
                            buttonElement.className = 'btn btn-primary btn-sm';
                            headerDataJs.style.display = "none";
                            close = 0;
                        }
                    }
            }
        </script>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="{{ asset('/js/scripts.js') }}"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="{{ asset('/assets/demo/chart-area-demo.js') }}"></script>
        <script src="assets/demo/chart-bar-demo.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js" crossorigin="anonymous"></script>
        <script src="{{ asset('/js/datatables-simple-demo.js') }}"></script>
    </body>
</html>
