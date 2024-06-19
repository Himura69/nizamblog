            <div class="left side-menu">
                <div class="sidebar-inner slimscrollleft">

                    <!--- Sidemenu -->
                    <div id="sidebar-menu">
                        <ul>
                        	

                            <li class="has_sub">
                                <a href="dashboard.php" class="waves-effect"><i class=""></i> <span style="font-family: 'Times New Roman', Times, serif;"> Dashboard </span> </a>
                         
                            </li>
<?php if($_SESSION['utype']=='1'):?>
  <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-format-list-bulleted"></i> <span style="font-family: 'Times New Roman', Times, serif;"> User </span> <span class="menu-arrow"></span></a>
                                <ul class="list-unstyled">
                                    <li><a href="add-subadmins.php" style="font-family: 'Times New Roman', Times, serif;">Tambahkan User</a></li>
                                    <li><a href="manage-subadmins.php" style="font-family: 'Times New Roman', Times, serif;">Edit User</a></li>
                                </ul>
                            </li>
<?php endif;?>
               


                            <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-format-list-bulleted"></i> <span style="font-family: 'Times New Roman', Times, serif;"> Kategori </span> <span class="menu-arrow"></span></a>
                                <ul class="list-unstyled">
                                	<li><a href="add-category.php" style="font-family: 'Times New Roman', Times, serif;">Tambah Kategori</a></li>
                                    <li><a href="manage-categories.php"style="font-family: 'Times New Roman', Times, serif;">Edit Kategori</a></li>
                                </ul>
                            </li>

    <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-format-list-bulleted"></i> <span style="font-family: 'Times New Roman', Times, serif;">Sub Category </span> <span class="menu-arrow"></span></a>
                                <ul class="list-unstyled">
                                    <li><a href="add-subcategory.php" style="font-family: 'Times New Roman', Times, serif;">Tambah Sub Kategori</a></li>
                                    <li><a href="manage-subcategories.php" style="font-family: 'Times New Roman', Times, serif;">Edit Sub Kategori</a></li>
                                </ul>
                            </li>               
  <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-format-list-bulleted"></i> <span style="font-family: 'Times New Roman', Times, serif;"> Berita </span> <span class="menu-arrow"></span></a>
                                <ul class="list-unstyled">
                                    <li><a href="add-post.php" style="font-family: 'Times New Roman', Times, serif;">Tambah Artikel</a></li>
                                    <li><a href="manage-posts.php" style="font-family: 'Times New Roman', Times, serif;">Edit Artikel</a></li>
                                     <li><a href="trash-posts.php" style="font-family: 'Times New Roman', Times, serif;">Sampah Artikel</a></li>
                                </ul>
                            </li>  
                     

                            <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-format-list-bulleted"></i> <span style="font-family: 'Times New Roman', Times, serif;"> Pages </span> <span class="menu-arrow"></span></a>
                                <ul class="list-unstyled">
                                    <li><a href="aboutus.php" style="font-family: 'Times New Roman', Times, serif;">Tentang Kami</a></li>
                                    <li><a href="contactus.php" style="font-family: 'Times New Roman', Times, serif;">Kontak Kami</a></li>
                                </ul>
                            </li>
   <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-format-list-bulleted"></i> <span style="font-family: 'Times New Roman', Times, serif;"> Comments </span> <span class="menu-arrow"></span></a>
                                <ul class="list-unstyled">
                                  <li><a href="unapprove-comment.php" style="font-family: 'Times New Roman', Times, serif;">Menunggu untuk disetujui Admin </a></li>
                                    <li><a href="manage-comments.php" style="font-family: 'Times New Roman', Times, serif;" >Komen disetujui</a></li>
                                </ul>
                            </li>   

                        </ul>
                    </div>
                    <!-- Sidebar -->
                    <div class="clearfix"></div>

                    

                </div>
                <!-- Sidebar -left -->
        
            </div>