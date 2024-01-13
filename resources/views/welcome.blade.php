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
                                        html+=          "<th>Operator</th>";
                                        if(style == "FOOTBALL SETS EUROCUP CW N (ARGENTINA) S.9"){
                                            html+=          "<th>Total 92</th>";
                                            html+=          "<th>Total 98</th>";
                                            html+=          "<th>Total 104</th>";
                                            html+=          "<th>Total 110</th>";
                                            html+=          "<th>Total 116</th>";
                                            html+=          "<th>Total 122</th>";
                                            html+=          "<th>Total 128</th>";
                                            html+=          "<th>Total 134</th>";
                                            html+=          "<th>Total 140</th>";
                                            html+=          "<th>Total 146</th>";
                                            html+=          "<th>Total 152</th>";
                                        } else {
                                            html+=          "<th>Total XS</th>";
                                            html+=          "<th>Total S</th>";
                                            html+=          "<th>Total M</th>";
                                            html+=          "<th>Total L</th>";
                                            html+=          "<th>Total XL</th>";
                                            html+=          "<th>Total XXL</th>";
                                        }
                                        html+=          "<th>Total Qty</th>";
                                        html+=          "<th>Destination</th>";
                                        html+=      "</tr>";
                                        html+="</thead>";

                                        for(var i = 0; i < response.length; i++){
                                            console.log(response[i]);
                                            html+="<tbody>";
                                            html+=      "<tr>";
                                            html+=          "<td>"+response[i].OperatorName+"</td>";
                                            if(style == "FOOTBALL SETS EUROCUP CW N (ARGENTINA) S.9"){

                                                var jumlah_size_92 = (typeof response[i].jumlah_size_92 == 'undefined') ? 0 : response[i].jumlah_size_92;
                                                var jumlah_size_98 = (typeof response[i].jumlah_size_98 == 'undefined') ? 0 : response[i].jumlah_size_98;
                                                var jumlah_size_104 = (typeof response[i].jumlah_size_104 == 'undefined') ? 0 : response[i].jumlah_size_104;
                                                var jumlah_size_110 = (typeof response[i].jumlah_size_110 == 'undefined') ? 0 : response[i].jumlah_size_110;
                                                var jumlah_size_116 = (typeof response[i].jumlah_size_116 == 'undefined') ? 0 : response[i].jumlah_size_116;
                                                var jumlah_size_122 = (typeof response[i].jumlah_size_122 == 'undefined') ? 0 : response[i].jumlah_size_122;
                                                var jumlah_size_128 = (typeof response[i].jumlah_size_128 == 'undefined') ? 0 : response[i].jumlah_size_128;
                                                var jumlah_size_134 = (typeof response[i].jumlah_size_134 == 'undefined') ? 0 : response[i].jumlah_size_134;
                                                var jumlah_size_140 = (typeof response[i].jumlah_size_140 == 'undefined') ? 0 : response[i].jumlah_size_140;
                                                var jumlah_size_146 = (typeof response[i].jumlah_size_146 == 'undefined') ? 0 : response[i].jumlah_size_146;
                                                var jumlah_size_152 = (typeof response[i].jumlah_size_152 == 'undefined') ? 0 : response[i].jumlah_size_152;

                                                html+=          "<td>"+jumlah_size_92+"</td>";
                                                html+=          "<td>"+jumlah_size_98+"</td>";
                                                html+=          "<td>"+jumlah_size_104+"</td>";
                                                html+=          "<td>"+jumlah_size_110+"</td>";
                                                html+=          "<td>"+jumlah_size_116+"</td>";
                                                html+=          "<td>"+jumlah_size_122+"</td>";
                                                html+=          "<td>"+jumlah_size_128+"</td>";
                                                html+=          "<td>"+jumlah_size_134+"</td>";
                                                html+=          "<td>"+jumlah_size_140+"</td>";
                                                html+=          "<td>"+jumlah_size_146+"</td>";
                                                html+=          "<td>"+jumlah_size_152+"</td>";
                                            } else {

                                                var jumlah_size_XS = (typeof response[i].jumlah_size_XS == 'undefined') ? 0 : response[i].jumlah_size_XS;
                                                var jumlah_size_S = (typeof response[i].jumlah_size_S == 'undefined') ? 0 : response[i].jumlah_size_S;
                                                var jumlah_size_M = (typeof response[i].jumlah_size_M == 'undefined') ? 0 : response[i].jumlah_size_M;
                                                var jumlah_size_L = (typeof response[i].jumlah_size_L == 'undefined') ? 0 : response[i].jumlah_size_L;
                                                var jumlah_size_XL = (typeof response[i].jumlah_size_XL == 'undefined') ? 0 : response[i].jumlah_size_XL;
                                                var jumlah_size_XXL = (typeof response[i].jumlah_size_XXL == 'undefined') ? 0 : response[i].jumlah_size_XXL;

                                                html+=          "<td onclick='editCell(this)''>"+jumlah_size_XS+"</td>";
                                                html+=          "<td onclick='editCell(this)'>"+jumlah_size_S+"</td>";
                                                html+=          "<td onclick='editCell(this)'>"+jumlah_size_M+"</td>";
                                                html+=          "<td onclick='editCell(this)'>"+jumlah_size_L+"</td>";
                                                html+=          "<td onclick='editCell(this)'>"+jumlah_size_XL+"</td>";
                                                html+=          "<td onclick='editCell(this)'>"+jumlah_size_XXL+"</td>";
                                            }
                                            html+=          "<td>"+response[i].total_qty+"</td>";
                                            var DestinationCode = (response[i].DestinationCode == 'HK') ? 'HK (Hongkong)' : 'SG (Singapore)';
                                            html+=          "<td>"+DestinationCode+"</td>";
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

            function editCell(cell) {
                
            // Check if the cell is already in edit mode
            if (cell.querySelector('input')) {
                return;
            }

            // Save the current cell value
            const originalValue = cell.textContent.trim();

            // Create an input element
            const input = document.createElement('input');
            input.type = 'text';
            input.value = originalValue;

            // Replace the cell content with the input
            cell.innerHTML = '';
            cell.appendChild(input);

            // Focus on the input and select its content
            input.focus();
            input.select();

            // Add an event listener to handle the Enter key press
            input.addEventListener('keydown', function(event) {
                if (event.key === 'Enter') {
                    // Prevent the default form submission behavior
                    event.preventDefault();

                    // Save the new value and exit edit mode
                    const newValue = input.value.trim();
                    console.log(input.value.trim());
                    cell.innerHTML = newValue;

                    // Perform an AJAX request to update the data on the server
                    // For simplicity, this example doesn't include the AJAX part

                    // If you want to update the data on the server, make an AJAX request here
                    // Example using fetch:
                    // fetch('/update-data', {
                    //     method: 'POST',
                    //     headers: {
                    //         'Content-Type': 'application/json',
                    //     },
                    //     body: JSON.stringify({
                    //         id: cell.parentElement.cells[0].textContent,  // Assuming the ID is in the first cell
                    //         column: cell.cellIndex,  // Column index of the edited cell
                    //         value: newValue,
                    //     }),
                    // })
                    // .then(response => response.json())
                    // .then(data => {
                    //     console.log('Data updated successfully:', data);
                    // })
                    // .catch(error => {
                    //     console.error('Error updating data:', error);
                    // });
                }
            });

            // // Add an event listener to handle the blur event (when clicking outside the input)
            // input.addEventListener('blur', function() {
            //     // Restore the original value if the user exits without pressing Enter
            //     cell.innerHTML = originalValue;
            // });
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
