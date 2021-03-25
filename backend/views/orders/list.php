<?php
    include_once __DIR__ . "/../heder.php";
?>
  
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Order</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Order</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="card">        
        <div class="card-body p-0">
            <table class="table table-striped projects">
                <thead>
                    <th>ID</th>
                    <th>UserID</th>
                    <th>Name</th>
                    <th>Total</th>
                    <th>Payment</th>
                    <th>Delivery</th>
                    <th>Phone</th>
                    <th>Email</th>
                    <th>Status</th>
                    <th>Created</th>
                    <th>Updated</th>
                    <th style="text-align: center;">Action</th>
                </thead>
                <tbody>
                    <?php foreach ($all as $p) : ?>
                    <tr>
                        <td><?=$p['id']?></td>
                        <td><?=$p['user_id']?></td>
                        <td><?=$p['name']?></td>
                        <td><?=$p['total']?></td>
                        <td><?=$p['payment_id']?></td>
                        <td><?=$p['delivery_id']?></td>
                        <td><?=$p['phone']?></td>
                        <td><?=$p['email']?></td>
                        <td><?=$p['status']?></td>
                        <td><?=$p['created']?></td>
                        <td><?=$p['updated']?></td>
                        <td class="project-actions text-right">
                            <!-- <a class="btn btn-primary btn-sm" href="#">
                                <i class="fas fa-folder">
                                </i>
                                View
                            </a> -->
                            <a class="btn btn-info btn-sm" href="/index.php?model=order&action=update&id=<?=$p['id']?>">
                                <i class="fas fa-pencil-alt">
                                </i>
                                Edit
                            </a>
                            <!-- <a class="btn btn-danger btn-sm" href="/index.php?model=order&action=delete&id=<?=$p['id']?>">
                                <i class="fas fa-trash">
                                </i>
                                Delete
                            </a> -->
                        </td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <?php
    include_once __DIR__ . "/../footer.php";
?>