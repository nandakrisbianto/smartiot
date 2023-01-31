<?php
    $this->load->view('layouts/sidebar');
?>
    <div class="row">
        <div class="col">
            <p class="text-white mt-5 mb-5">Welcome back, <b>Admin</b></p>
        </div>
    </div>
    <div class="row tm-content-row">
    <div class="col-sm-12 col-md-12 col-lg-6 col-xl-6 tm-block-col">
            <div class="tm-bg-primary-dark tm-block tm-block-taller tm-block-overflow">
                <h2 class="tm-block-title">Status Terbaru</h2>
                <div class="tm-notification-items">
                    <div class="media tm-notification-item">
                        <div class="m-3"> <h4><i class="fa fa-lightbulb text-white"></i></h4></div>
                        <div class="media-body">
                            <p class="mb-2"><b class="text-warning">Lampu Ruang Office Hidup</b> Silahkan pilih tombol on atau off untuk menghidupkan atau mematikan lampu.</p>
                            <span class="tm-small tm-text-color-secondary">6h ago.</span>
                        </div>
                    </div>
                    <div class="media tm-notification-item">
                        <div class="m-3"> <h4><i class="fa fa-lightbulb text-white"></i></h4></div>
                        <div class="media-body">
                            <p class="mb-2">Berhasil kirim perintah. <b class="text-warning">Lampu Ruang Office Hidup</b> Silahkan klik tombol untuk mematikan lampu.</p>
                            <span class="tm-small tm-text-color-secondary">6h ago.</span>
                        </div>
                    </div>
                    <div class="media tm-notification-item">
                        <div class="m-3"> <h4><i class="fa fa-lightbulb text-white"></i></h4></div>
                        <div class="media-body">
                            <p class="mb-2"> Berhasil. <b class="text-warning">Lampu Ruang Office Hidup</b> Silahkan pilih tombol on atau off untuk menghidupkan atau mematikan lampu.</p>
                            <span class="tm-small tm-text-color-secondary">6h ago.</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-12 col-md-12 col-lg-6 col-xl-6 tm-block-col">
            <div class="tm-bg-primary-dark tm-block tm-block-taller tm-block-overflow">
                <h2 class="tm-block-title">Kontrol Lampu</h2>
                <div class="tm-product-table-container">
              <table class="table tm-table-small tm-product-table">
                <tbody>
                  <tr>    
                    <td>  
                        <div class="tm-status-circle moving m-3">
                        </div>Hidup
                    </td>
                    <td class="tm-product-name"></i> Lampu Genzet</td>
                    <td class="text-center">
                      <a href="#" class="tm-product-delete-link">
                        <i class="far fa-lightbulb tm-product-delete-icon"></i>
                      </a>
                    </td>
                  </tr>
                  <tr>    
                    <td>  
                        <div class="tm-status-circle moving m-3">
                        </div>Hidup
                    </td>
                    <td class="tm-product-name"></i> Lampu Kantor</td>
                    <td class="text-center">
                      <a href="#" class="tm-product-delete-link">
                        <i class="far fa-lightbulb tm-product-delete-icon"></i>
                      </a>
                    </td>
                  </tr>
                  <tr>    
                    <td>  
                        <div class="tm-status-circle cancelled m-3">
                        </div>Mati
                    </td>
                    <td class="tm-product-name"></i> Lampu Depan</td>
                    <td class="text-center">
                      <a href="#" class="tm-product-delete-link">
                        <i class="far fa-lightbulb tm-product-delete-icon"></i>
                      </a>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
            </div>
        </div>
    </div>

    
<?php
    $this->load->view('layouts/footer');
?>