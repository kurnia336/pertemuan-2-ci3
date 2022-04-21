<div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Dashboard</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
            <?php foreach ($this->uri->segments as $segment): ?>
                <?php 
                    $url = substr($this->uri->uri_string, 0, strpos($this->uri->uri_string, $segment)) . $segment;
                    $is_active =  $url == $this->uri->uri_string;
                ?>


                <li class="breadcrumb-item <?php echo $is_active ? 'active': '' ?>">
                    <?php if($is_active): ?>
                        <?php echo ucfirst($segment) ?>
                    <?php else: ?>
                        <a href="<?php echo site_url($url) ?>"><?php echo ucfirst($segment) ?></a>
                    <?php endif; ?>
                </li>
            <?php endforeach; ?>
            <?php
            //   error_reporting(0);
            //   if($_GET['page']==''){
            //   echo "<li class='breadcrumb-item'>Dashboard</li>
            //   <li class='breadcrumb-item active'><a href='index.php?page=home'>Home</a></li>";
            //   }
            //   elseif($_GET['page']=='home'){
            //   echo "<li class='breadcrumb-item'>Dashboard</li>
            //   <li class='breadcrumb-item active'><a href='index.php?page=home'>Home</a></li>";
            //   }

            //   elseif($_GET['page']=='typography'){
            //     echo "<li class='breadcrumb-item'>Dashboard</li>
            //     <li class='breadcrumb-item active'><a href='index.php?page=home'>Typography</a></li>";
            //   }

            //   elseif($_GET['page']=='form'){
            //     echo "<li class='breadcrumb-item'>Dashboard</li>
            //     <li class='breadcrumb-item active'><a href='index.php?page=form'>Form</a></li>";
            //   }

            //   elseif($_GET['page']=='table'){
            //     echo "<li class='breadcrumb-item'>Dashboard</li>
            //     <li class='breadcrumb-item active'><a href='index.php?page=table'>Table</a></li>";
            //   }

            //   elseif($_GET['page']=='button'){
            //     echo "<li class='breadcrumb-item'>Dashboard</li>
            //     <li class='breadcrumb-item active'><a href='index.php?page=button'>Button</a></li>";
            //   }

            //   elseif($_GET['page']=='image'){
            //     echo "<li class='breadcrumb-item'>Dashboard</li>
            //     <li class='breadcrumb-item active'><a href='index.php?page=image'>Image</a></li>";
            //   }

            //   elseif($_GET['page']=='users'){
            //     echo "<li class='breadcrumb-item'>Dashboard</li>
            //     <li class='breadcrumb-item active'><a href='index.php?page=users'>Users</a></li>";
            //   }

            //   elseif($_GET['page']=='users_tambah'){
            //     echo "<li class='breadcrumb-item'>Dashboard</li>
            //     <li class='breadcrumb-item active'><a href='index.php?page=users'>Users</a></li>";
            //   }

            //   elseif($_GET['page']=='users_show'){
            //     echo "<li class='breadcrumb-item'>Dashboard</li>
            //     <li class='breadcrumb-item active'><a href='index.php?page=users'>Users</a></li>";
            //   }

            //   elseif($_GET['page']=='users_edit'){
            //     echo "<li class='breadcrumb-item'>Dashboard</li>
            //     <li class='breadcrumb-item active'><a href='index.php?page=users'>Users</a></li>";
            //   }

            //   elseif($_GET['page']=='campus'){
            //     echo "<li class='breadcrumb-item'>Dashboard</li>
            //     <li class='breadcrumb-item active'><a href='index.php?page=campus'>Campus</a></li>";
            //   }

            //   elseif($_GET['page']=='campus_tambah'){
            //     echo "<li class='breadcrumb-item'>Dashboard</li>
            //     <li class='breadcrumb-item active'><a href='index.php?page=campus'>Campus</a></li>";
            //   }

            //   elseif($_GET['page']=='campus_show'){
            //     echo "<li class='breadcrumb-item'>Dashboard</li>
            //     <li class='breadcrumb-item active'><a href='index.php?page=campus'>Campus</a></li>";
            //   }

            //   elseif($_GET['page']=='campus_edit'){
            //     echo "<li class='breadcrumb-item'>Dashboard</li>
            //     <li class='breadcrumb-item active'><a href='index.php?page=campus'>Campus</a></li>";
            //   }
              ?>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>