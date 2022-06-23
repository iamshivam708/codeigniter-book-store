<?php $page_session = \Config\Services::session();?>

<?php $this->extend('layouts/layout') ?>

<?= $this->section('content'); ?>
<div class="container-fluid">
    
    <?php if($page_session->getTempdata('success')): ?>
        <div class="container px-5">
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <?= $page_session->getTempdata('success') ?>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
             </div>
        </div>
    <?php endif; ?>
    
    <div class="container-fluid mt-2">
        <div class="row">
            <div class="col-9 px-4">
                <div class="row row-cols-1 row-cols-md-3 g-4 mb-4">
                    <?php foreach($books as $b): ?>
                    <div class="col">
                      <div class="card">
                          <img height="300" width="180" src="<?= base_url('/uploads/'.$b['image']) ?>" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title"><a href="<?= base_url('/book/single/'.$b['id']) ?>"><?= $b['title'] ?></a></h5>
                          <p class="text-muted"><?= $b['author'] ?></p>
                          <p><span style="color:red;font-size: 30px">&#8377;<?= $b['selling_price'] ?></span> <strike> &#8377;<?= $b['mrp'] ?></strike></p>
                        </div>
                      </div>
                    </div>
                    <?php endforeach; ?>
                  </div>
                <div class="row">
                    <?php
                        $pager->setPath('/');
                        echo $pager->links();
                    ?>
                </div>
            </div>
            <div class="col-3">
                
                <div class="row py-3 px-3" style="background-color: #eeeeee" align="center">
                    <h3 class="py-3 px-3 text-center text-white" style="background-color: #212121">Search</h3>
                    <form action="<?= base_url('/book/search') ?>" method="post">
                        <div class="form-group mt-3">
                            <input type="text" class="form-control" name="search" /> 
                        </div>
                        <button class="btn btn-primary mt-2">Search</button>
                    </form>
                </div>
                <div class="row py-3 px-3 mt-4 mb-4" style="background-color: #eeeeee" align="center">
                    <h3 class="py-3 px-3 text-center text-white" style="background-color: #212121">Categories</h3> 
                    <nav class="nav flex-column">
                        <?php foreach($category as $cat): ?>
                        <a style="color:black" href="<?= base_url('/book/category/'.$cat['name']) ?>" class="nav-link"><?= $cat['name'] ?></a>
                        <?php endforeach; ?>
                     </nav>                       
                </div>
                
            </div>
        </div>
    </div>
    
</div>

<?= $this->endSection(); ?>
