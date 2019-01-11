<div class="container-fluid">
  <hr>
  <div class="row-fluid">
    <div class="span12">
		<div class="widget-box">
	        <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
	          <h5>會員新增</h5>
	        </div>
	        <div class="widget-content nopadding">
	          <form action="#" method="get" class="form-horizontal">
	          	<input type="hidden" name="user_id" value=""/>
	          	<div class="control-group">
	              <label class="control-label">名稱 :</label>
	              <div class="controls">
	                <input type="text" class="span11" placeholder="名稱" name="name"/>
	              </div>
	            </div>
	            <div class="control-group">
	              <label class="control-label">帳號 :</label>
	              <div class="controls">
	                <input type="text" class="span11" placeholder="帳號" name="acconut" />
	              </div>
	            </div>
	            <div class="control-group">
	              <label class="control-label">密碼 :</label>
	              <div class="controls">
	                <input type="password"  class="span11" placeholder="密碼" name="password"  />
	              </div>
	            </div>
	            <div class="control-group">
	              <label class="control-label">重新輸入密碼 :</label>
	              <div class="controls">
	                <input type="password"  class="span11" placeholder="再輸入一次密碼" name="password_confirm" />
	              </div>
	            </div>
	            <div class="control-group">
	              <label class="control-label">E-Mail :</label>
	              <div class="controls">
	                <input type="email" class="span11" placeholder="E-Mail" name="email" />
	              </div>
	            </div>
	            <div class="control-group">
	              <label class="control-label">Line名稱 :</label>
	              <div class="controls">
	                <input type="text" class="span11" placeholder="Line名稱" name="line_name" />
	              </div>
	            </div>
	            <div class="control-group">
	              <label class="control-label">身分</label>
	              <div class="controls">
	                <select name="user_lv1" >
	                	<?php foreach($lv1_list as $key =>$val): ?>
	                  	<option value="<?php echo $key ?>"><?php echo $val['name'] ?></option>
	                  	<?php endforeach;?>
	                </select>
	              </div>
	            </div>
	            <div class="control-group">
	              <label class="control-label">遊戲群</label>
	              <div class="controls">
	                <select multiple name="user_lv2" id="user_lv2">
	                	<?php foreach($lv2_list as $key =>$val): ?>
	                  	<option selected value="<?php echo $key ?>"><?php echo $val['name'] ?></option>
	                  	<?php endforeach;?>
	                </select>
	              </div>
	            </div>
	            <div class="control-group">
	              <label class="control-label">軍團選擇</label>
	              <div class="controls" id="user_lv3">
	                <label>
	                  <input type="checkbox" name="user_lv3" />
	                  First One
	                </label>
	                
	              </div>
	            </div>
	            
	            <div class="control-group">
	              <label class="control-label">Disabled Input</label>
	              <div class="controls">
	                <input type="text" placeholder="You can't type anything…" disabled="" class="span11">
	              </div>
	            </div>
	            <div class="form-actions">
	              <button type="submit" class="btn btn-success">Save</button>
	            </div>
	          </form>
	        </div>
	      </div>
		</div>
	</div>
</div>



<script src="js/jquery.min.js"></script> 
<script src="js/jquery.ui.custom.js"></script> 
<script src="js/bootstrap.min.js"></script> 
<script src="js/bootstrap-colorpicker.js"></script> 
<script src="js/bootstrap-datepicker.js"></script> 
<!--<script src="js/jquery.toggle.buttons.html"></script>-->
<script src="js/masked.js"></script> 
<script src="js/jquery.uniform.js"></script> 
<script src="js/select2.min.js"></script> 
<script src="js/matrix.js"></script> 
<script src="js/matrix.form_common.js"></script>
<script src="js/wysihtml5-0.3.0.js"></script> 
<script src="js/jquery.peity.min.js"></script>

<script>
	$('#user_lv2').change(function (){
		var user_lv2 = Array();
		var z = 0
		$("#user_lv2").find(":selected").each(function() {
			z++;
			user_lv2[z] = this.value;
		});
		$.ajax({
                url: "ajax/AjaxUser_lv2.php",
                type:"POST",
                date :{
                	user_lv2: user_lv2
                },
                dataType: "json",
                success: function (data) {
                    dataArray = new Array();
                    
                    var data_html = '';
                    
                    for (var i=0; i < data.length; i++) {
						dataArray[i] = data[i];
                    	 
						data_html += '<label><input type="checkbox" name="user_lv3" />First One</label>';
                    	 
                    }
                    data_html += '</table>';
                    
                    $('#UpdataImgList').html(data_html);
                    
                    
                    
                    
                }
            });
	});
</script> 
