<div class="leftpanel">
    <div class="media profile-left">
        <a class="pull-left profile-thumb" href="profile.html">
            <img class="img-circle" src="<?php echo Configure::read('IMG_URL_AVATAR'); ?>profile.png" alt="">
        </a>
        <div class="media-body">
            <h4 class="media-heading">Elen Adarna</h4>
            <small class="text-muted">Beach Lover</small>
        </div>
    </div><!-- media -->
    
    <h5 class="leftpanel-title">Navigation</h5>
    <ul class="nav nav-pills nav-stacked">
        <li class="active"><a href="index.html"><i class="fa fa-home"></i> <span>Dashboard</span></a></li>
        <li><a href="messages.html"><span class="pull-right badge">5</span><i class="fa fa-envelope-o"></i> <span>Messages</span></a></li>
        <li class="parent">
            <?php
            echo $this->Html->link("<i class='fa fa-user-md'></i> <span>Quản lý người quản trị</span>",array('controller'=>'musics','action'=>'index'),array('rel'=>'tooltip','data-placement'=>'left','data-original-title'=>'Edit','class'=>'','escape'=>false));
            ?>
            <ul class="children">
                <li>
                    <?php
                    echo $this->Html->link("<i class=\"fa fa-edit\"></i> Thêm người quản trị",array('controller'=>'musics','action'=>'add'),array('rel'=>'tooltip','data-placement'=>'left','data-original-title'=>'Edit','class'=>'','escape'=>false));
                    ?>
                </li>
                <li>
                    <?php
                    echo $this->Html->link("<i class=\"fa fa-edit\"></i> Danh sách người quản trị",array('controller'=>'musics','action'=>'index'),array('rel'=>'tooltip','data-placement'=>'left','data-original-title'=>'Edit','class'=>'','escape'=>false));
                    ?>
                </li>
            </ul>
        </li>
        <li class="parent">
            <?php
            echo $this->Html->link("<i class='fa fa-user'></i> <span>Quản lý người dùng</span>",array('controller'=>'musics','action'=>'index'),array('rel'=>'tooltip','data-placement'=>'left','data-original-title'=>'Edit','class'=>'','escape'=>false));
            ?>
            <ul class="children">
                <li>
                    <?php
                    echo $this->Html->link("<i class=\"fa fa-edit\"></i> Thêm người dùng",array('controller'=>'musics','action'=>'add'),array('rel'=>'tooltip','data-placement'=>'left','data-original-title'=>'Edit','class'=>'','escape'=>false));
                    ?>
                </li>
                <li>
                    <?php
                    echo $this->Html->link("<i class=\"fa fa-edit\"></i> Danh sách người dùng",array('controller'=>'musics','action'=>'index'),array('rel'=>'tooltip','data-placement'=>'left','data-original-title'=>'Edit','class'=>'','escape'=>false));
                    ?>
                </li>
            </ul>
        </li>
        <li class="parent">
            <?php
            echo $this->Html->link("<i class=\"fa fa-bars\"></i> <span>Quản lý danh mục</span>",array('controller'=>'musics','action'=>'index'),array('rel'=>'tooltip','data-placement'=>'left','data-original-title'=>'Edit','class'=>'','escape'=>false));
            ?>
            <ul class="children">
                <li>
                    <?php
                    echo $this->Html->link("<i class=\"fa fa-edit\"></i> Thêm danh mục",array('controller'=>'musics','action'=>'add'),array('rel'=>'tooltip','data-placement'=>'left','data-original-title'=>'Edit','class'=>'','escape'=>false));
                    ?>
                </li>
                <li>
                    <?php
                    echo $this->Html->link("<i class=\"fa fa-edit\"></i> Danh sách danh mục",array('controller'=>'musics','action'=>'index'),array('rel'=>'tooltip','data-placement'=>'left','data-original-title'=>'Edit','class'=>'','escape'=>false));
                    ?>
                </li>
            </ul>
        </li>
        <li class="parent">
            <?php
            echo $this->Html->link("<i class='fa fa-music'></i> <span>Quản lý bài hát</span>",array('controller'=>'musics','action'=>'index'),array('rel'=>'tooltip','data-placement'=>'left','data-original-title'=>'Edit','class'=>'','escape'=>false));
            ?>
            <ul class="children">
                <li>
                    <?php
                    echo $this->Html->link("<i class=\"fa fa-edit\"></i> Thêm bài hát",array('controller'=>'musics','action'=>'add'),array('rel'=>'tooltip','data-placement'=>'left','data-original-title'=>'Edit','class'=>'','escape'=>false));
                    ?>
                </li>
                <li>
                    <?php
                    echo $this->Html->link("<i class=\"fa fa-edit\"></i> Danh sách bài hát",array('controller'=>'musics','action'=>'admin_index'),array('rel'=>'tooltip','data-placement'=>'left','data-original-title'=>'Edit','class'=>'','escape'=>false));
                    ?>
                </li>
            </ul>
        </li>
        <li class="parent">
            <?php
            echo $this->Html->link("<i class='fa fa-picture-o'></i> <span>Quản lý hình ảnh</span>",array('controller'=>'musics','action'=>'index'),array('rel'=>'tooltip','data-placement'=>'left','data-original-title'=>'Edit','class'=>'','escape'=>false));
            ?>
            <ul class="children">
                <li>
                    <?php
                    echo $this->Html->link("<i class=\"fa fa-edit\"></i> Thêm hình ảnh",array('controller'=>'musics','action'=>'add'),array('rel'=>'tooltip','data-placement'=>'left','data-original-title'=>'Edit','class'=>'','escape'=>false));
                    ?>
                </li>
                <li>
                    <?php
                    echo $this->Html->link("<i class=\"fa fa-edit\"></i> Danh sách hình ảnh",array('controller'=>'musics','action'=>'index'),array('rel'=>'tooltip','data-placement'=>'left','data-original-title'=>'Edit','class'=>'','escape'=>false));
                    ?>
                </li>
            </ul>
        </li>
        <li class="parent">
            <?php
            echo $this->Html->link("<i class=\"fa fa-bars\"></i> <span>Quản lý bình luận</span>",array('controller'=>'musics','action'=>'index'),array('rel'=>'tooltip','data-placement'=>'left','data-original-title'=>'Edit','class'=>'','escape'=>false));
            ?>
            <ul class="children">
                <li>
                    <?php
                    echo $this->Html->link("<i class=\"fa fa-edit\"></i> Danh sách hình ảnh",array('controller'=>'musics','action'=>'index'),array('rel'=>'tooltip','data-placement'=>'left','data-original-title'=>'Edit','class'=>'','escape'=>false));
                    ?>
                </li>
            </ul>
        </li>

        <li class="parent">
            <?php
            echo $this->Html->link("<i class=\"fa fa-bars\"></i> <span>Quản lý album nhạc</span>",array('controller'=>'musics','action'=>'index'),array('rel'=>'tooltip','data-placement'=>'left','data-original-title'=>'Edit','class'=>'','escape'=>false));
            ?>
            <ul class="children">
                <li>
                    <?php
                    echo $this->Html->link("<i class=\"fa fa-edit\"></i> Thêm album",array('controller'=>'musics','action'=>'add'),array('rel'=>'tooltip','data-placement'=>'left','data-original-title'=>'Edit','class'=>'','escape'=>false));
                    ?>
                </li>
                <li>
                    <?php
                    echo $this->Html->link("<i class=\"fa fa-edit\"></i> Danh sách album",array('controller'=>'musics','action'=>'index'),array('rel'=>'tooltip','data-placement'=>'left','data-original-title'=>'Edit','class'=>'','escape'=>false));
                    ?>
                </li>
            </ul>
        </li>

        <li class="parent">
            <?php
            echo $this->Html->link("<i class=\"fa fa-bars\"></i> <span>Quản lý list nhạc</span>",array('controller'=>'musics','action'=>'index'),array('rel'=>'tooltip','data-placement'=>'left','data-original-title'=>'Edit','class'=>'','escape'=>false));
            ?>
            <ul class="children">
                <li>
                    <?php
                    echo $this->Html->link("<i class=\"fa fa-edit\"></i> Thêm list",array('controller'=>'musics','action'=>'add'),array('rel'=>'tooltip','data-placement'=>'left','data-original-title'=>'Edit','class'=>'','escape'=>false));
                    ?>
                </li>
                <li>
                    <?php
                    echo $this->Html->link("<i class=\"fa fa-edit\"></i> Danh sách list nhạc",array('controller'=>'musics','action'=>'index'),array('rel'=>'tooltip','data-placement'=>'left','data-original-title'=>'Edit','class'=>'','escape'=>false));
                    ?>
                </li>
            </ul>
        </li>
        <li><a href="maps.html"><i class="fa fa-map-marker"></i> <span>Maps</span></a></li>
        <li class="parent"><a href=""><i class="fa fa-file-text"></i> <span>Pages</span></a>
            <ul class="children">
                <li><a href="notfound.html">404 Page</a></li>
                <li><a href="blank.html">Blank Page</a></li>
                <li><a href="calendar.html">Calendar</a></li>
                <li><a href="invoice.html">Invoice</a></li>
                <li><a href="locked.html">Locked Screen</a></li>
                <li><a href="media-manager.html">Media Manager</a></li>
                <li><a href="people-directory.html">People Directory</a></li>
                <li><a href="profile.html">Profile</a></li>                                
                <li><a href="search-results.html">Search Results</a></li>
                <li><a href="signin.html">Sign In</a></li>
                <li><a href="signup.html">Sign Up</a></li>
            </ul>
        </li>
        
    </ul>
</div><!-- leftpanel -->    