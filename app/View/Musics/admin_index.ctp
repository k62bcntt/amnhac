<div class="mainpanel">
    <div class="pageheader">
        <div class="media">
            <div class="pageicon pull-left">
                <i class="fa fa-home"></i>
            </div>
            <div class="media-body">
                <ul class="breadcrumb">
                    <li><a href=""><i class="glyphicon glyphicon-home"></i></a></li>
                    <li>Dashboard</li>
                </ul>
                <h4>Dashboard</h4>
            </div>
        </div>
    </div>
    <div class="contentpanel">
        <?php
        echo $this->Form->create(null,array('url'=>array('plugin'=>false,'controller'=>'comments','action'=>'delete_load','author'=>true),'id'=>'deleteComment','role'=>'form'));
        ?>
        <div>
            <div class="table-responsive">
                <div class="col-sm-2" style="padding-bottom:10px">
                    <select class="form-control selectpicker" name="selectall">
                        <option value="0">Tùy chọn</option>
                        <option value="1">Xóa những mục đã chọn</option>
                        <option value="2">Bình luận hợp lệ</option>
                        <option value="3">Bình luận không hợp lệ</option>
                    </select>
                </div>
                <div class="col-sm-2" style="padding-bottom:10px">
                    <button type="submit" class="btn btn-success" id="#deleteall">Cập nhật</button>
                </div>
                <div class="clearfix"></div>
                <div id="data">
                    <table id="listSong" class="table table-striped table-bordered" width="100%">
                        <thead>
                            <tr>
                                <th>
                                    <input id="checkboxall" type="checkbox" />
                                </th>
                                <th>Ảnh đại diện</th>
                                <th>Hành động</th>
                                <th>Tên</th>
                                <th>Thể loại</th>
                                <th>Tác giả</th>
                                <th>Năm sáng tác</th>
                                <th>Mô tả</th>
                                <th>Ngày tạo</th>
                            </tr>
                        </thead>
                    </table>
                </div>
            </div>
        </div>
        <?php echo $this->Form->end();?>
    </div>
</div>
<?php
    echo $this->Html->css(array('backend/jquery-datatables/css/dataTables.bootstrap'));
    echo $this->Html->script(array('backend/jquery-datatables/js/jquery.dataTables.min','backend/jquery-datatables/js/dataTables.bootstrap','backend/jquery-datatables/extensions/TableTools/js/dataTables.tableTools.min','backend/music/indexMusic'));
?>