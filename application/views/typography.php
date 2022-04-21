<?php $this->load->view("_partials/header.php") ?>

<?php $this->load->view("_partials/sidebar.php") ?>

<div class="content-wrapper">
<?php $this->load->view("_partials/breadcrumb.php") ?>
<section class="content">
      <div class="container-fluid">
      <style>
        .times{
            font-family: 'Times New Roman', Times, serif;
        }
        .sans{
            font-family: Arial, Helvetica, sans-serif;
        }
        .cursive{
            font-family: cursive;
        }
        .fantasy{
            font-family: fantasy;
        }
    </style>
<div class="card-primary">
        <div class="card-header">
            <h3 class="card-title">Typography</h3>
        </div>
        <div class="card-body">
            <p class="times">Teks ini menggunakan typography 'Times New Roman', Times, serif</p>
            <p class="sans">Teks ini menggunakan typography Arial, Helvetica, sans-serif</p>
            <p class="cursive">Teks ini menggunakan typography cursive</p>
            <p class="fantasy">Teks ini menggunakan typography fantasy</p>
        </div>
        <div class="card-footer">
    </div>
</div>
        
      </div><!--/. container-fluid -->
    </section>
</div>

<?php $this->load->view("_partials/footer.php") ?>