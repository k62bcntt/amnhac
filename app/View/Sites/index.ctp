<article id="content">
    <div class="col-1">
        <div class="p2">
        <h2>New Album</h2>
        <img src="images/col-1-img1.png" class="p1" alt=""> <a href="#" class="more">Read More</a></div>
        <div class="p2">
        <h2>New Video</h2>
        <a href="../../webroot/video/video_AS3.swf?width=512&amp;height=288&amp;fileVideo=temp_video.flv" rel="prettyPhoto"><img class="p1" src="<?php 
                echo $this->Html->image('frontend/col1-video-thumb1.jpg',array());
                ?>" alt=""></a>
        <div class="alc"><a href="index-2.html">More Videos</a></div>
        </div>
    </div>
    <div class="col-2">
        <!-- audio player begin -->
        <div id="jplayer"></div>
        <div class="jp-audio">
        <h2>New Song</h2>
        <div class="jp-type-single">
            <div id="jp_interface_1" class="jp-interface">
            <ul class="jp-controls">
                <li><a href="#" class="jp-play"></a></li>
                <li><a href="#" class="jp-pause"></a></li>
                <li><a href="#" class="jp-prev">Previous Track</a></li>
                <li><a href="#" class="jp-next">Next Track</a></li>
                <li><a href="#" class="jp-more-songs">Listen to More Songs</a></li>
            </ul>
            <div class="jp-progress">
                <div class="jp-seek-bar">
                <div class="jp-play-bar"></div>
                </div>
            </div>
            <div class="jp-title"></div>
            </div>
        </div>
        </div>
        <!-- audio player end -->
        <h2 class="pl">Upcoming Tour Dates</h2>
        <div class="table-border">
        <table class="dates" cellpadding="0" cellspacing="0" border="0">
            <tr class="thead">
            <td class="col1">Date / Venue</td>
            <td class="col2">Location</td>
            <td class="col3">Information</td>
            </tr>
            <tr class="even">
            <td class="col1">April 6, 2011<br>
                <a href="#" class="name">Motorpint Arena</a><br>
                <a href="#" class="facebook-event">Facebook Event</a></td>
            <td>416 S. 9th St. 83702<br>
                Boise, ID</td>
            <td>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium dolorlaudantium, totam rem aperiam.</td>
            </tr>
            <tr>
            <td class="col1">April 6, 2011<br>
                <a href="#" class="name">Echo Arena</a><br>
                <a href="#" class="facebook-event">Facebook Event</a></td>
            <td>416 S. 9th St. 83702<br>
                Boise, ID</td>
            <td>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium dolorlaudantium, totam rem aperiam.</td>
            </tr>
            <tr class="even">
            <td class="col1">April 6, 2011<br>
                <a href="#" class="name">Motorpint Arena</a><br>
                <a href="#" class="facebook-event">Facebook Event</a></td>
            <td>416 S. 9th St. 83702<br>
                Boise, ID</td>
            <td>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium dolorlaudantium, totam rem aperiam.</td>
            </tr>
            <tr>
            <td class="col1">April 6, 2011<br>
                <a href="#" class="name">The NEC Arena</a><br>
                <a href="#" class="facebook-event">Facebook Event</a></td>
            <td>416 S. 9th St. 83702<br>
                Boise, ID</td>
            <td>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium dolorlaudantium, totam rem aperiam.</td>
            </tr>
        </table>
        </div>
    </div>
    <div class="col-3">
        <h2>Latest Tweets</h2>
        <div class="und">
        <p>At vero eos et accusamus et iusto odio dignissimos ducimus blanditiis.<br>
            <a href="#">1 hour ago</a></p>
        <p>Praesentium voluptatumdel enititque corrupti quos.<br>
            <a href="#">3 hours ago</a></p>
        <p>dolores et quas molestias excepturi sint occaecati cupiditate.<br>
            <a href="#">7 hours ago</a></p>
        <p>Non provident, similiqusunt in culpa qui officia.<br>
            <a href="#">12 hours ago</a></p>
        <p>At vero eos et accusamus et iusto odio dignissimos ducimus blanditiis.<br>
            <a href="#">16 hours ago</a></p>
        </div>
        <h2>Newsletter</h2>
        <form action="" id="subscribe">
        <fieldset>
            <label>
            <input type="text">
            </label>
            <input type="submit" value="">
        </fieldset>
        </form>
        <h2>Find Me</h2>
        <ul class="soc-ico">
            <li><a href="#">
                <?php 
                echo $this->Html->image('frontend/facebook.jpg',array());
                ?>
                </a>
            </li>
            <li><a href="#">
                <?php 
                echo $this->Html->image('frontend/twitter.jpg',array());
                ?>
                </a>
            </li>
        </ul>
    </div>
</article>