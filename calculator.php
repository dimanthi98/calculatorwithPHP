<!DOCTYPE HTML>
<html>
<head>
	<meta http-equiv="content-type" content="text/html" />
	<meta name="author" content="" />

	<title>Calculator use Ajax</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
</head>

<body>
    
    <h1>Calculator</h1>
    
    <div class="container">
        <div class="form-group">         
            <input type="text" class="form-control" id="num1" value="" placeholder="Enter 1st Number"/>
            
        </div>
        <hr />
        <button type="button" class="btn btn-success" onclick="addnum1()">Add num1</button>
        <hr />
        <div class="form-group">           
            <input type="text" class="form-control" id="num2" value="" placeholder="Enter 2nd Number"/>
        </div>
        <hr />
        <button type="button" class="btn btn-success" onclick="addnum2()">Add Num2</button>
        <hr />
        
        <div>
            <input type="radio" id="sum" name="calc" value="SUM"/>
            <label for="sum">SUM</label><br/>
            <input type="radio" id="min" name="calc" value="MIN"/>
            <label for="min">MIN</label><br/>
            <input type="radio" id="mul" name="calc" value="MUL"/>
            <label for="mul">MUL</label><br/>
            <input type="radio" id="div" name="calc" value="DIV"/>
            <label for="div">DIV</label><br/>
        </div>
                
        <hr />
        <button type="button" class="btn btn-success" onclick="findAnswer()">Find Answer</button>
        <hr />
        <div class="form-group">           
            <input type="text" class="form-control" id="ans" value="" placeholder="Answer"/>
        </div>
    </div>

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    
    
    <script type="text/javascript">
        
        function addnum1(){
            var num1 = $('#num1').val(); //jquery walin data collect karna widiya
            
            var dataArry = {
                functionName : 'NUM1',
                isnum1 : num1,
            }
            
            $.ajax({
                type : 'POST',
                url : 'calLogic.php',
                data : dataArry,
                dataType : 'Json',
                success : function(res){
                    console.log(res);
                }
            });
        }
        
        function addnum2(){
            var num2 = $('#num2').val();
            
            var dataArry = {
                
                functionName : 'NUM2',
                isnum2 : num2,
            }
            
            $.ajax({
                type : 'POST',
                url : 'calLogic.php',
                data : dataArry,
                dataType : 'Json',
                success : function(res){
                    console.log(res);
                }
            });
        }
        
        function findAnswer(){
            var num1 = $('#num1').val(); //jquery walin data collect karna widiya
            var num2 = $('#num2').val();
            var ans = $('#ans').val();
            
            var dataArry = {
                
                functionName : 'ANS',
                isnum1 : num1,
                isnum2 : num2,
                isans : ans
            }
            
            $.ajax({
                type : 'POST',
                url : 'calLogic.php',
                data : dataArry,
                dataType : 'Json',
                success : function(res){
                    console.log(res);
                }
            });
        }
        
    </script>
</body>
</html>