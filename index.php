<?php 
$insert = false;
if(isset($_POST['name'], $_POST['email'], $_POST['message'])) {
    $server = "localhost";
    $username = "root";
    $password = "root";
    $database = "portfolio";

    $con=mysqli_connect($server,$username,$password,$database);

    if(!$con)
    {
        die("connection Unsucessfull".mysqli_connect_errno());
    }
    
    
    $name = $_POST['name'];
    
    $email=$_POST['email'];
    
    $message=$_POST['message'];
    
    $sql = "INSERT INTO contact (name, email, message, dt) VALUES ('$name', '$email', '$message', current_timestamp())";

    
    if($con->query($sql)== true)
    {
        $insert = true;
    }
    else{
        echo "Error: $sql <br> $con->error";
    }
    $con->close();
    }
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Somya Soni </title>
    <link rel="stylesheet" href="style.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400..700&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Raleway:ital,wght@0,100..900;1,100..900&family=Sacramento&display=swap" rel="stylesheet">
</head>
<body>
    <div class="nav">

    <div class="logo">
    <img  src="https://ugc.production.linktr.ee/gSoejvcRWmME0WctlasD_3N6E4c9586avqjY8?io=true&size=avatar-v3_0" alt="Logo Image">
    <span>S</span>omya<span>S</span>oni
