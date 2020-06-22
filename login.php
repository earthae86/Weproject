<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>เข้าสู่ระบบ</title>

    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/bootstrap.min.css" >
</head>
<body>
<form action="login"><div class="login_area">
<div class="login-box">
        <h3>ยินดีต้อนรับ <br> กรุณาลงชื่อเข้าใช้ในระบบ</h3>
        <div class="textbox">
        <label for="username">Username</label>
            <input type="text" placeholder="Username" name="Username" value="">
        </div>
        
        <div class="textbox">
        <label for="password">Password</label>
            <input type="password" placeholder="Password" name="Password" value="">
        </div>

        <div class="input-group">
        <button type="submit" name="login_user" class="btn">เข้าสู่ระบบ</button>   
        </div>

        <div class="input-group">
        <button type="submit" name="home" class="btn">กลับสู่หน้าหลัก</button>  
        </div>

        <div class="textremind">
            <p>******Only members******</p>
        </div>
    </div>
</div>
</form>

</body>
</html>