<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{config('app.name')}}</title>
    <script>
        function news(){
            document.querySelector('#new').style.display = ""
            document.querySelector('#history').style.display = "none"
        }
        function hist(){
            document.querySelector('#new').style.display = "none"
            document.querySelector('#history').style.display = ""
        }
    </script>
    <style>
        *{
            padding: 0;
        }
        #new input{
            width: 50%;
            padding: 3px;
            margin-bottom: 5px;
            outline: none;
            border: none;
            background: transparent;
            border-bottom: 1px solid red;
        }
        #new input[type="submit"],#wen{
            border-bottom: none;
            
        }
        #new{
            margin:0 auto;
            width: 80%;
            height: max-content;
            top: 50%;
            left: 50%;
            translate: (-50,-50);
        }
        #top{
            text-decoration: none;
            color: black;
        }
    </style>
</head>
<body>
    <center>
    <main>
        <div id="new">
            ADD CAR <a href="/show" id="top">HISTORY</a>
            <form action="/add" method="post">
                @csrf
                <input type="text" name="carN" placeholder="CAR NUMBER">
                <input type="text" name="driverN" placeholder="DRIVER NAME">
                <input type="text" name="phoneN" placeholder="PHONE NUMBER">
                <input type="text" name="reason" placeholder="REASON">
                <input type="text" name="time_in" id="wen" value="
                        <?php
                            $hour = intval(date('H')) + 3;
                            $min = intval(date('i'));
                            echo $hour.":".$min;
                        ?>
                        " readonly>
                <input type="submit" value="Submit">
            </form>
        </div>
    </main>
    </center>
</body>
</html>