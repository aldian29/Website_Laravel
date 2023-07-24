<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ks-galery</title>
</head>

<body style="background: gray;">
    <header style="background: gainsboro;">
        <h1 style="background-color:white ; color: grey; padding: 30px; font-size: 40px;">Politeknik Enjineering Indorama
        </h1>
    </header>

    <section>
        <table style="background-color: whitesmoke; width: 100%; ">
            <tr>
                <td style="width: 100px;">
                    <a href="kshome"> Home</a>
                </td>
                <td style="width: 100px;">
                    <a href="ksabout"> about</a>
                </td>
                <td style="width: 100px;">
                    <a href="kskontak"> contact</a>
                </td>
                <td style="width: 100px;">
                    <a href="ksgalery"> galery</a>
                </td>
                <td style="width: 100px;">
                    <a href="member"> member</a>
                </td>
            </tr>
        </table>
        <article>
            <h1 style="font-size: 32px; text-align:center;">Wellcome to member</h1>
            <div style="padding-left:400px;padding-right:400px;">
                <form action="home" method="POST" style="background:white;padding:10px;">
                    <fieldset>
                        <legend style="text-align:center;"> regist</legend>
                        <p>
                            <label>Username:</label>
                            <input type="text" name="username" placeholder="username..." />
                        </p>
                        <p>
                            <label>Password:</label>
                            <input type="password" name="password" placeholder="password..." />
                        </p>
                        <p>
                            <label><input type="checkbox" name="remember" value="remember" /> Remember me</label>
                        </p>
                        <p>
                            <input style="padding-left:40px;padding-right:40px; margin-left:280px;"type="submit"
                                name="submit" value="Login" />
                        </p>
                    </fieldset>
                </form>
            </div>
        </article>
    </section>

</body>

</html>
