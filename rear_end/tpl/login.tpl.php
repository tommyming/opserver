<!DOCTYPE html>
<html lang="en">
    
<head>
        <title>皮意志帝國-紫禁城</title>
		<meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<link rel="stylesheet" href="css/bootstrap.min.css" />
		<link rel="stylesheet" href="css/bootstrap-responsive.min.css" />
        <link rel="stylesheet" href="css/matrix-login.css" />
        <link href="font-awesome/css/font-awesome.css" rel="stylesheet" />
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,800' rel='stylesheet' type='text/css'>

    </head>
    <body>
        <div id="loginbox">            
            <form id="loginform" class="form-vertical" action="login.php" method="post">
				 <div class="control-group normal_text"> <h3>皮意志帝國-紫禁城-水表查驗處</h3></div>
				 <div class="control-group">
                    <div class="controls">
                        <div class="main_input_box normal_text">
                        	老皮粉絲管理群-專用網站 非官員或資深皮粉請勿進入本區
                        </div>
                    </div>
                </div>
                <div class="control-group">
                    <div class="controls">
                        <div class="main_input_box">
                            <span class="add-on bg_lg"><i class="icon-user"></i></span><input type="text" name="account" placeholder="皮粉編號" />
                        </div>
                    </div>
                </div>
                <div class="control-group">
                    <div class="controls">
                        <div class="main_input_box">
                            <span class="add-on bg_ly"><i class="icon-lock"></i></span><input type="password" name="password" placeholder="站住口令誰?" />
                        </div>
                    </div>
                </div>
                <div class="form-actions">
                    <span class="pull-left"><a href="#" class="flip-link btn btn-info" id="to-recover">忘記口令?禁假一個月</a></span>
                    <span class="pull-right"><input type="submit" class="btn btn-success" value="查哨官好!" /></span>
                </div>
            </form>
            <form id="recoverform" action="login.php" class="form-vertical" method="post">
				<p class="normal_text">皮皇有令忘記密碼者切ㄐㄐ</p>
				
                    <div class="controls">
                        <div class="main_input_box">
                            <span class="add-on bg_lo"><i class="icon-envelope"></i></span><input type="text" name="email" placeholder="E-mail address" />
                        </div>
                    </div>
               
                <div class="form-actions">
                    <span class="pull-left"><a href="#" class="flip-link btn btn-success" id="to-login">&laquo; 返回登入</a></span>
                    <span class="pull-right"><input type="submit" class="btn btn-info" value="執行ㄐㄐ切斷"/></span>
                </div>
            </form>
        </div>
        
        <script src="js/jquery.min.js"></script>  
        <script src="js/matrix.login.js"></script> 
    </body>

</html>
