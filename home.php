<?php
  include "config.php";
  $rawData = mysqli_query($con, "select * from todo");
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
      <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Concert+One&display=swap" rel="stylesheet">

    <title>Study Spaces</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="style.css">
    <script src="https://kit.fontawesome.com/ede70cc9f6.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
  </head>


  <body>

    <div>
      <span class="border"></span>
    </div>

    <img src="bg.gif" alt="">
    <div>
      <i class="fa-solid fa-image"></i><a href="#bgr" class="fa-solid fa-image"></a>
      <i class="fa-solid fa-clock-rotate-left"></i><a href="#timer" class="fa-solid fa-clock-rotate-left"></a>
      <i class="fa-solid fa-volume-up"></i><a href="#sound" class="fa-solid fa-volume-up"></a>
      <i class="fa-solid fa-music"></i><a href="#musik" class="fa-solid fa-music"></a>
      <i class="fa-solid fa-pen-to-square"></i><a href="#todolist" class="fa-solid fa-pen-to-square"></a>
    </div>



    <button type="" class="btn1"><i class="fa-regular fa-user"></i><a style ="color: inherit" href="#profile" class="fa-regular fa-user"></a></button>
    <button type="" class="btn2"><i class="fa-brands fa-gratipay"><a href="feedback1.php" style ="color: inherit" class="fa-solid fa-1"></a></i></button>
    <button type="" class="btn3"><i class="fa-solid fa-share-nodes"></i><a style ="color: inherit" href="#share" class="fa-solid fa-share-nodes"></a></button>
    <button type="" class="btn4"><i class="fa-regular fa-comment"></i><a style ="color: inherit" href="#popup" class="fa-regular fa-comment"></a></button>

 
    <div class="popup" id="popup">
      <div class="popup_inside">
        <a href="#" class="popup_close">&times;</a>
        <div class="popup_header">
          <h1>Contact Us</h1>
          <hr>
        </div>
        <div class="popup_text">
          <h2>Office Address:</h2>
          <p>Pakuan University, Faculty Mathematics and Natural Sciences Building</p>
          <br>
          <h2>Email:</h2>
          <p>study_spaces@unpak.ac.id</p>
          <br>
          <h2>Phone:</h2>
          <p>022-456-78900</p>
        </div>
      </div>
    </div>

    <div class="profile" id="profile">
      <div class="profile_inside">
        <a href="#" class="profile_close">&times;</a>
        <div class="profile_header">
          <h2>Profile</h2>
          <i class="fa-solid fa-user"></i>
          <br>
        </div>
      <div class="profile_detail">
        <button class="btn_profile">User Details</button>
      </div> 
      <div class="profile_text">
        <h3>Username</h3>
        <p>Alexnder Boutista</p>
        <h3>Email Address</h3>
        <p>alexander12@gmail.com</p>
      </div>
      </div>
    </div>

    <div class="sound" id="sound">
      <div class="sound_inside">
        <a href="#" class="sound_close">&times;</a>
        <div class="mp3_sound">
          <br><br>
          <h3>Rain</h3>
        </div>
        
      <div class="audio">
        <audio controls>
          <source src="wsweb.mp3" type="audio/mpeg">
        </audio>
        <br><br>
        <div class="sound_shape">
          <button class="btn_sound">Sound</button>
        </div>
      </div>
      <div class="mp3_sound2">
        <h3>Fire</h3>
      </div>
      <div class="audio2">
        <audio controls>
          <source src="fireweb.mp3" type="audio/mpeg">
        </audio>
        <br><br>
      </div>
      <div class="mp3_sound3">
        <h3>Nature</h3>
      </div>
      <div class="audio3">
        <audio controls>
          <source src="nature.mp3" type="audio/mpeg">
        </audio>
        <br>
    </div>
  </div>
</div>
 
