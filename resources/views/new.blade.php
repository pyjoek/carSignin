<form action="/add" method="post">
                    @csrf
                    <input type="text" name="carN" placeholder="CAR NUMBER">
                    <input type="text" name="driverN" placeholder="DRIVER NAME">
                    <input type="text" name="phoneN" placeholder="PHONE NUMBER">
                    <input type="text" name="reason" placeholder="REASON">
                    <input type="submit" value="Submit">
                </form>