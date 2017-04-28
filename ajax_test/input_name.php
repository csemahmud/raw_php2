<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
        <style type="text/css">
            
            #show_name{
                float: left;
                width: 90%;
                display: block;
                margin: 5px 5%;
                padding: 5px 5%;
            }
            
            #show_selection{
                float: left;
                width: 90%;
                display: block;
                margin: 5px 5%;
                padding: 5px 5%;
            }
            
        </style>
        <script type="text/javascript">
            
            document.forms['test_form'].elements['test_select'].value = '2';
            
            function show_name(str){
                if(str.length==0){
                    document.getElementById('show_name').innerHTML = '';
                    return ;
                }
                
                if(window.XMLHttpRequest){
                    //   code   for   IE7+,   Firefox   Chrome,   Opera   and   Safari
                    var xmlhttp = new XMLHttpRequest();
                }
                else{
                    //   code   for   IE6,   IE5
                    var xmlhttp = new ActiveXObject('Microsoft.XMLHTTP');
                }
                
                xmlhttp.onreadystatechange = function(){
                    if(xmlhttp.readyState==4 && xmlhttp.status==200){
                        document.getElementById('show_name').innerHTML = xmlhttp.responseText;
                        //document.forms['test_form'].elements['test_select'].value = '2';
                        //   This   code  works  only  if  it  is  written  here
                    }
                }
                
                xmlhttp.open('GET','view_name.php?n='+str,true);
                xmlhttp.send();
            }
            
            function show_selection(str){
                if(str.length==0){
                    document.getElementById('show_selection').innerHTML = '';
                    return ;
                }
                
                if(window.XMLHttpRequest){
                    //   code   for   IE7+,   Firefox   Chrome,   Opera   and   Safari
                    var xmlhttp = new XMLHttpRequest();
                }
                else{
                    //   code   for   IE6,   IE5
                    var xmlhttp = new ActiveXObject('Microsoft.XMLHTTP');
                }
                
                xmlhttp.onreadystatechange = function(){
                    if(xmlhttp.readyState==4 && xmlhttp.status==200){
                        document.getElementById('show_selection').innerHTML = xmlhttp.responseText;
                    }
                }
                
                xmlhttp.open('GET','view_selection.php?s='+str,true);
                xmlhttp.send();
            }
            
        </script>
    </head>
    <body>
        <span>Enter   Name : </span>
        <input type="text" name="name" id="name" onkeyup="show_name(this.value)" onblur="select_value()">
        
        <?php
        // put your code here
        ?>
    <div id="show_name"></div>
    <div id="show_selection"></div>
    <script type="text/javascript">

        document.write('main_test');
        document.forms['test_form'].elements['test_select'].value = '2';

    </script>
    </body>
</html>
