<?php $page_session = \Config\Services::session(); ?>

<?php $this->extend('layouts/layout') ?>

<?= $this->section('content'); ?>
<div class="container-fluid" style="height:69vh">
        <div class="row py-5" style="background-color: #eeeeee" align="center">
            <h1 style="font-family: 'Ubuntu', sans-serif;">About Us</h1>
            <p class="mt-2" style="font-size: 24px;font-family: 'IBM Plex Sans Thai Looped', sans-serif;">We work together to sell the best books that we are proud of for folks that we believe in,<br/>
            We are available for your any queries 24x7.</p>
        </div>
</div>

<?= $this->endSection(); ?>

