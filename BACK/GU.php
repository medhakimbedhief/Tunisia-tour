<?php
include_once "config.php" ;
try{
    $pdo=config::getConnexion();
    $query= $pdo ->prepare(
        'SELECT * FROM utilisateur'
    );
    $query->execute();
    $result = $query->fetchAll();
}
catch(PDOException $e){
    $e->getMessage();
}
?>

<!--echo("<table border='1' align='center'><tr>");
echo ("<td>");
echo "ID";
echo ("</td>");
echo ("<td>");
echo "CIN";
echo ("</td>");
    echo ("<td>");
    echo "Nom";
    echo ("</td>");
    echo ("<td>");
    echo "Prenom";
    echo ("</td>");
    echo ("<td>");
    echo "Telephone";
    echo ("</td>");
    echo ("<td>");
    echo "Email";
    echo ("</td>");echo ("<td>");
    echo "LOGIN";
    echo ("</td>");
    echo ("</td>");echo ("<td>");
    echo "Password";
    echo ("</td>");
    echo "</tr>";

foreach($result as $rows)
{
echo ("<tr><td>");
echo $rows['id'];
echo ("</td>");
echo ("<td>");
echo $rows['CIN'];
echo ("</td>");
    echo ("<td>");
    echo $rows['nom'];
    echo ("</td>");
    echo ("<td>");
    echo $rows['prenom'];
    echo ("</td>");
    echo ("<td>");
    echo $rows['telephone'];
    echo ("</td>");
    echo ("<td>");
    echo $rows['email'];
    echo ("</td>");echo ("<td>");
    echo $rows['login'];
    echo ("</td>");
    echo ("</td>");echo ("<td>");
    echo $rows['password'];
    echo ("</td>");
echo("</tr>");
}
echo("</table> ");
?>-->
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Creative - Bootstrap 3 Responsive Admin Template">
  <meta name="author" content="GeeksLabs">
  <meta name="keyword" content="Creative, Dashboard, Admin, Template, Theme, Bootstrap, Responsive, Retina, Minimal">
  <link rel="shortcut icon" href="img/favicon.png">

  <title>Gestion Utilisateur </title>

  <!-- Bootstrap CSS -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <!-- bootstrap theme -->
  <link href="css/bootstrap-theme.css" rel="stylesheet">
  <!--external css-->
  <!-- font icon -->
  <link href="css/elegant-icons-style.css" rel="stylesheet" />
  <link href="css/font-awesome.min.css" rel="stylesheet" />
  <!-- full calendar css-->
  <link href="assets/fullcalendar/fullcalendar/bootstrap-fullcalendar.css" rel="stylesheet" />
  <link href="assets/fullcalendar/fullcalendar/fullcalendar.css" rel="stylesheet" />
  <!-- easy pie chart-->
  <link href="assets/jquery-easy-pie-chart/jquery.easy-pie-chart.css" rel="stylesheet" type="text/css" media="screen" />
  <!-- owl carousel -->
  <link rel="stylesheet" href="css/owl.carousel.css" type="text/css">
  <link href="css/jquery-jvectormap-1.2.2.css" rel="stylesheet">
  <!-- Custom styles -->
  <link rel="stylesheet" href="css/fullcalendar.css">
  <link href="css/widgets.css" rel="stylesheet">
  <link href="css/style.css" rel="stylesheet">
  <link href="css/style-responsive.css" rel="stylesheet" />
  <link href="css/xcharts.min.css" rel=" stylesheet">
  <link href="css/jquery-ui-1.10.4.min.css" rel="stylesheet">
  <!-- =======================================================
    Theme Name: NiceAdmin
    Theme URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
    Author: BootstrapMade
    Author URL: https://bootstrapmade.com
  ======================================================= -->
</head>

