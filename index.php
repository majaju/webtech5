

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PRN Registeration</title>
    <style>
        * {
            padding: 0;
            margin: 0;
        }

        .cont 
        {   border: 1px solid black;
            background-color: gray;
            padding: 50px;
            margin: 250px;
            
        }
select{
width:30%;
padding:3px;
border-radius:5px;
border:1px solid white;
outline:0;
font-family:serif;
font-size:18px;
background:none;
}
#btn{
background-color: #A52A2A;
padding:3px;
border-radius:5px;
border:1px solid white;
outline:0;
font-family:serif;
font-size:18px;
background:none;  
}

    </style>
</head>

<body>
    <div class="cont">

        <h1 style="margin-left: 290px;">PRN Generation</h1>
        <select name="select" id="select" style="margin-left: 300px;">
            <option value="0">Select</option>
            <option value="1">Computer Department</option>
            <option value="2">Electronic Department</option>
            <option value="3">Mechanical Department</option>
            <option value="4">Civil Department</option>
            <option value="5">Chemical Department</option>
        </select>
        <span><button id="btn" onclick="myfunct()">Submit</button></span>
        <p style="margin-left:320px" >The Generated PRN:</p>
        <span id="disp" style="margin-left:300px; color: red; font-size: 30px;"></span>
        <p>NOTE: Ex. CS=Computer Department; <br> 01-04=Batch;  <br>1-1000=Sequence Number</p>
    </div>
    <script>
        function myfunct() {
            var select = document.getElementById("select");
            //Department

            if (select.value == "0") {
                alert("PLease select one of the option");
                return false;
            }
            if (select.value == "1") {
                var dept = "CS";
            }
            if (select.value == "2") {
                var dept = "EX";
            }
            if (select.value == "3") {
                var dept = "ME";
            }
            if (select.value == "4") {
                var dept = "CV";
            }
            if (select.value == "5") {
                var dept = "CH";
            }

            //Sequence NUmber
            var a1 = 1;
            var b1 = 999;
            var b2 = a1 + (b1 - a1) * Math.random();
            var no = Math.round(b2);

            if (no < 10) {
                var n = "000" + no;
            }
            if (no < 100 & no >= 10) {
                var n = "00" + no;
            }
            if (no < 1000 & no >= 100) {
                var n = "0" + no;
            }

            var c1 = 1;
            var d1 = 4;
            var d2 = c1 + (d1 - c1) * Math.random();
            var batch = Math.round(d2);

            document.getElementById('disp').innerHTML = "20" + dept + "0" + batch + n;

        }
    </script>
</body>

</html>
