<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta nick="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="./login.css">

</head>

<body>
    <div class="log_con_div">

        <form action="" method="post" class="log_con">
            <h1>Join Us</h1>
            <div class="input_con">
                <label for="user_nick" class="input_tag" id="input_tag">
                    Nick
                </label>
                <input id="user_nick" class="user_nick" nick="user_nick" type="text" title="Your nick" maxlength="30"
                    onkeyup="">

            </div>


            <div class="input_con">
                <div class="input_tag">
                    Email
                </div>
                <div class="input_div">
                    <input type="text" title="Email" onkeyup="">
                </div>
            </div>

            <div class="input_con">
                <div class="input_tag">
                    Password
                </div>
                <div class="input_div">
                    <input type="text" title="Password" onkeyup="">
                </div>
            </div>

            <div class="input_con">
                <div class="input_tag">
                    Repeat Password
                </div>
                <div class="input_div">
                    <input type="text" title=" Repeat Password" onkeyup="">
                </div>
            </div>
            <button>Create Account</button>
        </form>
    </div>
</body>

</html>