<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        #h1{
            text-decoration: none;
            color: black;
            margin-left: 5px;
        }
    </style>
</head>
<body>
    <main>
    <div id="history">
            <center>
            <div id="top">
                HISTORY<a href="/" id="h1">ADD CAR</a>
            </div>
            <table border="1">
                <tr><b>
                    <td>CAR NUMBER</td>
                    <td>DRIVER NAME</td>
                    <td>TIME IN</td>
                    <td>CURRENT TIME</td>
                    <td>TIME USED</td>
                    <td>PRICE</td>
                </b></tr>
                <tr>
                @foreach ($datas as $data)
                <tr>
                    <td><a href="/del/{{$data['id']}}"><input type="text" name="carN" value="{{$data['car_number']}}" readonly></a></td>
                    <td><input type="text" name="driverN" value="{{$data['driver_name']}}" readonly></td>
                    <td><input type="text" name="time_in" value="{{$data['time_in']}}" readonly></td>
                    <td><input type="text" name="time_out" value="<?php
                            $hour = intval(date('H')) + 3;
                            $min = intval(date('i'));
                            echo $hour.":".$min;
                        ?>" readonly>
                    </td>
                    <td><input type="text" value="<?php
                        $hour = intval(date('H')) + 3;
                        $min = intval(date('i'));
                        $tfd = $data['time_in'];
                        $hfd = explode(":",$tfd);
                        $hours = $hour - intval($hfd[0]);
                        $mins = $min - $hfd[1];
                        echo $hours." hours   ".$mins." minutes";
                        ?>" readonly></td>
                    <td>
                    <?php
                        $hour = intval(date('H')) + 3;
                        $min = intval(date('i'));
                        $tfd = $data['time_in'];
                        $hfd = explode(":",$tfd);
                        $hours = $hour - intval($hfd[0]);
                        $mins = $min - $hfd[1];
                        // $amin = $mins * 500;
                        // $hr = $hours * 1000;
                        if ($mins <= 30) {
                            $amin = 500;
                            if 
                        }
                        $price = $amin + $hr;
                        echo $price." Tsh";
                        ?>
                    </td>
                </tr>
                @endforeach
                </tr>
            </table>
            </center>
        </div>
    </main>
</body>
</html>