<div class="container-fluid">
  <hr>
  <div class="row-fluid">
    <div class="span12">
		<div class="widget-box">
	        <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
	          <h5>會員新增</h5>
	        </div>
	        <div class="widget-content nopadding">
	          <form action="userSave.php" method="post" class="form-horizontal" onsubmit="return from_check();">
	          	<input type="hidden" name="user_id" value=""/>
	          	<div class="control-group">
	              <label class="control-label">名稱 :</label>
	              <div class="controls">
	                <input type="text" class="span11" placeholder="名稱(必填)" name="name" required />
	              </div>
	            </div>
	            <div class="control-group">
	              <label class="control-label">帳號 :</label>
	              <div class="controls">
	                <input type="text" class="span11" placeholder="帳號(必填)" name="acconut" required />
	                <p id='acconut_text' style="display: none;color: red"></p>
	              </div>
	            </div>
	            <div class="control-group">
	              <label class="control-label">密碼 :</label>
	              <div class="controls">
	                <input type="password"  class="span11" placeholder="密碼(必填)" name="password" required />
	              </div>
	            </div>
	            <div class="control-group">
	              <label class="control-label">重新輸入密碼 :</label>
	              <div class="controls">
	                <input type="password"  class="span11" placeholder="再輸入一次密碼(必填)" name="password_confirm" required />
	              	<p id='password_confirm_text' style="display: none;color: red"></p>
	              </div>
	            </div>
	            <div class="control-group">
	              <label class="control-label">E-Mail :</label>
	              <div class="controls">
	                <input type="email" class="span11" placeholder="E-Mail(必填)" name="email" required />
	              </div>
	            </div>
	            <div class="control-group">
	              <label class="control-label">Line名稱 :</label>
	              <div class="controls">
	                <input type="text" class="span11" placeholder="Line名稱(選填)" name="line_name" />
	              </div>
	            </div>
	            <div class="control-group">
	              <label class="control-label">身分</label>
	              <div class="controls">
	                <select name="user_lv1" id='user_lv1'>
	                	<option value="-1" selected >請選擇(必選)</option>
	                	<?php foreach($lv1_list as $key =>$val): ?>
	                  	<option value="<?php echo $key ?>"><?php echo $val['name'] ?></option>
	                  	<?php endforeach;?>
	                </select>
	                <p id='user_lv1_text' style="display: none;color: red"></p>
	              </div>
	            </div>
	            <div class="control-group">
	              <label class="control-label">遊戲群</label>
	              <div class="controls">
	                <select multiple name="user_lv2" id="user_lv2">
	                	<?php foreach($lv2_list as $key =>$val): ?>
	                  	<option value="<?php echo $key+1 ?>"><?php echo $val['name'] ?></option>
	                  	<?php endforeach;?>
	                </select>
	              </div>
	            </div>
	            <div class="control-group">
	              <label class="control-label">軍團</label>
	              <div class="controls" id="user_lv3"></div>
	            </div>
	            
	            <div class="control-group">
	              <label class="control-label">公會</label>
	              <div class="controls" id="user_lv4"></div>
	            </div>
	            
	            <div class="control-group">
	              <label class="control-label">分組</label>
	              <div class="controls" id="user_lv5"></div>
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

