<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta nick="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
                    <input type="email" title="Email" onkeyup="">
                </div>
            </div>

            <div class="input_con">
                <div class="input_tag">
                    Password
                </div>
                <div class="input_div">
                    <input type="password" title="Password" onkeyup="">
                </div>
            </div>

            <div class="input_con">
                <div class="input_tag">
                    Repeat Password
                </div>
                <div class="input_div">
                    <input type="password" title=" Repeat Password" onkeyup="">
                </div>
            </div>
            <button>Create Account</button>
        </form>
    </div>
</body>

</html>