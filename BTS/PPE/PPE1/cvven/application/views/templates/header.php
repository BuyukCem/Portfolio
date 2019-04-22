<!DOCTYPE html>
<html>
      <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="icon" href="image/favicon.png" type="image/png">
        <title>Royal Hotel</title>

        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="<?php echo base_url();?>css/bootstrap.css">

        <!-- main css -->
        <link rel="stylesheet" href="<?php echo base_url();?>css/style.css">
        <link rel="stylesheet" href="<?php echo base_url();?>css/responsive.css">


    </head>
     <header class="header_area">
            <div class="container">
                <nav class="navbar navbar-expand-lg navbar-light">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <!--imagelogo-->
                    <a class="navbar-brand logo_h" href=<?php echo base_url();?>><img src="<?php echo base_url();?>image/Logo.png" alt="LOGO du site" style="max-whidth:80%"></a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
                        <ul class="nav navbar-nav menu_nav ml-auto">
                            <li class="nav-item active"><a class="nav-link" href="<?php echo base_url();?>">Home</a></li>
                            <?php if(!$this->session->userdata('logged_in')):?>
                            <li class="nav-item active"><a class="nav-link" href="<?php echo base_url();?>index.php/users/enregistrer">S'enregistrer</a></li>
                              <?php endif;?>
                            <?php 
                              if ($this->session->userdata('logged_in')){
                            ?>
                            <li class="nav-item active"><a class="nav-link" href="<?php echo base_url();?>index.php/Reservation/reserver ">Reserver</a></li>
                            <li class="nav-item active"><a class="nav-link" href="<?php echo base_url();?>index.php/Reservation/listereservation_WithID">Mes reservations</a></li>
                            <?php
                              }
                            ?>
                            <?php if(!$this->session->userdata('logged_in')):?>
                                <li class="nav-item active"><a class="nav-link" href="<?php echo base_url();?>index.php/users/loginuser">Connexion</a></li>
                            <?php endif;?>

                            <li></li>
                          </ul>
                          <?php if($this->session->userdata('logged_in')):?>
                          <div class="dropdown">

                                <div class="btn-group">
                                  <button type="button" class=" btn btn-outline-info"><?php /*if($this->session->userdata('logged_in')){echo $name;}*/ ?>hello</button>
                                  <button type="button" class="btn btn-outline-info dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <span class="sr-only">Action</span>
                                  </button>
                                  <div class="dropdown-menu" aria-labelledby="menu">
                                    <a class="nav-item active" href="<?php echo base_url();?>index.php/users/parametre">Paramètre</a>

                                  <a class="nav-link" href="<?php echo base_url();?>index.php/users/logout">logout</a>
                                  </div>
                                </div>
                            </div>
                        <?php endif;?>
                        <?php if($this->session->userdata('logged_inAdmin')):?>
                          <a class="nav-link" href="<?php echo base_url();?>index.php/reservation/ListeReservation">Liste reservation</a>
                          <a class="nav-link" href="<?php echo base_url();?>index.php/admin/ListeClient">liste Client</a>
                      <?php endif;?>
                        <?php if($this->session->userdata('logged_inAdmin')):?>
                            <div class="dropdown">
                              <div class="btn-group">
                                <button type="button" class=" btn btn-outline-info"><?php /*if($this->session->userdata('logged_inAdmin')){echo $name;}*/?> hello</button>
                                <button type="button" class="btn btn-outline-info dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                  <span class="sr-only">Action</span>
                                </button>
                                <div class="dropdown-menu" aria-labelledby="menu">
                                  <a class="nav-item active" href="#">Paramètre</a>

                                <a class="nav-link" href="<?php echo base_url();?>index.php/admin/login_out_admin">logout</a>
                                </div>
                              </div>
                          </div>
                      <?php endif;?>
                </nav>

            </div>
        </header>
      </br></br>
        </br></br>

        <?php if ($this->session->set_flashdata('login_failed')):?>
          <?php echo '<p class="alert alert-danger">'.$this->session->set_flashdata('login_failed').'</p>';?>
        <?php endif;?>

        <?php if ($this->session->set_flashdata('login_out')):?>
          <?php echo '<p class="alert alert-success>'.$this->session->set_flashdata('login_out').'</p>';?>
        <?php endif;?>

        <?php if ($this->session->set_flashdata('user_loggedin')):?>
          <?php echo '<p class="alert alert-success>'.$this->session->set_flashdata('user_loggedin').'</p>';?>
        <?php endif;?>
