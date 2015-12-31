<div class="mainpanel">
    <div class="pageheader">
        <div class="media">
            <div class="pageicon pull-left">
                <i class="fa fa-pencil"></i>
            </div>
            <div class="media-body">
                <ul class="breadcrumb">
                    <li><a href=""><i class="glyphicon glyphicon-home"></i></a></li>
                    <li><a href="">Forms</a></li>
                    <li>General Forms</li>
                </ul>
                <h4>Thêm bài hát</h4>
            </div>
        </div><!-- media -->
    </div><!-- pageheader -->
    <div class="contentpanel">
        <div class="row">
            <div class="col-md-6">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <div class="panel-btns">
                            <a href="" class="panel-minimize tooltips" data-toggle="tooltip" title="Minimize Panel"><i class="fa fa-minus"></i></a>
                            <a href="" class="panel-close tooltips" data-toggle="tooltip" title="Close Panel"><i class="fa fa-times"></i></a>
                        </div><!-- panel-btns -->
                        <h4 class="panel-title">Bài hát</h4>
                        <p>Thêm vào các thông tin bài hát</p>
                    </div><!-- panel-heading -->
                    
                    <div class="panel-body nopadding">
                        <?php
                        $this->Form->create(null,array('controller'=>'musics','action'=>'add_song','admin'=>false,'plugin'=>false,'class'=>'form-horizontal form-bordered'));
                        ?>
                            <div class="form-group">
                            <br/>
                                <?php
                                echo $this->Form->input('name',array('type'=>'text','class'=>'form-control','div'=>'col-sm-8','label'=>'Tên bài hát', 'placeholder'=>'Nhập tên bài hát'));
                                ?>
                            </div><!-- form-group -->
                            <div class="form-group">
                                <div class="mb30"></div>
                                <h5 class="lg-title">Multi-Value Select Boxes</h5>
                                <p class="mb20">Select2 also supports multi-value select boxes. The select below is declared with the multiple attribute. </p>
                                <select id="select-multi" data-placeholder="Choose One" multiple class="width300">
                                    <option value="">Choose One</option>
                                    <optgroup label="Alaskan/Hawaiian Time Zone">
                                        <option value="AK">Alaska</option>
                                        <option value="HI">Hawaii</option>
                                    </optgroup>
                                    <optgroup label="Pacific Time Zone">
                                        <option value="CA">California</option>
                                        <option value="NV">Nevada</option>
                                        <option value="OR">Oregon</option>
                                        <option value="WA">Washington</option>
                                    </optgroup>
                                    <optgroup label="Mountain Time Zone">
                                        <option value="AZ">Arizona</option>
                                        <option value="CO">Colorado</option>
                                        <option value="ID">Idaho</option>
                                        <option value="MT">Montana</option><option value="NE">Nebraska</option>
                                        <option value="NM">New Mexico</option>
                                        <option value="ND">North Dakota</option>
                                        <option value="UT">Utah</option>
                                        <option value="WY">Wyoming</option>
                                    </optgroup>
                                    <optgroup label="Central Time Zone">
                                        <option value="AL">Alabama</option>
                                        <option value="AR">Arkansas</option>
                                        <option value="IL">Illinois</option>
                                        <option value="IA">Iowa</option>
                                        <option value="KS">Kansas</option>
                                        <option value="KY">Kentucky</option>
                                        <option value="LA">Louisiana</option>
                                        <option value="MN">Minnesota</option>
                                        <option value="MS">Mississippi</option>
                                        <option value="MO">Missouri</option>
                                        <option value="OK">Oklahoma</option>
                                        <option value="SD">South Dakota</option>
                                        <option value="TX">Texas</option>
                                        <option value="TN">Tennessee</option>
                                        <option value="WI">Wisconsin</option>
                                    </optgroup>
                                    <optgroup label="Eastern Time Zone">
                                        <option value="CT">Connecticut</option>
                                        <option value="DE">Delaware</option>
                                        <option value="FL">Florida</option>
                                        <option value="GA">Georgia</option>
                                        <option value="IN">Indiana</option>
                                        <option value="ME">Maine</option>
                                        <option value="MD">Maryland</option>
                                        <option value="MA">Massachusetts</option>
                                        <option value="MI">Michigan</option>
                                        <option value="NH">New Hampshire</option><option value="NJ">New Jersey</option>
                                        <option value="NY">New York</option>
                                        <option value="NC">North Carolina</option>
                                        <option value="OH">Ohio</option>
                                        <option value="PA">Pennsylvania</option><option value="RI">Rhode Island</option><option value="SC">South Carolina</option>
                                        <option value="VT">Vermont</option><option value="VA">Virginia</option>
                                        <option value="WV">West Virginia</option>
                                    </optgroup>
                                </select>
                                        
                            </div>
                            <div class="form-group">
                                <?php
                                echo $this->Form->input('moTa',array('type'=>'textarea','class'=>'form-control','div'=>'col-sm-8','label'=>'Mô tả bài hát', 'placeholder'=>'Mô tả bài hát ...','id'=>'autoResizeTA','style'=>array('resize:none'),'row'=>'10'));
                                ?>
                            </div><!-- form-group -->



                            <div class="form-group">
                                <label class="col-sm-4 control-label" for="disabledinput">Disabled Input</label>
                                <div class="col-sm-8">
                                    <input type="text" placeholder="Disabled Input" id="disabledinput" class="form-control" disabled="" />
                                </div>
                            </div><!-- form-group -->
    
                            <div class="form-group">
                                <label class="col-sm-4 control-label" for="readonlyinput">Read-Only Input</label>
                                <div class="col-sm-8">
                                    <input type="text" value="Read Only Input" id="readonlyinput" class="form-control" readonly="readonly" />
                                </div>
                            </div><!-- form-group -->
    
                            <div class="form-group">
                                <label class="col-sm-4 control-label">Help Text</label>
                                <div class="col-sm-8">
                                    <input type="text" placeholder="Help Text" class="form-control">
                                    <span class="help-block">A block of help text that breaks onto a new line and may extend beyond one line.</span>
                                </div>
                            </div><!-- form-group -->
    
                            <div class="form-group">
                                <label class="col-sm-4 control-label">Input w/ Tooltip</label>
                                <div class="col-sm-8">
                                    <input type="text" placeholder="Hover me" title="Tooltip goes here" data-toggle="tooltip" data-trigger="hover" class="form-control tooltips" />
                                </div>
                            </div><!-- form-group -->
    
                            <div class="form-group">
                                <label class="col-sm-4 control-label">Input w/ Popover</label>
                                <div class="col-sm-8">
                                    <input type="text" placeholder="Click Me" class="form-control popovers" data-toggle="popover" data-placement="top" data-original-title="The Title" data-content="Content goes here..." data-trigger="click" />
                                </div>
                            </div><!-- form-group -->
    
                            <div class="form-group">
                                <label class="col-sm-4 control-label">Placeholder</label>
                                <div class="col-sm-8">
                                    <input type="text" placeholder="This is a placeholder" class="form-control">
                                </div>
                            </div><!-- form-group -->
                            
                            <div class="form-group has-success">
                                <label class="col-sm-4 control-label">Input with success</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control">
                                </div>
                            </div><!-- form-group -->
                                
                            <div class="form-group has-warning">
                                <label class="col-sm-4 control-label">Input with warning</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control">
                                </div>
                            </div><!-- form-group -->
                                
                            <div class="form-group has-error">
                                <label class="col-sm-4 control-label">Input with error</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control">
                                </div>
                            </div><!-- form-group -->
                                
                            <div class="form-group">
                                <label class="col-sm-4 control-label">Column sizing</label>
                                <div class="col-sm-3">
                                    <input type="text" placeholder=".col-sm-4" class="form-control">
                                </div>
                                <div class="col-sm-3">
                                    <input type="text" placeholder=".col-sm-3" class="form-control">
                                </div>
                                <div class="col-sm-2">
                                    <input type="text" placeholder=".col-sm-2" class="form-control">
                                </div>
                            </div><!-- form-group -->
                                
                            <div class="form-group">
                                <label class="col-sm-4 control-label">Input Sizing</label>
                                <div class="col-sm-8">
                                    <input type="text" placeholder=".input-sm" class="form-control input-sm mb15">
                                    <input type="text" placeholder="default" class="form-control mb15">
                                    <input type="text" placeholder=".input-lg" class="form-control input-lg">
                                </div>
                            </div><!-- form-group -->
                                
                            <div class="form-group">
                                <label class="col-sm-4 control-label">Input Tags</label>
                                <div class="col-sm-8">
                                    <input name="tags" id="tags" class="form-control" value="foo,bar,baz" />
                                </div>
                            </div><!-- form-group -->
                                
                            <div class="form-group">
                                <label class="col-sm-4 control-label">Textarea</label>
                                <div class="col-sm-8">
                                    <textarea class="form-control" rows="5"></textarea>
                                </div>
                            </div><!-- form-group -->
                                
                            
                                
                            <div class="form-group">
                                <label class="col-sm-4 control-label">Spinner</label>
                                <div class="col-sm-8">
                                    <input type="text" id="spinner" />
                                    <span class="help-block">Enhance a text input for entering numeric values, with up/down buttons and arrow key handling.</span>
                                  </div>
                            </div><!-- form-group -->
                                
                        </form>          
                    </div><!-- panel-body -->       
                </div>
            </div>  
            <div class="col-md-6">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <div class="panel-btns">
                            <a href="" class="panel-minimize tooltips" data-toggle="tooltip" title="Minimize Panel"><i class="fa fa-minus"></i></a>
                            <a href="" class="panel-close tooltips" data-toggle="tooltip" title="Close Panel"><i class="fa fa-times"></i></a>
                        </div><!-- panel-btns -->
                        <h5 class="panel-title">Thông tin tác giả bài hát</h5>
                        <p>Cập nhật thông tin tác giả cho bài hát bên trái</p>
                    </div><!-- panel-heading -->
                    <div class="panel-body nopadding">
                        <form class="form-bordered">
                            <div class="form-group">
                                <label class="col-sm-4 control-label">Native Radio</label>
                                <div class="col-sm-8">
                                    <div class="radio"><label><input type="radio"> Unchecked</label></div>
                                    <div class="radio"><label><input type="radio" checked=""> Checked</label></div>
                                    <div class="radio"><label><input type="radio" disabled=""> Disabled Unchecked</label></div>
                                    <div class="radio"><label><input type="radio" checked="" disabled=""> Disabled Checked</label></div>
                                </div>
                            </div><!-- form-group -->
                        
                            <div class="form-group">
                                <label class="col-sm-4 control-label">Native Checkbox</label>
                                <div class="col-sm-8">
                                    <div class="checkbox block"><label><input type="checkbox"> Unchecked</label></div>
                                    <div class="checkbox block"><label><input type="checkbox" checked=""> Checked</label></div>
                                    <div class="checkbox block"><label><input type="checkbox" disabled=""> Disabled Unchecked</label></div>
                                    <div class="checkbox block"><label><input type="checkbox" checked="" disabled=""> Disabled Checked</label></div>
                                </div>
                            </div><!-- form-group -->
                            
                            <div class="form-group">
                                <label class="col-sm-4 control-label">Enhanced Radios</label>
                                <div class="col-sm-8">
                                    
                                    <div class="rdio rdio-default">
                                        <input type="radio" name="radio" id="radioDefault" value="1" checked="checked" />
                                        <label for="radioDefault">Radio Default</label>
                                    </div>
                                      
                                    <div class="rdio rdio-primary">
                                        <input type="radio" name="radio" value="2" id="radioPrimary" />
                                        <label for="radioPrimary">Radio Primary</label>
                                    </div>
                                      
                                    <div class="rdio rdio-warning">
                                        <input type="radio" name="radio" value="3" id="radioWarning" />
                                        <label for="radioWarning">Radio Warning</label>
                                    </div>
                                      
                                    <div class="rdio rdio-success">
                                        <input type="radio" name="radio" value="4" id="radioSuccess" />
                                        <label for="radioSuccess">Radio Success</label>
                                    </div>
                                      
                                    <div class="rdio rdio-danger">
                                        <input type="radio" name="radio" value="5" id="radioDanger" />
                                        <label for="radioDanger">Radio Danger</label>
                                    </div>
                                      
                                    <div class="rdio rdio-default">
                                        <input type="radio" name="radio" value="6" disabled="disabled" id="radioDisabled" />
                                        <label for="radioDisabled">Radio Disabled</label>
                                    </div>
                                      
                                </div><!-- col-sm-8 -->
                            </div><!-- form-group -->
                            
                            <div class="form-group">
                                <label class="col-sm-4 control-label">Enhanced Checkboxes</label>
                                <div class="col-sm-8">
                                    <div class="ckbox ckbox-default">
                                        <input type="checkbox" value="1" id="checkboxDefault" checked="checked" />
                                        <label for="checkboxDefault">Checkbox Default</label>
                                    </div>
                                      
                                    <div class="ckbox ckbox-primary">
                                        <input type="checkbox" value="1" id="checkboxPrimary" checked="checked" />
                                        <label for="checkboxPrimary">Checkbox Primary</label>
                                    </div>
                                      
                                    <div class="ckbox ckbox-warning">
                                        <input type="checkbox" id="checkboxWarning" checked="checked" />
                                        <label for="checkboxWarning">Checkbox Warning</label>
                                    </div>
                                      
                                    <div class="ckbox ckbox-success">
                                        <input type="checkbox" id="checkboxSuccess" checked="checked" />
                                        <label for="checkboxSuccess">Checkbox Success</label>
                                    </div>
                                      
                                    <div class="ckbox ckbox-danger">
                                        <input type="checkbox" id="checkboxDanger" checked="checked" />
                                        <label for="checkboxDanger">Checkbox Danger</label>
                                    </div>
                                      
                                    <div class="ckbox ckbox-default">
                                        <input type="checkbox" id="checkboxDisabled" disabled="disabled" />
                                        <label for="checkboxDisabled">Checkbox Disabled</label>
                                    </div>
                                    
                                </div><!-- col-sm-8 -->
                            </div><!-- form-group -->
                        </form>
                    </div><!-- panel-body -->
                </div>
            </div>
        </div>    
    </div><!-- contentpanel -->