</div>

        <div class="nav-menu" id="home"> 
            <a href="#home">Home</a>
            <a href="#content">Skills</a>

        </div>
    </div>  
    <center>
        <script src="https://unpkg.com/@dotlottie/player-component@latest/dist/dotlottie-player.mjs" type="module"></script> 

        <dotlottie-player src="https://lottie.host/f223f9ab-5b20-4a80-a448-8ebdc464f3ea/bQK3aBzxra.json" background="transparent" speed="1" style="width: 600px; height: 460px;" loop autoplay></dotlottie-player> 

        

        <div class="intro" >
            <h1 class="intro-heading" " >Hi!</h1> 
            <h1 style="font-size: 60px;">I am Somya Soni</h1>
            <h2 class="intro-subheading">A Flutter Developer</h2>
        </div>
    
        <div class="content " id="content">
            
                <div class="skill">
                    <div class="skill-icon">
                        <script src="https://unpkg.com/@dotlottie/player-component@latest/dist/dotlottie-player.mjs" type="module"></script> 
                        <dotlottie-player src="https://lottie.host/c99430d8-cf13-436a-92f6-a762db67cc0a/MfB0TQvN6y.json" background="transparent" speed="0.5" style="width: 300px; height: 300px;" loop autoplay></dotlottie-player>
                    </div>
                    <div class="skill-info">
                        <h3>Flutter</h3>
                        <p>I develop cross-platform applications using Flutter to ensure seamless performance on mobile, web, and desktop.</p>
                    </div>
                </div>
                <div class="skill">
                    <div class="skill-icon">
                        <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
                        <lottie-player class="fd-img" src="https://assets9.lottiefiles.com/packages/lf20_vybwn7df.json"  background="transparent"  speed="1"  style="width: 300px; height: 300px;"  loop  autoplay></lottie-player>
                        
                    </div>
                    <div class="skill-info">
                        <h3>Frontend Developer</h3>
                        <p>I  craft interactive user interfaces using modern web technologies like HTML, CSS, and JavaScript .</p>
                    </div>
                </div>
                
                <div class="skill">
                    <div class="skill-icon">
                        <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
                        <lottie-player class="designing-img" src="https://assets7.lottiefiles.com/packages/lf20_2nbubmkc.json"  background="transparent"  speed="1"  style="width: 300px; height: 300px;"  loop  autoplay></lottie-player>
            
                    </div>
                    <div class="skill-info">
                        <h3>UI/UX Designer</h3>
                        <p>I design interactive user experiences using Figma .</p>
                    </div>
                </div>
                
    
            
        </div>
    </center>

    <footer>
        <div class="contact-form">
            <h1>Contact Me</h1>
            <br>

            <div class="foot">
            <form action="index.php" method="post">
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" required>

                

                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>

                

                <label for="message">Message:</label>
                <textarea id="message" name="message" rows="5" required></textarea>

                <button type="submit">Submit</button>
            </form> 

            <div class="socials">
                <div class="soc">
                    <img   src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADAAAAAwCAYAAABXAvmHAAAAAXNSR0IArs4c6QAABO5JREFUaEPtWXuo32MY/3yScomtzHWTXGMUMUuMchuLRFgaltgSa24zhDLktmZrLC3XhDFKm1uuCUkzmlIumfs992H8QR/vo/d3+p7veW/f7/lup1N76nTavu/zeZ/P+z6X93kOMcyFw9x+bCAw1DfY2Q1I2g7A0QAOB3AEgJ1q5L4F8LL/eZbkV12QHxQBSdsDmAXgOAB7NjRoNYBnAMwn+XlD3b7lrQlIuhrAlQA2bbt5Re96ADeS/LspVmMCksxN7gq4SNO96+vNpaaRfK4JUCMCku4BcHaTDVqsvZfkOaV6RQQkben99ZBS4EGuex3AJJK/53CyBCRtDOBFAIflwDr+/gqAI0n+m8ItIbAYwLkdG1cKdxvJC1sTkDQFwEMBgDtd2nwEwH4AzgewW6lFtXVfArjDpeGVvoZcHsA5meTjMfzoDUgaCeBTAPa7LhNImp/+L5LshuYAsGLWk+8BfAPgH5e1RgPYofLtZwDXkVxYwdgDwIeBvQxnF5JrQyRSBG4FcElQiRygJ2lzAGPNaJJfh/R84TMinzjX+KW+RtKfADYL6M4heW0xAUmjXLr8IlakHFg2dtq4lCQ77W0Cur8C2JHkH/VvQUMkmTtckzBiBMk1bYxM6chtnPg+k+SiUgIWXGMSYONIvt0lAUk7m2slMFeR3D9LQNI4nxViWNnU1paYpCsA3JTQH03SEkOfhIJxtgukuREQyyhjSJqvdi6SLIDt2W2VPyRnknwwR2ApgMkRgOUkT+zc8gqgpPsAnBXZY4GLvX6ZMXQD7wDYNwIQDKQuCUmaCuD+COaTJE/I3YD5mDUqIZlC8uEuDa5jSZoIIPakfo/k3jkC3wHYNmLkVJIPDCGBNSRH5AhYq7drxMhZJOevYwJnuP1jh7SWpFX8PgnFwBsADooYOY+kZal1JpLsQXdzZIPPSFq9SBJ4yjfpIYwVJGPkOiElyRr9SRGwt0gemCNg5XpGwpqRJH/rxNoAiLuBv9wNbBLBX0rytBwBqwFWC2IyIBd3RabgDTaDpPUPSReyl+gPGaMmknyhK8MNR9IE10K+lsHcy93AB0kCHuxNAP18rQZszcVJJJ/vgoQkm+QtA7BFAm81yd3r32PP6Wl+9tNbb+8TmxBY11SVBX4g9WMbIr7vsOHYxQX6s0nOKyVgudaM7p3IEpKnSzrYp7hDK0A2TbOpxbsAPgbwBMmgC/rxzCmuz7aT3AfAUYmArds6iuRPRQS8G93gR4c9HUtvp/p/mIv1K+n+/1eSHJ86TUkv+eFvwaH3Lbmd5AUhhVRPbKnMTrU6cVjsntLn+ebDJglb1UAnu7fKYxkCdgiPNrDemquxoXbSMJK9rTstc5VXa5uNJ7lSkj03rO08FoDl7hVWP2Lu08OQZD1vk37imFSyyDbnkqyoVXvRp0ke3+AEByzN9L7V9ZeStOlIVLIEfDzcAuCyCspCkhe1JVFIYJEL2pm5PYoIRILaMs5yAKvcWNxG4zbvWRYbQFUNKSAwl2RoSjeATzEBT8JG6zZij8nWJLM1IUNgOsm7cyff+96IgCdxgMtM1liH/qQ0GALvuzpiTXujcU1jApVsYuMPG4NUpQ0BGydaTF1VeurVda0J+NuwOjDdT6g3ImlD3KxIsgfZR37ybXHT+G9jrV0oa916XjCoG1jPtga320BgqG9h2N/Af28LnkAliY08AAAAAElFTkSuQmCC"/>
                    <a  target = "_blank" href="https://github.com/SONISOMYA"  >@SONISOMYA</a>
                </div>
                <div class="soc">
                    <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADAAAAAwCAYAAABXAvmHAAAAAXNSR0IArs4c6QAAAmlJREFUaEPtmTmLFUEUhb+j4IiCibkgCopiYqAYyKi4wETuAxrMH1AMDAw0cIMBMRB/gQwauCcaKApqaiKIg6KJmQiGrojHLu0H/Yp+y0jX6/ewO+uFuufcc6tO9S0x4pdGHD8NgboVbBQYWgVs7wfOA6tqBvkGOCXpVhmOjiVk+xWwpmbwrfCzktbOlYCHBPwfGJJKk91NgYZAlQpWpcB74ATwGPgF7AAuAMuqBFta6xWV0BZJT4sBbG/LCSXlUIUC3yUtjFHang98BsZSMkhJYF5WVl+BBcNOIOAbl/RsVEso4H4HTEh6G25sB6O7ByxPmf0UPvAyB7wuNfDW+FXMgUFhLY1TFYGbwGwUYTUwWXh2LveI4mdHgKXAk9w3goKfgBXARuAwsLVbhqoicCDeFdreA9zpJrXtF9kyOy3peieQtjcBjzKCi1IaWRmB3cDdHgTC6tVmgGUgbR8FLg+awF7gdq/J1s8Esh2y/xFYHH9fawm1wNheDywBPkh63UGFB8DOQRLoWUK5Z1wDDhWATUmaKdmaXASODxUB2xPA/QjUt7AySfoSOfsx4NIgCfSzCpVmFdgg6XlEYAq4MmwE4vJp4dsl6WFEIDQTgt+0XbVOYttXc7OKcZUty0kJHMy6A23Zsb0PKLY8xiT9iLLaicCkpBuDVKAhENVQo8Bc+0JNCTUlFPtDl/15WWvxdPbjEW+LNwNnC+OEZtfPaNyTwPaSWGfyn5ziq/HsJsRJYmSd+CZ/XpUTJwfaKcB/SWDkDzjCpmoaWFlb3fwN/G9HTDWD7jt8c8zad6oSfdgokCixfQ878gr8BpxNpUD69m+kAAAAAElFTkSuQmCC"/>
                    <a  target = "_blank" href="https://www.linkedin.com/in/somya-soni-29100411e">somyasoni</a>
                </div>
                <div class="soc">
                <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADAAAAAwCAYAAABXAvmHAAAAAXNSR0IArs4c6QAAAulJREFUaEPtmU+ITWEYxn/PQv5lYUFGURYWxEJJWSkWFgpFqYlSJKVMivXI1oIkCxELUf4sTMpGKQuWkmKhKPk3Vkr+jM1j3umMzpgz93xn7rn3ztR56y5u532/93m+973veb7villumuX4aQj0uoJNBZoKtLkDTQu1uYFth7esgO1lwBJJL9vONI0FbK8HhiV9nSq8kIDtjcA1YF0W+BY4LOnxNHBUDrG9FbgCrMqCXwAHijZyEgHb24AhYEFB5kFJZyojqhBg+zQwWBDyHdgu6Vn+WRGBB8COFjkfAv2SvlXAVepqezFwK0C2cL4taV8ZgWFgaUnG98BuSc9LkSU42N4E3AFWlrh/kLSijIATcobLH+CUpAuJ/oVutgeAs8CclHUkTeiaohZKJTCeL34v+yVFjyab7UXADWBnchDQCQKR/x2wK3Xc2t4A3MtNmWQOnSIQAH4DA5Iut0Jj+yhwHpibjDrn2EkC42luAkck/cgDtL0QuA7snQ7w8ZhuEIhcb7KWeh1fbK8B7gOr2wEfsd0iELl+xdsbmAdcBOa3C77bBOrAO2mNblagIVC0A3VV4BWwtuYtTlqzLgKhR07G3K+JxDkgPqGxWlpdBPokfbEdMiDkQMiC6VjIj5AhQ7aXAx/LFqmLwHJJn7MZH4eOmPFxeqpioWT3SAoZEu+K3hDIkocsCHkQMiHFLgEnJIWiHbOeEsiBCJkQciFkQ5GFvDgo6e7/D2cEgWwnQy5ES4V8yFtcDETLhMyYZDOGQEYiZEMcyvszpFeBY5JGpuqvbhMYm0JlzW77EDAiKSZVS8uucMYGQyurfQqVJUx93u0K/BujqQDL/BoCuVGYcqif0RWIg0gcQlpZ0o+4rG3yz233jR5FP5XE/JQ04R1TdK3yFNjcAwIpUuLJ6P3sljy2IgKhbeKyKi5Yi+5HI77bFYg3+CPguKQJirX5g6NKn3fCt6lAJ3a1yppNBarsVid8mwp0YlerrPkXUuE9QAjD/pgAAAAASUVORK5CYII="/>
                <a  target = "_blank"  href="mailto:nobitanobi0411@gmail.com">Mail</a>

                </div>
            </div>
        </div>
            <br>
        </div>
    </footer>
</body>
</html>