<body>
  <!-- container section start -->
  <section id="container" class="">


    <header class="header dark-bg">
      <div class="toggle-nav">
        <div class="icon-reorder tooltips" data-original-title="Toggle Navigation" data-placement="bottom"><i class="icon_menu"></i></div>
      </div>

      <!--logo start-->
      <a href="index.html" class="logo">Nice <span class="lite">Admin</span></a>
      <!--logo end-->

      <div class="nav search-row" id="top_menu">
        <!--  search form start -->
        <ul class="nav top-menu">
          <li>
            <form class="navbar-form">
              <input class="form-control" placeholder="Search" type="text">
            </form>
          </li>
        </ul>
        <!--  search form end -->
      </div>

      <div class="top-nav notification-row">
        <!-- notificatoin dropdown start-->
        <ul class="nav pull-right top-menu">

          <!-- task notificatoin start -->
          <li id="task_notificatoin_bar" class="dropdown">
            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <i class="icon-task-l"></i>
                            <span class="badge bg-important">6</span>
                        </a>
            <ul class="dropdown-menu extended tasks-bar">
              <div class="notify-arrow notify-arrow-blue"></div>
              <li>
                <p class="blue">You have 6 pending letter</p>
              </li>
              <li>
                <a href="#">
                  <div class="task-info">
                    <div class="desc">Design PSD </div>
                    <div class="percent">90%</div>
                  </div>
                  <div class="progress progress-striped">
                    <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width: 90%">
                      <span class="sr-only">90% Complete (success)</span>
                    </div>
                  </div>
                </a>
              </li>
              <li>
                <a href="#">
                  <div class="task-info">
                    <div class="desc">
                      Project 1
                    </div>
                    <div class="percent">30%</div>
                  </div>
                  <div class="progress progress-striped">
                    <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100" style="width: 30%">
                      <span class="sr-only">30% Complete (warning)</span>
                    </div>
                  </div>
                </a>
              </li>
              <li>
                <a href="#">
                  <div class="task-info">
                    <div class="desc">Digital Marketing</div>
                    <div class="percent">80%</div>
                  </div>
                  <div class="progress progress-striped">
                    <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
                      <span class="sr-only">80% Complete</span>
                    </div>
                  </div>
                </a>
              </li>
              <li>
                <a href="#">
                  <div class="task-info">
                    <div class="desc">Logo Designing</div>
                    <div class="percent">78%</div>
                  </div>
                  <div class="progress progress-striped">
                    <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="78" aria-valuemin="0" aria-valuemax="100" style="width: 78%">
                      <span class="sr-only">78% Complete (danger)</span>
                    </div>
                  </div>
                </a>
              </li>
              <li>
                <a href="#">
                  <div class="task-info">
                    <div class="desc">Mobile App</div>
                    <div class="percent">50%</div>
                  </div>
                  <div class="progress progress-striped active">
                    <div class="progress-bar" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 50%">
                      <span class="sr-only">50% Complete</span>
                    </div>
                  </div>

                </a>
              </li>
              <li class="external">
                <a href="#">See All Tasks</a>
              </li>
            </ul>
          </li>
          <!-- task notificatoin end -->
          <!-- inbox notificatoin start-->
          <li id="mail_notificatoin_bar" class="dropdown">
            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <i class="icon-envelope-l"></i>
                            <span class="badge bg-important">5</span>
                        </a>
            <ul class="dropdown-menu extended inbox">
              <div class="notify-arrow notify-arrow-blue"></div>
              <li>
                <p class="blue">You have 5 new messages</p>
              </li>
              <li>
                <a href="#">
                                    <span class="photo"><img alt="avatar" src="./img/avatar-mini.jpg"></span>
                                    <span class="subject">
                                    <span class="from">Greg  Martin</span>
                                    <span class="time">1 min</span>
                                    </span>
                                    <span class="message">
                                        I really like this admin panel.
                                    </span>
                                </a>
              </li>
              <li>
                <a href="#">
                                    <span class="photo"><img alt="avatar" src="./img/avatar-mini2.jpg"></span>
                                    <span class="subject">
                                    <span class="from">Bob   Mckenzie</span>
                                    <span class="time">5 mins</span>
                                    </span>
                                    <span class="message">
                                     Hi, What is next project plan?
                                    </span>
                                </a>
              </li>
              <li>
                <a href="#">
                                    <span class="photo"><img alt="avatar" src="./img/avatar-mini3.jpg"></span>
                                    <span class="subject">
                                    <span class="from">Phillip   Park</span>
                                    <span class="time">2 hrs</span>
                                    </span>
                                    <span class="message">
                                        I am like to buy this Admin Template.
                                    </span>
                                </a>
              </li>
              <li>
                <a href="#">
                                    <span class="photo"><img alt="avatar" src="./img/avatar-mini4.jpg"></span>
                                    <span class="subject">
                                    <span class="from">Ray   Munoz</span>
                                    <span class="time">1 day</span>
                                    </span>
                                    <span class="message">
                                        Icon fonts are great.
                                    </span>
                                </a>
              </li>
              <li>
                <a href="#">See all messages</a>
              </li>
            </ul>
          </li>
          <!-- inbox notificatoin end -->
          <!-- alert notification start-->
          <li id="alert_notificatoin_bar" class="dropdown">
            <a data-toggle="dropdown" class="dropdown-toggle" href="#">

                            <i class="icon-bell-l"></i>
                            <span class="badge bg-important">7</span>
                        </a>
            <ul class="dropdown-menu extended notification">
              <div class="notify-arrow notify-arrow-blue"></div>
              <li>
                <p class="blue">You have 4 new notifications</p>
              </li>
              <li>
                <a href="#">
                                    <span class="label label-primary"><i class="icon_profile"></i></span>
                                    Friend Request
                                    <span class="small italic pull-right">5 mins</span>
                                </a>
              </li>
              <li>
                <a href="#">
                                    <span class="label label-warning"><i class="icon_pin"></i></span>
                                    John location.
                                    <span class="small italic pull-right">50 mins</span>
                                </a>
              </li>
              <li>
                <a href="#">
                                    <span class="label label-danger"><i class="icon_book_alt"></i></span>
                                    Project 3 Completed.
                                    <span class="small italic pull-right">1 hr</span>
                                </a>
              </li>
              <li>
                <a href="#">
                                    <span class="label label-success"><i class="icon_like"></i></span>
                                    Mick appreciated your work.
                                    <span class="small italic pull-right"> Today</span>
                                </a>
              </li>
              <li>
                <a href="#">See all notifications</a>
              </li>
            </ul>
          </li>
          <!-- alert notification end-->
          <!-- user login dropdown start-->
          <li class="dropdown">
            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <span class="profile-ava">
                                <img alt="" src="img/avatar1_small.jpg">
                            </span>
                            <span class="username">Jenifer Smith</span>
                            <b class="caret"></b>
                        </a>
            <ul class="dropdown-menu extended logout">
              <div class="log-arrow-up"></div>
              <li class="eborder-top">
                <a href="#"><i class="icon_profile"></i> My Profile</a>
              </li>
              <li>
                <a href="#"><i class="icon_mail_alt"></i> My Inbox</a>
              </li>
              <li>
                <a href="#"><i class="icon_clock_alt"></i> Timeline</a>
              </li>
              <li>
                <a href="#"><i class="icon_chat_alt"></i> Chats</a>
              </li>
              <li>
                <a href="login.html"><i class="icon_key_alt"></i> Log Out</a>
              </li>
              <li>
                <a href="documentation.html"><i class="icon_key_alt"></i> Documentation</a>
              </li>
              <li>
                <a href="documentation.html"><i class="icon_key_alt"></i> Documentation</a>
              </li>
            </ul>
          </li>
          <!-- user login dropdown end -->
        </ul>
        <!-- notificatoin dropdown end-->
      </div>
    </header>
    <!--header end-->

    <aside>
      <div id="sidebar" class="nav-collapse ">
        <!-- sidebar menu start-->
        <ul class="sidebar-menu">
          <li class="active">
            <a class="" href="index.html">
                          <i class="icon_house_alt"></i>
                          <span>Dashboard</span>
                      </a>
          </li>
          <li class="sub-menu">
            <a class="" href="GU.php">
                          <i class="icon_table"></i>
                          <span>Gestion des utilisateurs</span>
                      </a>
          </li>
          <li class="sub-menu">
            <a href="javascript:;" class="">
              <i class="icon_house_alt"></i>
                          <span>Blog</span>
                          <span class="menu-arrow arrow_carrot-right"></span>
                      </a>
                      <ul class="sub">
                        <li><a class=""href="GB.php"> Table</a></li>
                        <li><a class=""href="ajoutB.php"> formulaire ajout </a></li>

                      </ul>
          </li>
          <li class="sub-menu">
            <a class="" href="index.html">
                          <i class="icon_house_alt"></i>
                          <span>randonné et camping </span>
                      </a>
          </li>

         

          <li class="active">
            <a class="" href="voyage.php">
                          <i class="icon_house_alt"></i>
                          <span>Voyage</span>
                      </a>

          </li>

        </ul>
        <!-- sidebar menu end-->
      </div>
    </aside>
    <!--sidebar end-->

    <!--main content start-->
    <section id="main-content">
      <section class="wrapper">
        <div class="row">
          <div class="col-lg-12">
            <h3 class="page-header"><i class="fa fa-table"></i> Tableau</h3>
            <ol class="breadcrumb">
              <li><i class="fa fa-home"></i><a href="index.html">Accueil</a></li>
              <li><i class="fa fa-table"></i>Gestion des utilisateurs</li>
              
            </ol>
          </div>
        </div>
        <!-- page start-->




        <div class="row">
          <div class="col-lg-12">
            <section class="panel">
              <header class="panel-heading">
                Voici la liste des utilisateurs
              </header>

              <table class="table table-striped table-advance table-hover">
                <tbody>
                  <tr>
                    <th><i class="icon_profile"></i>ID</th>
                    <th><i class="icon_profile"></i> CIN</th>
                    <th><i class="icon_profile"></i>Nom</th>
                    <th><i class="icon_profile"></i>Prenom</th>
                    <th><i class="icon_mobile"></i> Telephone</th>
                    <th><i class="icon_mail_alt"></i> Email</th>
                    <th><i class="icon_profile"></i>Login</th>
                    <th><i class="icon_profile"></i>Mot de passe</th>
                    <th><i class="icon_cogs"></i> Action</th>
                  </tr>
                  <?php
                  foreach($result as $rows)
{
echo ("<tr><td>");
echo $rows['id'];
echo ("</td>");
echo ("<td>");
echo $rows['CIN'];
echo ("</td>");
    echo ("<td>");
    echo $rows['nom'];
    echo ("</td>");
    echo ("<td>");
    echo $rows['prenom'];
    echo ("</td>");
    echo ("<td>");
    echo $rows['telephone'];
    echo ("</td>");
    echo ("<td>");
    echo $rows['email'];
    echo ("</td>");echo ("<td>");
    echo $rows['login'];
    echo ("</td>");
        echo ("</td>");echo ("<td>");
        echo $rows['password'];
    echo ("</td>");
?>
                
                    <td>
                      <div class="btn-group">
                        <a class="btn btn-primary" <?php echo("href=../FRONT/Views/editu.php?id=" .$rows['id']." ") ?>><i class="icon_plus_alt2"></i></a>
                        <a class="btn btn-danger" <?php echo("href=../FRONT/Views/deleteu.php?id=" .$rows['id']." ") ?> ><i class="icon_close_alt2"></i></a>
                      </div>
                    </td>
                  </tr>
                  
            <?php } ?>
                </tbody>
              </table>
            </section>
          </div>
        </div>
        <!-- page end-->
      </section>
    </section>
    <!--main content end-->
    <div class="text-right">
      <div class="credits">
        <!--
            All the links in the footer should remain intact.
            You can delete the links only if you purchased the pro version.
            Licensing information: https://bootstrapmade.com/license/
            Purchase the pro version form: https://bootstrapmade.com/buy/?theme=NiceAdmin
          
        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a> -->
      </div>
    </div>
  </section>
  <!-- container section end -->
  <!-- javascripts -->
  <script src="js/jquery.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <!-- nicescroll -->
  <script src="js/jquery.scrollTo.min.js"></script>
  <script src="js/jquery.nicescroll.js" type="text/javascript"></script>
  <!--custome script for all page-->
  <script src="js/scripts.js"></script>
  <div id="ascrail2000" class="nicescroll-rails"
    style="width: 6px; z-index: 1000; background: rgb(247, 247, 247); cursor: default; position: fixed; top: 0px; height: 100%; right: 0px; opacity: 0;">
    <div
      style="position: relative; top: 0px; float: right; width: 6px; height: 346px; background-color: rgb(0, 122, 255); background-clip: padding-box; border-radius: 10px;">
    </div>
  </div>
  <div id="ascrail2000-hr" class="nicescroll-rails"
    style="height: 6px; z-index: 1000; background: rgb(247, 247, 247); position: fixed; left: 0px; width: 100%; bottom: 0px; cursor: default; display: none; opacity: 0;">
    <div
      style="position: relative; top: 0px; height: 6px; width: 1518px; background-color: rgb(0, 122, 255); background-clip: padding-box; border-radius: 10px;">
    </div>
  </div>
  <div id="ascrail2001" class="nicescroll-rails"
    style="width: 3px; z-index: auto; background: rgb(247, 247, 247); cursor: default; position: fixed; top: 0px; left: 177px; height: 772px; display: none; opacity: 0;">
    <div
      style="position: relative; top: 0px; float: right; width: 3px; height: 0px; background-color: rgb(0, 122, 255); background-clip: padding-box; border-radius: 10px;">
    </div>
  </div>
  <div id="ascrail2001-hr" class="nicescroll-rails"
    style="height: 3px; z-index: auto; background: rgb(247, 247, 247); top: 769px; left: 0px; position: fixed; cursor: default; display: none; opacity: 0;">
    <div
      style="position: relative; top: 0px; height: 3px; width: 0px; background-color: rgb(0, 122, 255); background-clip: padding-box; border-radius: 10px; left: 0px;">
    </div>
  </div>
</body>

</html>