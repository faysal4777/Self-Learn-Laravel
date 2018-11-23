<html>
    <head>
        <link href="build/css/styleLogin.css" rel="stylesheet"/>
        <script src="build/js/jquery-3.3.1.js"></script>
        <script src="build/js/loginAnimation.js"></script>
        <title>Self-Learn</title>
    </head>
    <body>
        <div id="box">
            <div id="main"></div>

            <div id="loginform">
                <h1>LOGIN</h1>
                <form method="post" action="/login" onsubmit="return checkLogInfo()">
                  {{@csrf_field()}}
                  <input type="text" name="userid" id="logid" placeholder="User ID"/><br>
                  <input type="password" name="password" id="logpass" placeholder="Password"/><br>

                  <!-- //error check login -->
                  <!-- <h4 style="text-align: center;color: #ff0000;font-weight: 200;" id="empty">UserID or Password Can't be Empty</h4><br>
                  <%
                    if (error.id == 1) { %>
                      <h4 style="text-align: center;color: #ff0000;font-weight: 200;">UserID or Password Can't be Empty</h4><br/>
                    <% }
                    else if (error.id == 2) { %>
                      <h4 style="text-align: center;color: #ff0000;font-weight: 200;">UserID and Password does not match</h4><br>
                    <% }
                  %> -->
                  
                  <h4 style="text-align: center;color: #ff0000;font-weight: 200;" id="empty">{{session('logmsg')}}</h4><br>
                  <button type="submit">LOGIN</button>
                  <!-- <input type="submit" value="LOGIN" /> -->
                </form>
            </div>

            <div id="signupform">
                <h1>SIGN UP</h1>
                <form method="post" action="/registration" onsubmit="return checkRegInfo()">
                  {{@csrf_field()}}
                  <input type="text" name="name" id="name" placeholder="Full Name"/><br>

                  <!-- //name error -->
                  <!-- <h4 id="h1" style="text-align: center;color: #ff0000;font-weight: 200;"></h4>
                  <%
                    if (error.id == 3) { %>
                      <h4 style="text-align: center;color: #ff0000;font-weight: 200;">Name can't be empty</h4>
                    <% }
                    else if (error.id == 4) { %>
                      <h4 style="text-align: center;color: #ff0000;font-weight: 200;">Invalid Name</h4>
                    <% }
                  %> -->
                  <input type="text" name="userid" id="userid" placeholder="User ID"/><br>


                  <!-- //id error -->
                  <!--
                  <h4 id="h2" style="text-align: center;color: #ff0000;font-weight: 200;"></h4>
                  <%
                    if (error.id == 5) { %>
                      <h4 style="text-align: center;color: #ff0000;font-weight: 200;">User ID can't be empty</h4><br/>
                    <% }
                    else if (error.id == 6) { %>
                      <h4 style="text-align: center;color: #ff0000;font-weight: 200;">User ID is not available</h4><br>
                    <% }
                  %> -->
                  <input type="email" name="email" id="email" placeholder="Email"/><br>


                  <!-- //email error -->
                  <!--<h4 id="h3" style="text-align: center;color: #ff0000;font-weight: 200;"></h4>
                   <%
                    if (error.id == 7) { %>
                      <h4 style="text-align: center;color: #ff0000;font-weight: 200;">Email can't be empty</h4><br/>
                    <% }
                    else if (error.id == 8) { %>
                      <h4 style="text-align: center;color: #ff0000;font-weight: 200;">Invalid Email</h4><br>
                    <% }
                  %> -->
                  <input type="password" name="password" id="password" placeholder="Password"/><br>


                  <!-- //password error -->
                  <!--<h4 id="h4" style="text-align: center;color: #ff0000;font-weight: 200;"></h4>
                   <%
                    if (error.id == 9) { %>
                      <h4 style="text-align: center;color: #ff0000;font-weight: 200;">Password can't be empty</h4><br/>
                    <% }
                    else if (error.id == 10) { %>
                      <h4 style="text-align: center;color: #ff0000;font-weight: 200;">Password length must be at least 4</h4><br>
                    <% }
                  %> -->
                  <button type="submit">SIGN UP</button>
                </form>
            </div>

            <div id="login_msg">Have an account?</div>
            <div id="signup_msg">Don't have an account?</div>

            <button id="login_btn">LOGIN</button>
            <button id="signup_btn">SIGN UP</button>

        </div>


        <!-- change button -->
        <!-- <%
          if(error.status == 2){ %>
            <script>
              $(document).ready(function(){
                $("#signup_btn").click();
              });
            </script>

        <%  }%> -->

        <script type="text/javascript" src="js/login.js"></script>

    </body>
</html>
