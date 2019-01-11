<div class="container-fluid">
<hr>
<div class="row-fluid">
  <div class="span12">
    <div class="widget-box">
      <div class="widget-title"> <span class="icon"><i class="icon-th"></i></span>
        <h5>平台會員</h5>
      </div>
      <div class="widget-content nopadding">
        <table class="table table-bordered data-table">
          <thead>
            <tr>
              <th>編號</th>
              <th>名稱</th>
              <th>Line名稱</th>
              <th>帳號</th>
              <th>密碼</th>
              <th>E-Mail</th>
              <th>建立人</th>
              <th>建立時間</th>
              <th>最後修改人</th>
              <th>最後修改時間</th>
            </tr>
          </thead>
          <tbody>
          	<?php foreach($listArray as $key => $val):?>
            <tr class="gradeX">
              <td><?php echo $key;?></td>
              <td><?php echo $val['name'];?></td>
              <td><?php echo $val['line_name'];?></td>
              <td><?php echo $val['account'];?></td>
              <td><?php for($pw = 0;$pw < strlen($val['password']);$pw++)echo '*' ;?></td>
              <td><?php echo $val['email'];?></td>
              <td><?php $u->getData($val['create_user']); echo $u->name?></td>
              <td><?php echo $val['create_date'];?></td>
              <td><?php $u->getData($val['modi_user']); echo $u->name;?></td>
              <td><?php echo $val['modi_date'];?></td>
            </tr>
            <?php endforeach;?>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
</div>

<script src="js/jquery.min.js"></script> 
<script src="js/jquery.ui.custom.js"></script> 
<script src="js/bootstrap.min.js"></script> 
<script src="js/jquery.uniform.js"></script> 
<script src="js/select2.min.js"></script> 
<script src="js/jquery.dataTables.min.js"></script> 
<script src="js/matrix.js"></script> 
<script src="js/matrix.tables.js"></script>