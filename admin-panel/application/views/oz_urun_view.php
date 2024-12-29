<?php $this->load->view('inc/adminheader_view'); ?>

<!--  BEGIN MAIN CONTAINER  -->
<div class="main-container " id="container">

<div class="overlay"></div>
<div class="search-overlay"></div>

<!--  BEGIN SIDEBAR  -->
<div class="sidebar-wrapper sidebar-theme">

   <?php $this->load->view('inc/adminnav_view');?>

</div>
<!-- BEGIN CONTENT AREA -->
<div id="content" class="main-content">

    <div class="layout-px-spacing">

        <div class="middle-content container-xxl p-0">

            <!-- BREADCRUMB -->
            <div class="page-meta">
                <nav class="breadcrumb-style-one" aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="<?php echo base_url('urun/oz-urun-ekle')?>">Ürün Özellik Ekle</a></li>
                    </ol>
                </nav>
            </div>
            <!-- /BREADCRUMB -->

            <div class="row layout-spacing">
                <div class="col-lg-12">
                    <div class="widget-content widget-content-area">

                        <table class="table table-bordered table-striped mb-4" id="ecommerce-list">
                            <thead>
                                <tr>
                                    <th class="checkbox-column"></th>
                                    <th>Ürün Kodu</th>
                                    <th>Ürün Başlık</th>
                                    <th>İçerik</th>
                                    <th>Tarih</th>
                                    <th class="no-content text-center">İşlemler</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php if (!empty( $urunozellikler)) { ?>
                                    <?php foreach ( $urunozellikler as $urun) { ?>
                                        <tr>
                                        <td>
                                        <td>
                                            <div class="d-flex flex-column">
                                                        <span class="text-truncate fw-bold"><?= $urun['ozurun']; ?></span>
                                                    </div>
                                            </td>
                                            
                                            <td>
                                            <div class="d-flex flex-column">
                                                        <span class="text-truncate fw-bold"><?= $urun['ozbaslik']; ?></span>
                                                    </div>
                                            </td>
                                            <td>                                                 
                                                    <div class="d-flex flex-column">
                                                        <span class="text-truncate fw-bold"><?= $urun['ozicerik']; ?></span>
                                                    </div>
                                                </div>
                                            </td>
                                            <td><?= date('d-m-Y', strtotime($urun['oztarih'])); ?>
                                            </td>
                                            
                                            <td class="text-center">
                                                <div class="dropdown">
                                                    <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink1" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-horizontal"><circle cx="12" cy="12" r="1"></circle><circle cx="19" cy="12" r="1"></circle><circle cx="5" cy="12" r="1"></circle></svg>
                                                    </a>

                                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuLink1">
                                                    <a class="dropdown-item" href="<?= base_url('urun/ozupdate/' . $urun['ozid']); ?>">Ürün Düzenle</a>


                                                        <a class="dropdown-item" href="<?= base_url('ozproduct/Delete/'.$urun['ozid']); ?>" onclick="return confirm('Emin misiniz? Bu ürün silinecek.');">Sil</a>


                                                    </div>

                                                </div>
                                            </td>
                                        </tr>
                                    <?php } ?>
                                <?php } else { ?>
                                    <tr>
                                        <td colspan="6" class="text-center">Hiç ürün bulunamadı.</td>
                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table>

                    </div>
                </div>
            </div>

        </div>

    </div>

    <?php $this->load->view('inc/adminfooter_view'); ?>

</div>
<!-- END CONTENT AREA -->

</body>

<?php $this->load->view('inc/adminscript_view'); ?>
