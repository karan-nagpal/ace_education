  
        var eyeButton = document.getElementById("togglePassword");
        eyeButton.addEventListener("click" , togglPassword);

        function togglPassword(){
            if (document.getElementById("loginPass").type  == "password"){
                document.getElementById("loginPass").type ="text";
            }else{
                document.getElementById("loginPass").type ="password";
            }
        }