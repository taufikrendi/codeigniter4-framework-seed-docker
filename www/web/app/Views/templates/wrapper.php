<!DOCTYPE html>
<html lang="en">
<?= $this->include('templates/header') ?>
<body id="page-top">
<!-- Page Wrapper -->
<div id="wrapper">

    <?= $this->include('templates/sidebar') ?>

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">
        <div id="content">
            <?= $this->include('templates/navbar') ?>
            <!-- Begin Page Content -->
            <div class="container-fluid">
            <!-- Main Content -->
                <?= $this->renderSection('content') ?>
                <!-- End of Main Content -->
                <!-- Scroll -->
                <?= $this->include('templates/scroll') ?>
                <!-- End of Scroll -->
                <!-- Footer -->
                <?= $this->include('templates/logout') ?>
                <!-- End of Footer -->
            </div>
            <!-- /.container-fluid -->

        </div>

    </div>
    <!-- End of Content Wrapper -->

</div>
<!-- End of Page Wrapper -->
<?= $this->include('templates/js') ?>
</body>
</html>