</div>  
<script>
            jQuery(document).ready(function() {
                
                // Tags Input
                jQuery('#tags').tagsInput({width:'auto'});
                 
                // Textarea Autogrow
                jQuery('#autoResizeTA').autogrow();
                
                // Spinner
                var spinner = jQuery('#spinner').spinner();
                spinner.spinner('value', 0);
                
                // Form Toggles
                jQuery('.toggle').toggles({on: true});
                
                // Time Picker
                jQuery('#timepicker').timepicker({defaultTIme: false});
                jQuery('#timepicker2').timepicker({showMeridian: false});
                jQuery('#timepicker3').timepicker({minuteStep: 15});
                
                // Date Picker
                jQuery('#datepicker').datepicker();
                jQuery('#datepicker-inline').datepicker();
                jQuery('#datepicker-multiple').datepicker({
                    numberOfMonths: 3,
                    showButtonPanel: true
                });
                
                // Input Masks
                jQuery("#date").mask("99/99/9999");
                jQuery("#phone").mask("(999) 999-9999");
                jQuery("#ssn").mask("999-99-9999");
                
                // Select2
                jQuery("#select-basic, #select-multi").select2();
                jQuery('#select-search-hide').select2({
                    minimumResultsForSearch: -1
                });
                
                function format(item) {
                    return '<i class="fa ' + ((item.element[0].getAttribute('rel') === undefined)?"":item.element[0].getAttribute('rel') ) + ' mr10"></i>' + item.text;
                }
                
                // This will empty first option in select to enable placeholder
                jQuery('select option:first-child').text('');
                
                jQuery("#select-templating").select2({
                    formatResult: format,
                    formatSelection: format,
                    escapeMarkup: function(m) { return m; }
                });
                
                // Color Picker
                if(jQuery('#colorpicker').length > 0) {
                    jQuery('#colorSelector').ColorPicker({
            onShow: function (colpkr) {
                jQuery(colpkr).fadeIn(500);
                            return false;
            },
            onHide: function (colpkr) {
                            jQuery(colpkr).fadeOut(500);
                            return false;
            },
            onChange: function (hsb, hex, rgb) {
                jQuery('#colorSelector span').css('backgroundColor', '#' + hex);
                jQuery('#colorpicker').val('#'+hex);
            }
                    });
                }
  
                // Color Picker Flat Mode
                jQuery('#colorpickerholder').ColorPicker({
                    flat: true,
                    onChange: function (hsb, hex, rgb) {
            jQuery('#colorpicker3').val('#'+hex);
                    }
                });
                
                
            });
        </script>