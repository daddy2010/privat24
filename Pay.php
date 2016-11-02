<html>
    <head>
        <title>Pay</title>
    </head>
    <body>
        <a href="Privat24.php">Главная</a>
        <form action="Pay.php" method="POST">
            <input type="text" name="payuser" id="pay" onkeyup="call(this.value)">
            <input type="submit" name="pay" value="Оплатить" onclick="call()">
            <input type="button" name="pa" value="Опла" onclick="call()">
        </form>
        <script>
            function call() { 
                var xhttp = new XMLHttpRequest();
                xhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                    var xm = this.responseXML; 
                    privat(xm);
                  }  
                };
                xhttp.open("POST", "PayServer.php", true);
                xhttp.setRequestHeader("Content-type", "text/xml");
                xhttp.send();
              }
            function privat(xml) { 
                var xhtt = new XMLHttpRequest();
                xhtt.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 0) {
                    alert("12");
                    var x = this.responseXML;
                    alert("privat");
                    rec(x);                
                  }
                 // else{}
                  //for($i=0;$i<1000;$i++){
                  //if(this.readyState == 4){alert("4");}
                  //alert(this.statusText);
                  //if(this.status == $i){alert($i);}
                  // }
                };
                xhtt.open("POST", "https://api.privatbank.ua/p24api/pay_pb", true);
                xhtt.setRequestHeader("Content-type", "text/xml");
                xhtt.send(xml);
              }
              function rec(xm) { 
                var xht = new XMLHttpRequest();
                alert('rec1');
                xht.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                     document.getElementById("result").innerHTML =
       this.responseText;
                  }  
                };
                xht.open("POST", "PayResult.php", true);
                xht.setRequestHeader("Content-type", "text/xml");
                xht.send(xm);
              }
            </script>
            <p id="result"></p>
<?php

?>
</body>
</html>

