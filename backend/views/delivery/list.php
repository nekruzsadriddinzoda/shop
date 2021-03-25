<?php
    include_once __DIR__ . "/../header.php";
?>
  
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Products</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Products</li>
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
                    <th>Title</th>
                    <th>Code</th>
                    <th>Priority</th>


                </thead>
                <tbody>
                    <?php foreach ($all as $p) : ?>
                    <tr>
                        <td><?=$p['id']?></td>
                        <td><?=$p['title']?></td>
                        <td><?=$p['code']?></td>
                        <td><?=$p['priority']?></td>
                        <td class="project-actions text-right">
                            <!-- <a class="btn btn-primary btn-sm" href="#">
                                <i class="fas fa-folder">
                                </i>
                                View
                            </a> -->
                            <a class="btn btn-info btn-sm" href="/index.php?model=delivery&action=update&id=<?=$p['id']?>">
                                <i class="fas fa-pencil-alt">
                                </i>
                                Edit
                            </a>
                            <a class="btn btn-danger btn-sm" href="/index.php?model=delivery&action=delete&id=<?=$p['id']?>">
                                <i class="fas fa-trash">
                                </i>
                                Delete
                            </a>
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