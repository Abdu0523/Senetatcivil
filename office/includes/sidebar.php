     <?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');
if (strlen($_SESSION['obcsaid']==0)) {
  header('location:logout.php');
  } else{



  ?>
  <div class="left-sidebar-pro">
            <nav id="sidebar">
                <div class="sidebar-header">
                    <a href="#"><img src="img/avatar.jpg" alt="" />
                    </a>
                    <?php
$aid=$_SESSION['obcsaid'];
$sql="SELECT FirstName from  tbloffice where ID=:aid";
$query = $dbh -> prepare($sql);
$query->bindParam(':aid',$aid,PDO::PARAM_STR);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
$cnt=1;
if($query->rowCount() > 0)
{
foreach($results as $row)
{               ?>
                    <h3> <?php  echo $row->FirstName;?></h3>
                    <p> Officier d'état civil</p>
                  <?php $cnt=$cnt+1;}} ?>
                </div>
                <div class="left-custom-menu-adp-wrap">
                    <ul class="nav navbar-nav left-sidebar-menu-pro">
                        
                    <li class="nav-item">
                            <a href="search.php" role="button" aria-expanded="false"><i class="fa fa-search"></i> <span class="mini-dn">Rechercher Certificat</span> </a>
                            
                        </li>
                 
                        <li class="nav-item"><a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle"><i class="fa big-icon fa-table"></i> <span class="mini-dn">Certificat de Naiss.</span> <span class="indicator-right-menu mini-dn"><i class="fa indicator-mn fa-angle-left"></i></span></a>
                            <div role="menu" class="dropdown-menu left-menu-dropdown animated flipInX">
                                <a href="new-applications.php" class="dropdown-item">En attente</a>
                                <a href="verified-application.php" class="dropdown-item">Approuvés</a>
                                <a href="rejected-applications.php" class="dropdown-item">Rejetés</a>
                            </div>
                        </li>
                        
                        
                             <li class="nav-item">
                            <a href="  registered-users.php" role="button" aria-expanded="false"><i class="fa fa-user"></i> <span class="mini-dn">Gerer Agents</span> </a>
                            
                        </li>
                   
                      
                    </ul>
                </div>
            </nav>
        </div>
        <?php }  ?>