<div class="warna_musik" id="warna_musik">
    <div class="musik" id="musik">
      <div class="musik_inside">
        <a href="#" class="musik_close">&times;</a>
        <div class="music_shape">
          <button class="btn_musik">Music</button></div> 
        <div class="bacground_border">
          <button class="btn_back"></button>
        </div>

        <div class="musik_mp3">
          <h3 id="musck1">
          <a href="https://youtu.be/N9uF8_0bv0k" target=_blank>Terlatih Patah Hati</a>
          </h3>
        </div> 
          
        <div class="musik_mp31">
          <h3 id="musck2">
          <a href="https://www.youtube.com/watch?v=tOMFR0nQt48" target=_blank>Daun Jatuh - Resah Jadi Luka</a>
          </h3>
        </div>
       
    <div class="musik_mp32">
      <h3 id="musck3">
      <a href=" https://www.youtube.com/watch?v=8zwz2fVgfVM " target=_blank>Last Child - DUKA</a>
      </h3>
    </div>
    
    <div class="musik_mp33">
      <h3 id="musck4">
      <a href="https://www.youtube.com/watch?v=zT0-tOian_Q" target=_blank>Peder B. Helland - You & Me</a>
      </h3>
    </div>
    
    <div class="musik_mp34">
      <h3 id="musck5">
      <a href="https://www.youtube.com/watch?v=CRrf3h9vhp8" target=_blank>Olivia Rodrigo - traitor</a>
      </h3>
    </div>
    
    <div class="musik_mp35">
      <h3 id="musck6">
      <a href="https://www.youtube.com/watch?v=k4V3Mo61fJM" target=_blank>Coldplay - Fix You</a>
      </h3>
    </div>
    
    <div class="musik_mp36">
      <h3 id="musck7">
      <a href="https://www.youtube.com/watch?v=1vrEljMfXYo" target=_blank>John Denver - Take Me Home</a>
      </h3>
    </div>
     
    <div class="musik_mp37">
      <h3 id="musck8">
      <a href="https://www.youtube.com/watch?v=ErmgY5GX_wI" target=_blank>NIKI - La La Lost You</a>
      </h3>
    </div>
     
    <div class="musik_mp38">
      <h3 id="musck9">
      <a href="https://www.youtube.com/watch?v=7_jotI2IS3M" target=_blank>Ibrahim - Saffron and Green Tea</a>
      </h3>
    </div>
    
    <div class="musik_mp39">
      <h3 id="musck10">
      <a href="https://www.youtube.com/watch?v=FjHGZj2IjBk&t=2084s" target=_blank>Meditation - Monoman</a>
      </h3>
    </div>
      </div>
  </div>
  </div>
  </div>
</div>

    <div class="bgr" id="bgr">
      <div class="bgr_inside">
        <a href="#" class="bgr_close">&times;</a>
        <div class="bgr_header">
          <button class="btn_bgr"><b>Change Background</b></button>
        </div>
        <div class="bgr_img">
          <a href="bg.php"><img src="bg1.gif" class="img1"></a>
          <a href="bg1.php"><img src="bg2.gif" class="img2"></a>
          <a href="bg2.php"><img src="bg3.gif" class="img3"></a>
          <a href="home.php"><img src="bg.gif" class="img4"></a>
        </div>
      </div>
    </div>

    <div class="share" id="share">
      <div class="share_inside">
        <a href="#" class="share_close">&times;</a>
        <div class="share_header">
          <h2>Share With Others</h2>
          <br>
        </div>
      <div class="share_text">
          <p>Copy the link to share with your friends!</p>
      </div>
      <div class="share_shape">
        <input id="text" class="text" value="Bit.ly/StudySpaces">
        <br><br>
        <button class="btn_copy" onclick="copyText()">share</button>
        <script>
          function copyText() {  
            var copyText = document.getElementById("text");  
            copyText.select();  
            document.execCommand("copy");
        }
        </script>
      </div>
    </div>
      </div>
      </div>
      </div>


    <div class="todolist" id="todolist">
        <div class="todolist_inside">
        <a href="#" class="todolist_close">&times;</a>
        <form action="insert.php" method="POST">
        <div class="container">
            <div class="row justify-content-center m-auto mt-3 py-3">
                <h3 class="text-center">To Do List</h3>
                <div class="col-8">
                    <input type="text" name="list" class="form-control">
                </div>
                <div class="col-2_add">
                    <button>+ New To-Do</button>
                </div>
            </div>
            </div>
            </div>
            </form>
        <div>

        <table>
            <tbody>
                <?php
                while($row = mysqli_fetch_array($rawData)) {

                ?>
                <tr>
                        <td><?php echo $row['id']?>
                        <td><?php echo $row['list']?></td>
                        <td style="width: 20%;"><a href="delete.php? id=<?php echo $row['id']?>" class="btn btn-outline-danger1">🗑️</a></td>
                        <td style="width: 20%;"><a href="update.php? id=<?php echo $row['id']?>" class="btn btn-outline-danger2">📝</a></td>
                      
                    </div>
                </tr>
                <?php
                }
                ?>

            </tbody>
        </table>
     </div>
</div>
    </div>
    </div>
        </div>
        


    <div class="timer" id="timer">
      <div class="timer_inside">
        <a href="#" class="timer_close">&times;</a>
        <div class="timer_header">
          <h3>Timer</h3>
          <i class="fa-clock-rotate-left"></i>
          <br>
        </div>
      <div class="timer_detail">
        <div class="container_timer">
    <div class="row">
        <div class="timer1" id="timer1">
        00.00
        </div>
        <div class="col-4">
        </div>
      </div>

    <div class="row">
        <div class="col-4">

        </div>

        <div class="start">
        <div class="col-2" onclick="studyBreak(25)">
        Study
        </div>
      </div>

      <div class="break">
        <div class="col-2" onclick="studyBreak(10)">
        Break
        </div>
      </div>

        <div class="col-4">

        </div>
    </div>
    <script src="main.js"></script>
      </div>
      </div>
              </div>
              </div>
  </body>
</html>