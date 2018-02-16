<html>
<head>
    <title>C45 Website</title>
</head>
<body>
<h4>Selamat Datang di Website Uji Coba C45</h4>
    <form action="<?php echo base_url('index.php/Login/login'); ?>" method="post">
        <label>Username</label>
        <input type="text" name="username">
        <label>Password</label>
        <input type="password" name="password">
        <button type="submit" value="submit">Login</button>
    </form>
</body>
</html>