<?php
    $this->load->view('layouts/sidebar');
?>
<div class="row">
                <div class="col">
                    <p class="text-white mt-5 mb-5">Welcome back, <b>Admin</b></p>
                </div>
            </div>
            <!-- row -->
            <div class="row tm-content-row">
                <div class="col-sm-12 col-md-12 col-lg-6 col-xl-6 tm-block-col">
                    <div class="tm-bg-primary-dark tm-block">
                        <h2 class="tm-block-title">Ampere Status</h2>
                        <canvas id="lineChart"></canvas>
                    </div>
                </div>
                <div class="col-sm-12 col-md-12 col-lg-6 col-xl-6 tm-block-col">
                    <div class="tm-bg-primary-dark tm-block">
                        <h2 class="tm-block-title">Voltage Status</h2>
                        <canvas id="barChart"></canvas>
                    </div>
                </div>
                <div class="col-12 tm-block-col">
            <div class="tm-bg-primary-dark tm-block tm-block-taller tm-block-scroll">
                <h2 class="tm-block-title">Kontrol Status</h2>
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">LAST UPDATE</th>
                            <th scope="col">STATUS</th>
                            <th scope="col">OPERATION</th>
                            <th scope="col">LOCATION</th>
                            <th scope="col">OPERATOR</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row"><b>#122349</b></th>
                            <td>
                                <div class="tm-status-circle moving">
                                </div>Hidup
                            </td>
                            <td><b>Lampu</b></td>
                            <td><b>Ruang Genzet</b></td>
                            <td>
                                Bian Gombes
                            </td>
                        </tr>
                        <tr>
                            <th scope="row"><b>#122349</b></th>
                            <td>
                                <div class="tm-status-circle cancelled">
                                </div>Mati
                            </td>
                            <td><b>Lampu</b></td>
                            <td><b>Ruang Office</b></td>
                            <td>
                                Boy Wiliams
                            </td>
                        </tr>
                        <tr>
                            <th scope="row"><b>#122349</b></th>
                            <td>
                                <div class="tm-status-circle moving">
                                </div>Hidup
                            </td>
                            <td><b>Lampu</b></td>
                            <td><b>Ruang Rapat</b></td>
                            <td>
                                Nanda Krisbianto
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
               
    </div>

<?php
    $this->load->view('layouts/footer');
?>

<script>
        Chart.defaults.global.defaultFontColor = 'white';
        let ctxLine,
            ctxBar,
            optionsLine,
            optionsBar,
            configLine,
            configBar,
            lineChart;
        barChart;
        // DOM is ready
        $(function () {
            drawLineChart(); // Line Chart
            drawBarChart(); // Bar Chart

            $(window).resize(function () {
                updateLineChart();
                updateBarChart();                
            });
        })
    </script>