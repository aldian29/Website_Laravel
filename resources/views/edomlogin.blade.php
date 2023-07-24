<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <style>
        body{
	font-family: sans-serif;
	background-image:url('/folderpoto/bg_login_edom.jpg') ;
	background-size: cover;
}
 
h1{
	text-align: center;
	/*ketebalan font*/
	font-weight: 300;
}
 
 
.kotak_login{
	width: 350px;
	background: black;
	border: 1px solid;
	border-radius:3%;
	/*meletakkan form ke tengah*/
	margin: 80px auto;
	padding: 50px 30px;
	/*opacity: 0.6;
    filter: alpha(opacity=60);*/
}
 
label{
	font-size: 11pt;
}
#judul{
	color: #FE9327;
	text-align: center;
	text-decoration: underline;
	font-size: 30pt;
}
 
.form_login{
	/*membuat lebar form penuh*/
	box-sizing : border-box;  
	width: 100%;
	padding: 10px;
	font-size: 11pt;
	margin-bottom: 20px;
}
#lblku{
	color: #FE9327;

}
#iconlogin{
	width: 150px;
	display: block;
    margin-left: auto;
    margin-right: auto;
	margin-bottom:30px; 
}
.tombol_login{
	background: #FE9327;
	color: black;
	font-weight:bold; 
	font-size: 11pt;
	width: 100%;
	border: none;
	border-radius: 3px;
	padding: 10px 20px;
}
 
.link{
	color: #FE9327;
	text-decoration: none;
	font-size: 10pt;
}
    </style>
</head>
<body>
	<h2 id="judul">Silahkan Login</h2>
    <div class="kotak_login">
		<img src="/folderpoto/icon_admin.png" id="iconlogin">
        <form method="POST" action="/proses">
			{{ csrf_field() }}
            <label id="lblku">Username</label>
            <input type="text" name="email" class="form_login" placeholder="Please input here ..">
     
            <label id="lblku">Password</label>
            <input type="password" name="password" class="form_login" placeholder="Please input here ..">

            <input type="submit" class="tombol_login" value="LOGIN">
     
            <br/>
            <br/>
            <center>
                <a class="link" href="/welcome">Back</a>
            </center>
        </form>
        
    </div>
</body>
</html>