<script type="text/javascript">
	var type = true;
	$('#user_lv2').change(function (){
		$('#user_lv3').html('');
		$('#user_lv4').html('');
		$('#user_lv5').html('');
		var user_lv2 = '';
		$("#user_lv2").find(":selected").each(function() {
			if(user_lv2 !='') user_lv2+= '_'; 
			user_lv2 += this.value;
		});
		if(user_lv2 !=''){
			$.ajax({
	            url: "ajax/AjaxUser_lv.php",
	            type:"POST",
	            
	            data :{
	            	user_lv: user_lv2,
	            	lv: 2
	            },
	            dataType: "json",
	            success: function (data) {
	                dataArray = new Array();
	                dataArray2 = new Array();
	                
	                var data_html = '';
	                
	                for (var i=0; i < data.length; i++) {
						dataArray[i] = data[i];
	                	data_html += '<div class="span3"><span">'+ dataArray[i]['name'] + '</span><br>';
	                	dataArray2 = dataArray[i][0];
	                	for (var y=0; y < dataArray[i][0].length; y++) {
	                		data_html += '<label class="span12"><input type="checkbox" name="user_lv3[]" onclick="user_lv4Show();" value="'+ dataArray2[y]['user_lv3'] +'" />'+dataArray2[y]['name']+'</label>';
	                	}
						data_html += '</div>'
	                }
	                $('#user_lv3').html(data_html);
	            }
			});
		}
		
	});
	
	function user_lv4Show(){
		$('#user_lv4').html('');
		var user_lv3 = '';
		$('input:checkbox:checked[name="user_lv3[]"]').each(function() { 
			if(user_lv3 !='') user_lv3+= '_'; 
			user_lv3 += this.value;
		});
		if(user_lv3 != ''){
			$.ajax({
	            url: "ajax/AjaxUser_lv.php",
	            type:"POST",
	            
	            data :{
	            	user_lv: user_lv3,
	            	lv: 3
	            },
	            dataType: "json",
	            success: function (data) {
	                dataArray = new Array();
	                dataArray2 = new Array();
	                
	                var data_html = '';
	                
	                for (var i=0; i < data.length; i++) {
						dataArray[i] = data[i];
	                	data_html += '<div class="span3"><span">'+ dataArray[i]['name'] + '</span><br>';
	                	dataArray2 = dataArray[i][0];
	                	for (var y=0; y < dataArray[i][0].length; y++) {
	                		data_html += '<label class="span12"><input type="checkbox" name="user_lv4[]" onclick="user_lv5Show();" value="'+ dataArray2[y]['user_lv4'] +'" />'+dataArray2[y]['name']+'</label>';
	                	}
						data_html += '</div>'
	                }
	                $('#user_lv4').html(data_html);
	            }
			});
		}
		
	};
	
	function user_lv5Show(){
		$('#user_lv5').html('');
		var user_lv4 = '';
		$('input:checkbox:checked[name="user_lv4[]"]').each(function() { 
			if(user_lv4 !='') user_lv4+= '_'; 
			user_lv4 += this.value;
		});
		if(user_lv4 != ''){
			$.ajax({
	            url: "ajax/AjaxUser_lv.php",
	            type:"POST",
	            
	            data :{
	            	user_lv: user_lv4,
	            	lv: 4
	            },
	            dataType: "json",
	            success: function (data) {
	                dataArray = new Array();
	                dataArray2 = new Array();
	                
	                var data_html = '';
	                
	                for (var i=0; i < data.length; i++) {
						dataArray[i] = data[i];
	                	data_html += '<div class="span3"><span">'+ dataArray[i]['name'] + '</span><br>';
	                	dataArray2 = dataArray[i][0];
	                	for (var y=0; y < dataArray[i][0].length; y++) {
	                		data_html += '<label class="span12"><input type="checkbox" name="user_lv5[]"  value="'+ dataArray2[y]['user_lv5'] +'" />'+dataArray2[y]['name']+'</label>';
	                	}
						data_html += '</div>'
	                }
	                $('#user_lv5').html(data_html);
	            }
			});
		}
		
	};
	
	$('input[name="acconut"]').change(function () {
		$('#acconut_text').html('');
		$('#acconut_text').hide();
	  var acconut = $('input[name="acconut"]').val();
	  if(acconut != ''){
			$.ajax({
	            url: "ajax/AjaxCheckAcconut.php",
	            type:"POST",
	            
	            data :{
	            	acconut: acconut
	            },
	            dataType: "json",
	            success: function (data) {
	            	if(data != 'ok'){
	            		if(data == 'off'){
	            			$('#acconut_text').html('帳號重複!');
	            			$('#acconut_text').show();
	            			type = false;
	            		}else if(data == 'error'){
	            			$('#acconut_text').html('資料庫錯誤請聯絡87夢特!');
	            			$('#acconut_text').show();
	            			type = false;
	            		}
	            	}else{
	            		type = true;
	            	}
	            }
			});
		}
	});
	
	
	function from_check () {
		var acconut = $('input[name="acconut"]').val();
		var password = $('input[name="password"]').val();
		var password_confirm = $('input[name="password_confirm"]').val();
		
		
		
		if(!type){
			alert('好像有東西填錯或是沒改掉錯誤請再檢查一次!');
			return false;
		}
		
		$('#acconut_text').hide();
		$('#password_confirm_text').hide();
		$('#user_lv1_text').hide();
		
	  	if(acconut != ''){
				$.ajax({
		            url: "ajax/AjaxCheckAcconut.php",
		            type:"POST",
		            
		            data :{
		            	acconut: acconut
		            },
		            dataType: "json",
		            success: function (data) {
		            	if(data != 'ok'){
		            		if(data == 'off'){
		            			$('#acconut_text').html('帳號重複!');
		            			$('#acconut_text').show();
		            			type = false;
		            			alert('帳號重複!');
		            			return false;
		            		}else if(data == 'error'){
		            			$('#acconut_text').html('資料庫錯誤請聯絡87夢特!');
		            			$('#acconut_text').show();
		            			type = false;
		            			alert('資料庫錯誤請聯絡87夢特!');
		            			return false;
		            		}
		            	}else{
		            		type = true;
		            	}
		            }
				});
			}
			
			
			
			if(password != password_confirm){
				alert('兩次密碼輸入不一樣!');
				$('#password_confirm_text').html('兩次密碼輸入不一樣!');
				$('#password_confirm_text').show();
				return false;
			}
			
			if($('#user_lv1').val() =='-1'){
				alert('請選擇身分!');
				$('#user_lv1_text').html('請選擇身分!');
				$('#user_lv1_text').show();
				return false;
			}
			
			
			
		}
		
		
	
</script> 
