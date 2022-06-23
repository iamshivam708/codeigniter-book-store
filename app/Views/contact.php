<?php $page_session = \Config\Services::session(); ?>

<?php $this->extend('layouts/layout') ?>

<?= $this->section('content'); ?>
<div class="container-fluid" style="height:69vh">
    <div class="container">
        <div class="row py-3" style="background-color: #fafafa">
            <h3>Contact</h3>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>

