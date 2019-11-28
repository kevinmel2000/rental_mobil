<!-- Page Heading/Breadcrumbs -->
<?php $this->load->view('web/header_view') ?>
<h1 class="mt-4 mb-3">Contact
</h1>

<ol class="breadcrumb">
    <li class="breadcrumb-item">
        <a href="<?= base_url('/')?>">Home</a>
    </li>
    <li class="breadcrumb-item active">Contact</li>
</ol>

<!-- Content Row -->
<div class="row">
    <!-- Map Column -->
    <div class="col-lg-8 mb-4">
        <!-- Embedded Google Map -->
        <iframe width="100%" height="400px" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="http://maps.google.com/maps?hl=en&amp;ie=UTF8&amp;ll=37.0625,-95.677068&amp;spn=56.506174,79.013672&amp;t=m&amp;z=4&amp;output=embed"></iframe>
    </div>
    <!-- Contact Details Column -->
    <div class="col-lg-4 mb-4">
        <h3>Contact Details</h3>
        <p>
             Bos Besar Nagieb
            <br>
        </p>
        <p>
            <abbr title="Phone">P</abbr>: (+62) 813-8624-2812
        </p>
        <p>
            <abbr title="Email">E</abbr>:
            <a href="mailto:admin@example.com">admin@example.com
            </a>
        </p>
        <p>
            <abbr title="Hours">H</abbr>: Jam Kerja : 09.00 - 21.00 wib
        </p>
    </div>
</div>
<?php $this->load->view('web/footer_view') ?>