<form action="" method="post">
    @csrf

    service_name : <input type="text" name="service_name" id="service_name"><br>
    lowest_price : <input type="text" name="lowest_price" id="lowest_price"><br>
    available : <input type="text" name="available" id="available"><br>
    description : <input type="text" name="description" id="description"><br>
    <input type="submit" value="submit">
</form>