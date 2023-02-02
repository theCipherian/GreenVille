<!-- Author - Kenneth Okpala Chibuzor. Licenced as free software. Contact me at thecipheriansvault@gmail.com  -->
<?php
session_start();
require("init.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nairaplus</title>
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Comfortaa:wght@300&family=Maven+Pro&family=Poppins:wght@200&family=Raleway:wght@200&family=Ubuntu:ital@0;1&display=swap" rel="stylesheet">
    <!--STYLESHEETS-->
    <link rel="stylesheet" href="assets/css/form.css">
    <link rel="stylesheet" href="assets/css/select.css">
    <link rel="stylesheet" href="assets/css/buttons.css">
    <!--SCRIPTS-->
    <style>
      :root{
      --primary-color-hue: 252;
      --color-primary:hsl(var(--primary-color-hue), 75%, 60%);
      }
    *{
    margin:0;
    padding:0;
    font-family: 'Maven Pro', sans-serif !important;
    box-sizing:border-box;
    }
    html{
    background: #fff;
    overflow:hidden;
    max-width:100%;
    font-family: 'Maven Pro', sans-serif;
    max-height:100%;
    }
    body{
    width:100vw;
    display:flex;
    align-items:center;
    justify-content:center;
    height:100vh;
    overflow:hidden;
    background-color:rgb(220,224,232);
    }
    .box-1{
        width:100%;
        height:100%;
        position:relative;
        overflow:hidden;
    }
    .f232{
        position:absolute;
        left:0;
        top:0;
        
        width:15%;
        background-color:#fff;
        bottom:0;
    }
    .f983{
        position:absolute;
        right:0;
        top:0;
        bottom:0;
        background-color:rgb(244,245,247);
        width:85%;
    }
    .g9202{
        padding:2rem;
    }
    .p34{
        font-family: 'Comfortaa', cursive;
        padding-top:8px;
        padding-left:5px;
    }
    .b332{
        display:flex;
        align-items:center;

    }
    .o3943{
    margin-top:2rem;
    width: 100%;
    height: 50px;
    font-family: 'Maven Pro', sans-serif;
    font-size: 12px;
    color: black !important;
    background-color: rgba(0,82,204,0.50);
    border-radius:30px;
    display:flex;
    box-shadow: 0px 8px 15px rgba(0, 0, 0, 0.1);
    justify-content: space-between;
    align-items: center;
    transition: all 0.3s ease 0s;
    cursor: pointer;
    overflow:hidden;
    /* outline: 6px solid #fff; */
    position:absolute;
    padding:5px;
    z-index:999;
  }
   .o3943:hover{
    opacity:0.80;
    transition:.5s ease;
   }
  /* .blob{
    width:100px;
    height:20px;
    position:absolute;
    top:-10px;
    z-index:-1;
    right:-10px;
    border-radius: 45px;

  } */
  .u938{
    font-size:1.5rem;
    color: rgba(0,82,204,1);
  }
  .liner{
    margin-top:5rem;
    width:100%;

  }
  .liner div{
   margin-left:2rem;
   font-size:15px;
   height:2rem;
   margin-bottom:1rem;
   font-family: 'Maven Pro', sans-serif;
   display:flex;
   align-items: center;
   color:rgb(110,122,143);
   transition:.5s ease;
   cursor:pointer;
   
  }
  .liner div:hover{
  color:rgb(0,82,204) !important;
  transition:.5s ease;
   
  }
  .active_1{
    border-right:2px solid rgba(0,82,204,0.10);
    color:rgb(0,82,204);
    font-weight:bold;
  }

  
  .ccc{
 margin-right:5px;
 font-size: 10px;
   
  }
  .vbm{
    text-transform: uppercase;
    letter-spacing: 2px;
    font-size: 15px;
    margin-left:10px;
    
    color:#fff;
  }
  .btn{
    width:90%;
    color:#fff;
    position:absolute;
    bottom:10px;
    margin:0 auto;
    cursor:pointer;
    left:0;
    right:0;
    font-size:14px;
    min-height:max-content;
    padding:1rem;
    font-family: 'Maven Pro', sans-serif;
    text-align: center;
    border-radius:45px;
    background-color: rgb(0,82,204);
  }
  .btn:hover{
    opacity:0.80;
    transition:.5s ease;
  }
  .f983{
    padding:2rem;
  }
  .search{
    background-color:transparent;
    border:none;
    width:100%;
    outline:none;
  }
  .search::placeholder{
    color:rgb(221,221,221) !important;
  }
  .search:focus{
    outline:none;
  }
   .search_holder{
    width:20rem;
    margin-right:4.5rem;
    height:max-content;
    display:flex;
    align-items:center;
    position:relative;
    padding:13px;;
    justify-content:space-between;
    border-radius:45px;
    background-color:#fff;
   }
   .icon_holder{
     width:2rem;
     position:absolute;
     right:6px;
     margin:auto;
     height:2rem;
     display:flex;
     align-items:center;
     justify-content: center;
     border-radius:50%;
     background-color:rgb(244,245,247);
   }
   .l0342{
    width:100%;
    display:flex;
    align-items:center;
    justify-content: flex-end;
   }
   .notifications{
    width:2.5rem;
    display:flex;
    align-items:center;
    background-color: #fff;
    border-radius:50%;
    justify-content:center;
    height:2.5rem;
    margin-right:5rem;
    font-size:1.2rem;
    position:absolute;
   }
   .avatar{
   height:2.5rem;
   display: flex;
   align-items: center;
   justify-content: center;
    border-left:1px solid rgb(221,221,221) ;

   }
   .avatar img{
    object-fit:cover;
    width:45px !important;
    height:45px !important;
    margin-left:1rem;
    border-radius:50%;
   }
   .ftext{
    padding:2rem; 
   }
   .ftext h5{
    color:#6e7a8f; 
   }
   .fmanager{
    display:flex;
    width:100%;
    padding:1rem;
    justify-content:space-between;
   }

   .fmanager div{
    border-radius:15px;
    background-color:#fff;
  
   }
   .fm1{
    width:60%;
    align-items:center;
    
    height:10rem;
   }
   .fm2{
    width:35%;

    height:10rem;
   }
   .sec_b{
    background-color:rgb(0,184,217) !important;
    width:max-content;
    color:#fff;
    cursor:pointer;
    padding:1rem;
    box-shadow: 0px 8px 15px rgba(0, 0, 0, 0.1);
    font-size:14px;
    height:max-content !important;
    display:flex;
    align-items:center;
    font-family:'Maven Pro', sans-serif;
    text-align: center;
    border-radius:30px  !important;
   }
   .sec_b:hover{
    opacity:0.80;
    transition:.5s ease;
  }
  .fm1, .fm2{
    display:flex;
    align-items: center;
    flex-direction:row;
    justify-content:space-around;
  }

  .i4938{
    display:flex;
    align-items:center;
  }
  .l34{
    color:#6e7a8f;
    margin-bottom:10px;
  }

  .uil-university{
    font-size:2rem;
    color:rgb(0,82,204);
    margin-right:5px;
  }
  .uil-money-bill{
    font-size:2rem;
    color:rgb(0,82,204);
    margin-right:5px;
  }
  .m343{
    font-size:2rem;
    
  }
  .tm1{
    padding:1rem;
  }
  .tm1::-webkit-scrollbar{
    background-color:transparent;
    height:3px;
}
  .tm1::-webkit-scrollbar-thumb{
   background-color:#eee;
   border-radius:30px;
}
  .forder{
    font-weight:bold !important;
    display: flex;
    width:100%;
    align-items: center;

  }
  .forder div{
    margin-left:6rem;
  }
.modal-1{
  position:absolute;
  right:0;
  top:0;
  bottom:0;
  height:100vh;
  overflow:hidden;
  width:100%;
  z-index:9999;
  background-color:rgba(255,255,255,0.70);

}
.modal-1_cont{
  position:absolute;
  height:80%;
  bottom:0;
  right:2rem;
  width:30%;
}
.alter{
  position:absolute;
  left:0;
  width:70%;
  display:flex;
  align-items: center;
  justify-content: center;
  height: 100vh;
}
.note{
  margin-bottom:10px;
}
.m1c-head{
  padding:1rem;
  display:flex;
  align-items: center;
  box-shadow: 0px 10px 15px rgba(0, 0, 0, 0.01);
  justify-content: end;
  height:10%;
  width:100%;
  background-color:#fff;
  margin-bottom:1rem;
}
.m1c-body{
  height:90%;
  padding:1rem;
  width:100%;
  position:absolute;
  box-shadow: 0px 10px 15px rgba(0, 0, 0, 0.01);

  background-color:#fff;
}
.spinner{
    width: 20px;
    height: 20px;
    background-color:rgb(0,82,204);
    border-radius: 50%;
    animation-name: spinner;
    animation-duration: 1s;
    animation-iteration-count: infinite;
    animation-timing-function: linear;
}
.circle{
    width: 10px;
    height: 10px;
    background-color: rgb(0,82,204);
    border-radius: 50%;
    margin-left: 155px;
    margin-top: 8px;
}
@keyframes spinner{
    100%{
        transform: rotate(360deg);
    }
}
.destro{
 

  width: 150px;
margin-left:1rem;
  line-height: 2;
}

.btn{
  box-shadow: 0px 8px 15px rgba(0, 0, 0, 0.1);
}

.note{
        padding:10px;
        border-radius:10px;
        background-color:rgba(0,184,217,0.06);
        color:rgb(0,184,217);
        margin-top:10px;
    }

.top-and-bottom, .left-and-right, .corner-border, .bottom-corner {
  position: relative;
  margin-top: 30px;
  margin-bottom: 30px;

}/* vertical line */


/* horizontal line */
.corner-border::before{
  content:'';
  position: absolute;
  background-color:  rgb(0,184,217);
  width: 30%;
  height: 2px;
  top: 0;
 
}


.nb0{
  height:100%;
  width:100%;
  overflow-y:scroll;
}
.nb0::-webkit-scrollbar{
    background-color:transparent;
}
.nb0::-webkit-scrollbar-thumb{
   background-color:#eee;
   border-radius:30px;
}
.ghost{
  display:none !important;
}
.m_closer_1{
  position:absolute;
  top:0;
  margin:0 auto;
  width:3rem;
  left:0;
  display:flex;
  justify-content: center;
  align-items: center;
  padding:5px;
  border-bottom-left-radius: 50px;
  border-bottom-right-radius: 50px;
  right:0;
  color:#fff;
  height:3rem;
  cursor:pointer !important;
  z-index: 99991;
  background-color:rgb(0,82,204);
}
.uil-x{
  font-size: 1.5rem;
 
  
}
.b{
  cursor:pointer !important;
}


.b{
    width:100%;
    height:max-content;
    padding:10px;
    border-radius: 5px;
    float:right;
    background:rgb(0,82,204);
    color:#fff;
    cursor:pointer;
    border:2px solid rgb(0,82,204);
}
*,
*:focus{outline: none}

.form{
  width: 100%;
  margin: 0 auto;
  margin-top: 10px;
  background: #fff
}
.form-item{
  position: relative;
  margin-bottom: 15px
}
.form-item input{
  display: block;
  width: 100%;
  height: 50px;
  letter-spacing: 1px;
  background: transparent;
  border: solid 2px rgb(0,82,204);
  border-radius:5px;
  transition: all .3s ease;
  padding: 0 15px;
  
}
.form-item input:focus{
  border-color: rgb(0,82,204);
}
.form-item label{
  position: absolute;
  cursor: text;
  z-index: 2;
  top: 13px;
  left: 10px;
  background: #fff;
  padding: 0 10px;
  transition: all .3s ease
}
.form-item input:focus + label,
.form-item input:valid + label{
  font-size: 14px;
  top: -5px
}
.form-item input:focus + label{
  color: rgb(0,82,204);
}
/* Chrome, Safari, Edge, Opera */
input::-webkit-outer-spin-button,
input::-webkit-inner-spin-button {
  -webkit-appearance: none;
  margin: 0;
}

/* Firefox */
input[type=number] {
  -moz-appearance: textfield;
}
select {

/* styling */
background-color: white;
border: 2px solid rgb(0,82,204);
border-radius: 4px;
display: inline-block;
width:100%;
font: inherit;
line-height: 1.5em;
padding: 0.5em 3.5em 0.5em 1em;

/* reset */

margin: 0;      
-webkit-box-sizing: border-box;
-moz-box-sizing: border-box;
box-sizing: border-box;
-webkit-appearance: none;
-moz-appearance: none;
}




select.classic:focus {

border-color: rgb(0,82,204);
outline: 0;
}




select:-moz-focusring {
color: transparent;
text-shadow: 0 0 0 #000;
}

.i4938 i{
  margin-left:10px;
  margin-right:10px;
}

.ry55 {
  font-size:3rem !important;
  color:rgb(0,184,217) !important;
}
.noi{
  position:absolute;
  right:0;
  display:flex;
  align-items:center;
  justify-content:center;
  width:13%;
  background-color:#fff;
  top:0;
  bottom:0;

}
.i034w{
  display:flex;
  margin-top:10px;
  width:100%;
  align-items:center;
  justify-content:space-around;
}
.i034w div{
  width:45%;
  height:max-content;
  padding:1rem;
  text-align:center;
  border-radius:5px;
  color:rgba(0,82,204,1);
  border:2px solid rgb(0,82,204);
  transition:.3s ease;
}
.i034w div:hover{
 background-color:rgba(0,82,204,0.05);
 transition:.3s ease;
 cursor:pointer;
 border:2px solid rgb(0,82,204);
 color: rgb(0,82,204);;

 
}
.note_2{
  background-color:rgba(255,255,0) !important;
  color:black !important;
}

.sub-1{
  border:1px solid #eee;
  padding:10px;
  min-height:12rem;
  border-radius:5px;
}
.b{
  text-align:center !important;
}
.lineloader{
  width:100%;
  max-height:2px !important;
  height:2px !important;
  background:linear-gradient(to right,  rgb(0,82,204),  rgb(0,82,204));
  background-color:transparent;
  position:absolute;
  top:0;
  left:0;
  display:none;
  z-index:999 !important;
  margin:0;
  background-size: 20%;
  background-repeat:repeat-y;
  background-position:-25% 0;
  animation: scroll 1.3s linear infinite;
}
@keyframes scroll{
  50%{
    background-size:70%;
  }
  100%{
    background-position:125% 0;
  }
}
.sub-1{
  transform:scale(1);
  animation:grow 0.5s ease;
}

@keyframes grow{
  0%{
    transform:scale(0.5);
  }
  100%{
    transform:scale(1);
  }
}
.tm1{
  height:50%;
  overflow-y:scroll;
  display:flex;
  flex-direction:column;
}
.info_cont{
  width:100%;
  height:100%;
  max-height:100%;
  border-radius:10px;
  margin-top:10px;
  padding:10px;
  background-color:#fff;
}
.info{
  height:100%;
  width:100%;
  padding:1rem;
  overflow-y:scroll;
}
.info::-webkit-scrollbar{
    background-color:transparent;
}
.info::-webkit-scrollbar-thumb{
   background-color:#eee;
   border-radius:30px;
}
.kl42{
  display:flex;
  float:right;
  align-items:center;
}
.kl42 div{
  width:8rem;
  height:max-content;
  padding:1rem;
  margin:10px;
  text-align:center;
  border-radius:5px;
  color:rgba(0,82,204,1);
  border:2px solid rgb(0,82,204);
  transition:.3s ease;
}
.kl42 div:hover{
  background-color:rgba(0,82,204,0.05);
 transition:.3s ease;
 cursor:pointer;
 border:2px solid rgb(0,82,204);
 color: rgb(0,82,204);;
}
.info_texts{
  display:flex;
  align-items:center;
}
.info_texts div{
  margin:5px;
}
.fgl3{
  padding:10px;
  display:flex;
  align-items:center;
  border-bottom:1px solid  #eee;
}
.fgl4{
  padding:10px;
  display:flex;
  align-items:center;
}
.thing{
  padding:10px;
  border-radius:5px;
  color:black;
  font-weight:bold;
  margin:10px;
  letter-spacing:10px;
  background-color:  rgba(0,0,0,0.02);

}
.thing2{
  padding:10px;
  color:rgba(0,82,204,1);;


}
.fgl3{
  padding:1rem;

}
.fgl4{
  padding:1rem;

}
.r_cont{
  display:flex;
  padding:10px;
  white-space:nowrap;
  width:100%;
  overflow-x:scroll;
  border-bottom:1px solid #eee;
  justify-content:space-around;
  align-items:center;
}
.r_cont::-webkit-scrollbar{
    background-color:transparent;
    height:3px;
}
.r_cont::-webkit-scrollbar-thumb{
   background-color:#eee;
   border-radius:30px;
}
.hj{
display:flex;
justify-content:space-between;
min-width:30%;
align-items:center;
}
.hj:nth-child(1){
  text-transform:capitalize;
}
.ghl{
  width:30px;
  height:30px;
  align-items:center;
  justify-content:center;
  display:flex;
  margin:10px;
  background-color:rgb(240,244,254);
  border-radius:50%;
  padding:5px;

}
.ghl2{
  width:30px;
  height:30px;
  align-items:center;
  justify-content:center;
  display:flex;
  margin:10px;
  background-color:rgb(217,244,249);
  border-radius:50%;
  padding:5px;

}
.nbh{
  min-height:7rem !important;
  height:7rem !important;
  max-height:7rem !important;
}
.flash_red{
  animation:flash_red 1s ease;
  transition:.1s ease;
}
@keyframes flash_red{
  0%{
    color:red;
  }100%{
    color:unset !important;
  }
}
.flash_green{
  animation:flash_green 2s ease;
  transition:.1s ease;
}
@keyframes flash_green{
  0%{
    color:limegreen;
  }100%{
    color:unset !important;
  }
}
.ry55_holder{
  cursor:pointer;
  width:35px;
  height:35px;
  border-radius:50%;
  display:flex;
  margin-left:10px;
  z-index:99;
  color:black !important;
  align-items:center;
  background-color:#eee !important;
  justify-content:center;
}
.seeker{
  display:flex;
  width:50%;
  height:100vh;
  left:0;
  position:absolute;
  z-index:9999;
}
.vmo{
  position:absolute;
  right:0px;
  padding:2rem;
  display:flex;
  align-items:center;
  top:2px;
}
/* .cvv{
    background:url(assets/media/desc985404.svg);
    background-repeat:no-repeat;
    width:100%;
    height:100%;
    background-size:cover;
} */
.box-10{
  display:none;
  align-items:center;
  justify-content:center;
  height:100vh;
  width:100vw;
  overflow:hidden !important;
}
.i4938{
  font-size: 16px;
    /* 100 = viewport width, as 1vw = 1/100th of that
       Here, the body is 150% of viewport, but the container is 50%
       of viewport, so both parents factor  into how you want it to size.
       Let's say you like 5vw if it were the whole width,
       then for this container, size it at 3.75vw
       (5 * 1.5 [i.e. 150%]) * .5 [i.e. 50%]
    */
    font-size: 3.75vw;
}
.i4938 h3{
  font-size: 16px;
    font-size: 2vw !important;
}
.i009{
  font-family: 'Pacifico', cursive !important;
  font-size:1.3rem;
}
.bottom_thing {
    position: fixed;
    bottom: 0;
    right: 10px;
    display: none;
    align-items: center;
    justify-content: center;
    margin: auto;
    background-color: #fff;
    height: 3rem;
    width: 5rem;
    color: var(--color-primary);
    z-index: 999;
    box-shadow: 0px 0px 20px 20px rgb(0 0 0 / 3%);
}
.o3943{
    background-color: #fff;
    color:black !important;
    box-shadow: 0px 8px 15px rgb(0 0 0 / 5%);
  }
  .vbm{
    color:black;
  }
@media screen and (max-width:1200px){
  .b332 img{
    width:45px;
    height:45px;
  }
  .o3943{
    background-color: #fff;
    color:black !important;
  }
  .vbm{
    color:black;
  }
  .bottom_thing {
    position: fixed;
    bottom: 2rem;
    right: 0;
    cursor:pointer;
    display: flex;
    align-items: center;
    justify-content: center;
    margin: auto;
    font-size:1.5rem;
    background-color: #fff;
    border-top-left-radius: 20px;
    border-bottom-left-radius: 20px;
    height: 3rem;
    width: 5rem;
    color: rgb(0,82,204);
    z-index: 9999999;
    
    box-shadow: 0px 0px 20px 20px rgb(0 0 0 / 3%);
}
  .f232{
    position:fixed;
    left:0;
    width:40%;
    display:none;
    height:100%;
    box-shadow: 5px 0 5px -5px rgb(0 0 0 / 10%);
    z-index:99999;
    top:0;
    bottom:0;
  }
  .f983{
    width:100%;
  }
  .alter{
    width:30%;
    display:none;
  }
  .modal-1_cont {
    width:70%;
  }
  .i034w{
    justify-content:space-between;
  }
  .i034w div{
    max-width:30rem;
  }
  #vl, #va{
    margin-left:0px !important;
  }
  .seeker{
    display:none;
  }
  .vmo{
    left:0;
    right:0;
    justify-content:center;
    align-items:center;
    top:0;
    margin: auto;
    z-index: 99999;
  }
  .vmo img{
    width:100%;
    height:100%;
  }
}
@media screen and (max-width:400px){
  .modal-1_cont {
    width:98%;
    right:0;
  }
}
@media screen and (max-width:900px){
  .bottom_thing {
    position: fixed;
    bottom: 2rem;
    right: 0;
    cursor:pointer;
    display: flex;
    align-items: center;
    justify-content: center;
    margin: auto;
    background-color: #fff;
    border-top-left-radius: 20px;
    border-bottom-left-radius: 20px;
    height: 3rem;
    width: 5rem;
    color: rgb(0,82,204);
    z-index: 99999;
    
    box-shadow: 0px 0px 20px 20px rgb(0 0 0 / 3%);
}
.f232{
    position:fixed;
    left:0;
    width:70%;
    height:100%;
    display:none;
    box-shadow: 5px 0 5px -5px rgb(0 0 0 / 10%);
    z-index:99999;
    top:0;
    bottom:0;
  }
  .f983{
    width:100%;
  }
  .i4938 h3{
   font-size: 16px;
   font-size: 4vw !important;
}
.fm1{
  flex-direction:column;
  padding:1rem;
align-items:flex-start;
}
.sec_b{
  float:right;
}
.fmanager {
  flex-direction:column;
}
.fm1{
  width:100%;
  margin-bottom:5px;
}
html{
font-size:14px !important;
}
.fm2{
  width:100%;
  
}
.tm1 img{
  width:50px !important;
  height:50px !important;
}
.f983{
  padding:1.5rem !important;
}
.sec_b {
    background-color: rgb(0,184,217) !important;
    width: 100%;
    color: #fff;
    cursor: pointer;
    padding: 1rem;
    box-shadow: 0px 8px 15px rgb(0 0 0 / 10%);
    font-size: 14px;
    height: max-content !important;
    display: flex;
    align-items: center;
    font-family: 'Maven Pro', sans-serif;
    text-align: center;
    border-radius: 8px !important;
}

.nbh{
  width:100%;
  overflow-x: scroll;
  display:flex;
  white-space: nowrap;
} 
.nbh::-webkit-scrollbar{
    background-color:transparent;
    height:3px;
}
.nbh::-webkit-scrollbar-thumb{
   background-color:transparent;
   border-radius:30px;
}
.kl42{
  background-color:#fff;
  float:unset !important;
}
}
.noner_2{
  display:block;
}
.info_cont {
width:100%;
height:max-content !important; 
}
/* .tm1{
  position:absolute;
  left:0;
  bottom:0;
  width:100vw;
  height:80vh;
  background-color:#fff;
  z-index: 999;
  border-top-right-radius:30px;
  border-top-left-radius:30px;
} */

    
    </style>
</head>
<body>
<?php
   if(isset($_SESSION['pulse'])){
    ?>
  <!-- BUILD ASSETS -->
    <div class="modal-1 ghost">
      <div class="m_closer_1">
        <i class="uil uil-x"></i>
      </div>
      <div class="alter">
        <div class="spinner">
          <div class="circle"></div>
      </div>
      </div>
      <div class="modal-1_cont ">
         <div class="m1c-head"><span class="destro corner-border"></span></div>
         <div class="m1c-body">
         <div class="lineloader"></div>
          <div class="nb0" style='padding:10px'>
          </div>
         </div>
      </div>
    </div>

  <!-- ASSETS END -->

   <div class="box-1">
    <div class='f232'>
        <div class="g9202">
             <div class="b332"><img style='width:45px;height:45px;object-fit:cover' src="assets/media/icons8-cells-50.png" alt=""> <span class="p34 i009">Greenville</span></div> 
             <?php
               if($_SESSION['pulse'] == 'elixir'){
              ?>
             <div class="o3943">
                <div>
                <div class="vbm">environment</div>
            </div>
            <div class='noi'>
                <i class="u938 uil uil-angle-right"></i>
            </div>
             </div>
             <?php
               }
               ?>  
        </div>
        <div class="liner">
           <div class="active_1">Dashboard</div>
           <?php
            if($_SESSION['pulse'] == 'elixir'){
            ?>
           <div class='m-action' forge="manage_accounts"> <i class="ccc uil uil-circle"></i>Accounts</div>
           <div class="m-action" forge="create_branch"> <i class="ccc uil uil-circle m-action"></i>Branches</div>
           <div class="m-action" forge="create_manager"> <i class="ccc uil uil-circle m-action"></i>Managers</div>
           <div class="m-action" forge="manage_teller"> <i class="ccc uil uil-circle m-action"></i>Tellers</div>
           <!-- <div class="m-action" forge="generate_report"> <i class="ccc uil uil-circle m-action"></i>Generate report</div> -->
           <div> <i class="ccc uil uil-circle"></i>Manage loans</div>
           <?php
            }else{
              ?>
                <div class='m-action' forge="record_tranx"> <i class="ccc uil uil-circle"></i>Record tranx</div>
                <div class='m-action' forge="manage_accounts"> <i class="ccc uil uil-circle"></i>See tellers</div>
              <?php
            }
           ?>
        </div>
        <div class="btn" id='terminate_' style='display:flex;justify-content:space-evenly;align-items:center'>Terminate <i style='font-size:1.4rem' class="uil uil-signout"></i></div>
    </div>
    <div class='f983'>
       <!--user second class actions -->
       <div class="l0342">
             <div class="search_holder">
              <input class="search" placeholder=" &nbsp    search for tools..." type="text">
              <div class="icon_holder"><i class="uil uil-search"></i></div>
             </div>
             <div class="notifications"><i class="uil uil-bell"></i></div>
             
             <div class="avatar"><img  src="assets/media/download (1).jfif" alt=""></div>
       </div>
       <!--user second class actions end -->
       <!-- firsthand text -->
        <div class="ftext">
          <h1>Welcome, <?php  
          if($_SESSION['pulse'] !== 'elixir'){
          echo $manager_name; 
          }else{
            ?>
               Administrator 
            <?php
          }
          ?></h1>
          <br>
          <h5>Check your activities, manage users, see notifications and manage funds.</h5>
        </div>
       <!--firsthand text end -->
       <!-- fund manager -->
        <div class="fmanager">
          <div class="fm1">
            <div class="p5334">
              <div class="l34">Bank reserve</div>
              <div class="">
                <div class="i4938"><i class="uil uil-university"></i> <h3 class="m343"><?php echo $reserve  ?></h3></div>
                <!-- <div></div> -->
              </div>
            </div>
            <?php
              if($_SESSION['pulse'] == 'elixir'){
            ?>
            <div class="sec_b m-action" forge='reserve'>Manage reserve</div>
            <?php
              }
            ?>
          </div>
          <div class="fm2">
          <?php
              if($_SESSION['pulse'] == 'elixir'){
            ?>
    <div class='ry55_holder'><i style="font-size:1.5rem" class=" uil uil-arrow-up"></i></div>
            <?php
              }
            ?>
            <div class="p5334">
              <div class="l34">current account</div>
              <div class="">
                <div class="i4938" ><i class="uil uil-money-bill"></i> 
                <?php
                 if($_SESSION['pulse'] == 'elixir'){
                ?>
                <h3 class="m343">Reserve</h3> 
              <?php
                 }else{
                  ?>
                <h3 class="m343">#<?php echo $show_name  ?> </h3> 
                  <?php
                 }
                ?>
              </div>
                <!-- <div></div> -->
              </div>
            </div>
          </div>
        </div>
        <div class='bottom_thing'><i class="uil uil-processor"></i></div>
       <!--fund manager end -->
       <!--Trans manager -->
       <style>
        .trans{
          width:100%;
          height:100%;
        }
        .trans-header{
          background-color:#fff;
          border-top-left-radius:10px;
          border-top-right-radius:10px;
          display:flex;
          align-items:center;
          font-weight:bold !important;
          color:#121212;
          height:3.5rem;
          padding:1rem;
        }
        .td{
          height:100%; 
        }
        .trans-subheader{
          height:3.5rem;
          background-color:#fff;
          margin-top:5px;
          display:flex;
          align-items:center;
          padding:1rem;
          color:#58595B;
        }
        .transbody{
          height:3.5rem;
          background-color:#fff;
          margin-top:5px;
          display:flex;
          align-items:center;
          padding:1rem;
          color:#58595B;
        }
        .transbody .s_item{
          font-weight:bold;
          font-size:14px;
        }
        .s_item{
          width:25%;
        }
        .s_item{
          width:25%;
          display:flex;
          align-items:center;
        }
        
        .s_item i{
          margin:5px;
          color:var(--color-primary);
        } 
        .amount_for_desc{
          display:flex;
          width:7rem;
          border-radius:30px;
          height:2rem;
          padding:10px;
          justify-content:center;
          position:relative;
          align-items:center;
          background-color:rgb(220,224,232);
        }
        .alt_{
          background-color:#fff;
          border-radius:50%;
          display:flex;
          width:1.5rem;
          position:absolute;
          left:3px;
          margin:auto;
          top:0;
          bottom:0;
          height:1.5rem;
          align-items:center;
          justify-content:center;
        }
       </style>
         <div class="tm1">
          <!-- <img style='width:100px;height:100px;' src="assets/media/icons8-cells-100.png"/> -->
          <?php
          if($_SESSION['pulse'] !== 'elixir'){
            ?>
          <div class='trans'>
             <div class="trans-header">
              <div class='td'>Transaction History</div>
             </div>
             <div class="trans-subheader">
               <div class='s_item'>
               <i class="uil uil-calender"></i> <span>Date</span>
               </div>
               <div class='s_item'>
               <i class="uil uil-filter"></i><span>Transaction Type</span>
               </div>
               <div class='s_item'>
               <i class="uil uil-user"></i><span>Teller</span>
               </div>
               <div class='s_item'>
               <i class="uil uil-gold"></i><span>Amount</span>
               </div>
             </div>
             <?php
              $query = mysqli_query($init, "SELECT * FROM transactions WHERE branch = '$b_ranch' ORDER BY id DESC");
              $is_it  = mysqli_num_rows($query);
              if($is_it > 0){
                while($arr = mysqli_fetch_array($query)){
                  $date_ = $arr['date'];
                  $type_ = $arr['type'];
                  $teller_ = $arr['teller'];
                  $amount = $arr['amount'];
                  $teller_ = mysqli_query($init, "SELECT  names FROM tellers WHERE unique_id = '$teller_'");
                  $teller_arr = mysqli_fetch_array($teller_);
                  $teller_name = $teller_arr['names'];
                  
              
             ?>
             <div class="transbody">
              <div class="s_item"><?php  echo $date_ ?></div>
              <div class="s_item"> 
              <?php 
                if($type_ == 'credit'){
                  ?>
  <div class='ghl'><i class="uil uil-arrow-up"></i></div> Credited</div>
                  <?php
                }else{
                  ?>
                    <div class='ghl2'><i class="uil uil-arrow-up"></i></div> Debited</div>
                  <?php
                }
              ?>  
              <div class="s_item"><?php  echo $teller_name  ?></div>
              <div class="s_item"> <div class='amount_for_desc'><div class='alt_'><i class="uil uil-dollar-alt"></i></div> <?php echo $amount ?></div> </div>
             </div>
            <?php
              }
            }
              ?>
          </div>
          <?php
          }else{
            ?>

<div class='trans'>
             <div class="trans-header">
              <div class='td'>Transaction History</div>
             </div>
             <div class="trans-subheader">
               <div class='s_item'>
               <i class="uil uil-calender"></i> <span>Date</span>
               </div>
               <div class='s_item'>
               <i class="uil uil-filter"></i><span>Transaction Type</span>
               </div>
               <div class='s_item'>
               <i class="uil uil-user"></i><span>Teller</span>
               </div>
               <div class='s_item'>
               <i class="uil uil-gold"></i><span>Amount</span>
               </div>
             </div>
             <?php
              $query = mysqli_query($init, "SELECT * FROM transactions ORDER BY id DESC");
              $is_it  = mysqli_num_rows($query);
              if($is_it > 0){
                while($arr = mysqli_fetch_array($query)){
                  $date_ = $arr['date'];
                  $type_ = $arr['type'];
                  $teller_ = $arr['teller'];
                  $amount = $arr['amount'];
                  $teller_ = mysqli_query($init, "SELECT  names FROM tellers WHERE unique_id = '$teller_'");
                  $teller_arr = mysqli_fetch_array($teller_);
                  $teller_name = $teller_arr['names'];
                  
              
             ?>
             <div class="transbody">
              <div class="s_item"><?php  echo $date_ ?></div>
              <div class="s_item"> 
              <?php 
                if($type_ == 'credit'){
                  ?>
  <div class='ghl'><i class="uil uil-arrow-up"></i></div> Credited</div>
                  <?php
                }else{
                  ?>
                    <div class='ghl2'><i class="uil uil-arrow-up"></i></div> Debited</div>
                  <?php
                }
              ?>  
              <div class="s_item"><?php  echo $teller_name  ?></div>
              <div class="s_item"> <div class='amount_for_desc'><div class='alt_'><i class="uil uil-dollar-alt"></i></div> <?php echo $amount ?></div> </div>
             </div>
            <?php
              }
            }
              ?>
          </div>

<?php
          }
          ?>
         </div>
        <!--Trans manager end-->
    </div>
   </div>
   <!-- <div class="box-10">
    View on bigger SCREEN min-1200px
   </div> -->
<script>
let sub, ca, ma, vr, dr, sub_1, search_account;

let currency = function(number){
    return new Intl.NumberFormat('en-US', {style: 'currency',currency: 'NGN', minimumFractionDigits: 2}).format(number);
};


  // Functions 
let show_pre, hide_pre, getData, ghost, 
  terminate_ = document.getElementById("terminate_");
  togglr = document.querySelector(".bottom_thing");
  side_bar = document.querySelector(".f232");
  m_action = document.querySelectorAll(".m-action"),
  modal = document.querySelector(".modal-1"),
  placr = document.querySelector(".nb0"),
  text_1 = document.querySelector(".destro"),
  m_closer_1 = document.querySelector(".m_closer_1"),
  tm1 = document.querySelector(".tm1"),
  reserve_text = document.querySelector(".m343");
  lineloader = document.querySelector(".lineloader");

  reserve_text.textContent = currency(reserve_text.textContent);
  show_bar = () =>{
    side_bar.style.display = "flex";
  }
  hide_bar  = () => {
    side_bar.style.display = "none";
  }
  togglr.addEventListener("click", function(){
    side_bar.classList.toggle("noner_2");
  })
  show_pre = () => {
    lineloader.style.display = "block";
  }
  hide_pre = () => {
    setTimeout(() => {
      lineloader.style.display = "none";
    }, 2000);
  }

  getData = (url) => {
    return new Promise((resolve, reject) => {
      let request = new XMLHttpRequest();
      request.onload = function () {
        if (this.readyState === 4 && this.status === 200) {
          resolve(this.responseText);
        } else {
          reject(this.responseText);
        }
      };
      request.open("get", url, true);
      request.send();
    });
  };
  
 ghost_modals = () => {
    modal.classList.add("ghost");
 }



  // Action handlers
  m_closer_1.addEventListener("click", ()=> {
    ghost_modals();
  })

  // session terminate (logout)
  terminate_.addEventListener("click", () => {
  let request = new XMLHttpRequest();
      // Instantiating the request object
      request.open("GET", 'session_terminate.php?unset');

      request.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
      // Defining event listener for readystatechange event
      request.onreadystatechange = function() {
       window.location.reload();
      };

      // Sending the request to the server

     request.send();
  })
  m_action.forEach(m_a => {
    m_a.addEventListener("click", () => {
      modal.classList.remove("ghost");
      let forge = m_a.getAttribute("forge");
      if(forge == 'create_branch'){  
          text_1.textContent = "Manage branches";
          getData("branch_options.php")
          .then((resolve) => {
          placr.innerHTML = resolve;
          setTimeout(() => {
            let cb, mb, cb2, db2;
             cb = document.getElementById("cb");
             mb = document.getElementById("mb");
             cb2 = document.getElementById("cb2");
             db2 = document.getElementById("db2");
  
             cb2.addEventListener("click",() => {
              let edit_branch = document.getElementById("edit_branch");
              if(edit_branch.value == 'Select branch'){
                show_4.classList.remove("ghost");
                show_4.innerHTML = "Select a branch";
              }else{
                text_1.textContent = "Credit branch";
                let request = new XMLHttpRequest();
                      // Instantiating the request object
                      request.open("GET", 'data_functions.php?edit_branch='+edit_branch.value);

                      request.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
                      // Defining event listener for readystatechange event
                      request.onreadystatechange = function() {
                      show_pre();
                      // Check if the request is compete and was successful
                      if(this.readyState === 4 && this.status === 200) {
                        // Inserting the response from server into an HTML element
                   
                        hide_pre();
                      }
                      };

                      // Sending the request to the server
                      request.send();
                   
                 setTimeout(() => {
                  
                 
                    getData("credit_branch.php")
                    .then((resolve) => {
                  
                    placr.innerHTML = resolve;
                
                      setTimeout(() => {
                         let credit_balance = document.querySelector(".credit_balance");
                         let reserve_balance = document.querySelector(".reserve_balance");
                         new_balance = currency(credit_balance.textContent);
                         reserve_balance.textContent = currency(reserve_balance.textContent);
                         credit_balance.textContent = new_balance;
                         let credit_branch = document.getElementById("credit_bb");
                         sub = document.getElementById("sub-50");
                         sub.addEventListener("click", function(){
                          let request = new XMLHttpRequest();
                      // Instantiating the request object
                      request.open("GET", 'data_functions.php?credit_bb='+credit_branch.value);

                      request.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
                      // Defining event listener for readystatechange event
                      request.onreadystatechange = function() {
                      show_pre();
                      // Check if the request is compete and was successful
                      if(this.readyState === 4 && this.status === 200) {
                        // Inserting the response from server into an HTML element
                              show_4.classList.remove("ghost");
                              let real = JSON.parse(this.responseText); 
                              show_4.innerHTML = real[0].message;
                              if(real[0].number){
                              credit_balance.textContent = real[0].number;
                              reserve_balance.textContent = real[0].reserve;
                              reserve_text.textContent = real[0].reserve;
                              credit_balance = document.querySelector(".credit_balance");
                              new_balance = currency(credit_balance.textContent);
                              reserve_balance.textContent = currency(reserve_balance.textContent);
                              reserve_text.textContent = currency(reserve_text.textContent);
                              credit_balance.textContent = new_balance;
                              reserve_text.classList.add("flash_red");
                              credit_balance.classList.add("flash_green");
                              reserve_balance.classList.add("flash_red");
                              setTimeout(() => {
                                reserve_text.classList.remove("flash_red");
                                credit_balance.classList.remove("flash_green");
                                reserve_balance.classList.remove("flash_red");
                              }, 1000);

                              }
                        hide_pre();
                      }
                      };

                      // Sending the request to the server
                      request.send();
                         })
                         
                      }, 1000);
                    })
                    .catch((reject) => {
                    console.error(reject);
                    });
                  }, 500)
              }
             })
             db2.addEventListener("click",() => {
              let edit_branch = document.getElementById("edit_branch");
              if(edit_branch.value == 'Select branch'){
                show_4.classList.remove("ghost");
                show_4.innerHTML = "Select a branch";
              }else{
                text_1.textContent = "Debit branch";
                let request = new XMLHttpRequest();
                      // Instantiating the request object
                      request.open("GET", 'data_functions.php?edit_branch='+edit_branch.value);

                      request.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
                      // Defining event listener for readystatechange event
                      request.onreadystatechange = function() {
                      show_pre();
                      // Check if the request is compete and was successful
                      if(this.readyState === 4 && this.status === 200) {
                        // Inserting the response from server into an HTML element
                   
                        hide_pre();
                      }
                      };

                      // Sending the request to the server
                      request.send();
                   
                 setTimeout(() => {
                  
                 
                    getData("debit_branch.php")
                    .then((resolve) => {
                  
                    placr.innerHTML = resolve;
                
                      setTimeout(() => {
                         let credit_balance = document.querySelector(".credit_balance");
                         let reserve_balance = document.querySelector(".reserve_balance");
                         new_balance = currency(credit_balance.textContent);
                         reserve_balance.textContent = currency(reserve_balance.textContent);
                         credit_balance.textContent = new_balance;
                         let credit_branch = document.getElementById("debit_bb");
                         sub = document.getElementById("sub-50");
                         sub.addEventListener("click", function(){
                          let request = new XMLHttpRequest();
                      // Instantiating the request object
                      request.open("GET", 'data_functions.php?debit_bb='+credit_branch.value);

                      request.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
                      // Defining event listener for readystatechange event
                      request.onreadystatechange = function() {
                      show_pre();
                      // Check if the request is compete and was successful
                      if(this.readyState === 4 && this.status === 200) {
                        // Inserting the response from server into an HTML element
                              show_4.classList.remove("ghost");
                              let real = JSON.parse(this.responseText); 
                              show_4.innerHTML = real[0].message;
                              if(real[0].number){
                              credit_balance.textContent = real[0].number;
                              reserve_balance.textContent = real[0].reserve;
                              reserve_text.textContent = real[0].reserve;
                              credit_balance = document.querySelector(".credit_balance");
                              new_balance = currency(credit_balance.textContent);
                              reserve_balance.textContent = currency(reserve_balance.textContent);
                              reserve_text.textContent = currency(reserve_text.textContent);
                              credit_balance.textContent = new_balance;
                              reserve_text.classList.add("flash_green");
                              credit_balance.classList.add("flash_red");
                              reserve_balance.classList.add("flash_green");
                              setTimeout(() => {
                                reserve_text.classList.remove("flash_green");
                                credit_balance.classList.remove("flash_red");
                                reserve_balance.classList.remove("flash_green");
                              }, 1000);

                              }
                        hide_pre();
                      }
                      };

                      // Sending the request to the server
                      request.send();
                         })
                         
                      }, 1000);
                    })
                    .catch((reject) => {
                    console.error(reject);
                    });
                  }, 500)
              }
             })


             sub_1 = document.querySelector(".sub-1");
             mb.addEventListener("click", () => {
              sub_1.classList.toggle("ghost");
              let edit_branch = document.getElementById("edit_branch");
              sub = document.getElementById("sub-47");

              sub.addEventListener("click", () => {
                if(edit_branch.value !== 'Select branch'){
                let request = new XMLHttpRequest();
                // Instantiating the request object
                request.open("GET", 'data_functions.php?edit_branch='+edit_branch.value);
                request.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
                // Defining event listener for readystatechange event
                request.onreadystatechange = function() {
                  show_pre();
                    // Check if the request is compete and was successful
                    if(this.readyState === 4 && this.status === 200) {
                        // Inserting the response from server into an HTML element
                        show_4.classList.remove("ghost");
                        show_4.innerHTML = this.responseText;
                         if(this.responseText == 'Wait...'){
                          text_1.textContent = "Edit branch";
                              getData("edit_branch.php")
                              .then((resolve) => {
                              placr.innerHTML = resolve;
                              setTimeout(() => {
                                  let branch_name = document.getElementById("branch_name");
                                  let branch_manager = document.getElementById("branch_manager");
                                  let branch_status = document.getElementById("branch_status");
                                  let branch_location = document.getElementById("branch_location");
                                  sub = document.getElementById("sub-45");
                                  sub.addEventListener("click", () => {
                                    let request = new XMLHttpRequest();

                                    // Instantiating the request object
                                    request.open("GET", 'data_functions.php?bb_1='+branch_name.value+'&bb_2='+branch_manager.value+'&bb_3='+branch_status.value+'&bb_4='+branch_location.value);

                                    request.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
                                    // Defining event listener for readystatechange event
                                    request.onreadystatechange = function() {
                                      show_pre();
                                        // Check if the request is compete and was successful
                                        if(this.readyState === 4 && this.status === 200) {
                                            // Inserting the response from server into an HTML element
                                            show_4.classList.remove("ghost");
                                            show_4.innerHTML = this.responseText;
                                            hide_pre();
                                        }
                                    };

                                    // Sending the request to the server
                                    request.send();
                                  })
                              }, 1000);
                              })
                              .catch((reject) => {
                              console.error(reject);
                              });
                         }
                        hide_pre();
                    }
                };
                // Sending the request to the server
                request.send();
              }else{
                show_4.classList.remove("ghost");
                show_4.innerHTML = "Select a branch";
              }
              })
             })
             cb.addEventListener("click", () => {
              text_1.textContent = "Creating Branch";
                      getData("create_branch.php")
                  .then((resolve) => {
                  placr.innerHTML = resolve;
                  setTimeout(() => {
            let data_1, data_2, data_3, data_4, data_5, show_4;

            sub = document.getElementById("sub-34");
            data_1 = document.getElementById("branch_name");
            data_2 = document.getElementById("branch_manager");
            data_3 = document.getElementById("branch_status");
            data_4 = document.getElementById("branch_funds");
            data_5 = document.getElementById("branch_location");
            show_4 = document.getElementById("show_4")
            sub.addEventListener("click", () => {
            let request = new XMLHttpRequest();

                // Instantiating the request object
                request.open("GET", 'data_functions.php?d_1='+data_1.value+'&d_2='+data_2.value+'&d_3='+data_3.value+'&d_4='+data_4.value+'&d_5='+data_5.value);
                
                request.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
                // Defining event listener for readystatechange event
                request.onreadystatechange = function() {
                  show_pre();
                    // Check if the request is compete and was successful
                    if(this.readyState === 4 && this.status === 200) {
                        // Inserting the response from server into an HTML element
                        show_4.classList.remove("ghost");
                        show_4.innerHTML = this.responseText;
                        hide_pre();
                    }
                };

                // Sending the request to the server
                request.send();

            })

          }, 1000);
          })
        })
      })
        })
          .catch((reject) => {
          console.error(reject);
          });
        }
        if(forge == 'create_manager'){
          text_1.textContent = "Create manager";
          getData("manager_options.php")
          .then((resolve) => {
          placr.innerHTML = resolve;
          setTimeout(() => {
             cm = document.getElementById("cm");
             let mm = document.getElementById("mm");
             cm.addEventListener("click", () => {

              text_1.textContent = "Creating Manager";
                      getData("create_manager.php")
                  .then((resolve) => {
                  placr.innerHTML = resolve;
                  setTimeout(() => {
            let branch_1, branch_2, branch_3;


            sub = document.getElementById("sub-35");
            branch_1 = document.getElementById("branch_");
            branch_2 = document.getElementById("manager_status");
            branch_3 = document.getElementById("manager_names");

    
            sub.addEventListener("click", () => {
            let request = new XMLHttpRequest();
                // Instantiating the request object
                request.open("GET", 'data_functions.php?b_1='+branch_1.value+'&b_2='+branch_2.value+'&b_3='+branch_3.value);
                request.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
                // Defining event listener for readystatechange event
                request.onreadystatechange = function() {
                  show_pre();
                    // Check if the request is compete and was successful
                    if(this.readyState === 4 && this.status === 200) {
                        // Inserting the response from server into an HTML element
                        show_4.classList.remove("ghost");
                        show_4.innerHTML = this.responseText;
                        hide_pre();
                    }
                };
                // Sending the request to the server
                request.send();
            })
          }, 1000);
                  })
                  .catch((reject) => {
                  console.error(reject);
                  });
        })
         sub_1 = document.querySelector(".sub-1");
        mm.addEventListener("click", () => {
        
              sub_1.classList.toggle("ghost");
              let edit_branch = document.getElementById("edit_manager");
              sub = document.getElementById("sub-47");

              sub.addEventListener("click", () => {
                if(edit_branch.value !== 'Select manager'){
                let request = new XMLHttpRequest();
                // Instantiating the request object
                request.open("GET", 'data_functions.php?edit_manager='+edit_branch.value);
                request.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
                // Defining event listener for readystatechange event
                request.onreadystatechange = function() {
                  show_pre();
                    // Check if the request is compete and was successful
                    if(this.readyState === 4 && this.status === 200) {
                        // Inserting the response from server into an HTML element
                        show_4.classList.remove("ghost");
                        show_4.innerHTML = this.responseText;
                         if(this.responseText == 'Wait...'){
                          text_1.textContent = "Edit manager";
                              getData("edit_manager.php")
                              .then((resolve) => {
                              placr.innerHTML = resolve;
                              setTimeout(() => {
                                  let manager_name = document.getElementById("manager_name");
                                  let branch = document.getElementById("branch");
                                  let manager_status = document.getElementById("manager_status");
                                  sub = document.getElementById("sub-45");
                                  sub.addEventListener("click", () => {
                                    let request = new XMLHttpRequest();
                                    // Instantiating the request object
                                    request.open("GET", 'data_functions.php?mm_1='+manager_name.value+'&mm_2='+branch.value+'&mm_3='+manager_status.value);
                                    request.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
                                    // Defining event listener for readystatechange event
                                    request.onreadystatechange = function() {
                                      show_pre();
                                        // Check if the request is compete and was successful
                                        if(this.readyState === 4 && this.status === 200) {
                                            // Inserting the response from server into an HTML element
                                            show_4.classList.remove("ghost");
                                            show_4.innerHTML = this.responseText;
                                            hide_pre();
                                        }
                                    };

                                    // Sending the request to the server
                                    request.send();
                                  })
                              }, 1000);
                              })
                              .catch((reject) => {
                              console.error(reject);
                              });
                         }
                        hide_pre();
                    }
                };
                // Sending the request to the server
                request.send();
              }else{
                show_4.classList.remove("ghost");
                show_4.innerHTML = "Select a branch";
              }
              })
        })
      })
          })
          .catch((reject) => {
          console.error(reject);
          });
        }
        if(forge == 'manage_accounts'){
          text_1.textContent = "Manage accounts";
          getData("account_options.php")
          .then((resolve) => {
          placr.innerHTML = resolve;
          setTimeout(() => {
             ca = document.getElementById("ca");
             sa = document.getElementById("sa");
             va = document.getElementById("va");
             sub_1 = document.querySelector(".sub-1");

             va.addEventListener("click", () => {
               ghost_modals();
                getData("view_accounts.php")
                .then((resolve) => {
                tm1.innerHTML = resolve;
                setTimeout(() => {
                    let view_info = document.querySelectorAll(".view_info");
                    view_info.forEach(ele => {
                      ele.addEventListener("click", () => {
                      var item_ = ele.getAttribute("data-value");
                      let request = new XMLHttpRequest();
                    // Instantiating the request object
                    request.open("GET", 'data_functions.php?search_1='+item_);
                    request.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
                    // Defining event listener for readystatechange event
                    request.onreadystatechange = function() {
                      show_pre();
                        // Check if the request is compete and was successful
                        if(this.readyState === 4 && this.status === 200) {
                            // Inserting the response from server into an HTML element
                            show_4.classList.remove("ghost");
                            show_4.innerHTML = this.responseText;
                            if(this.responseText == 'Wait...'){
                            setTimeout(() => {
                              ghost_modals();
                              getData("session_user_edit.php")
                                  .then((resolve) => {
                                  tm1.innerHTML = resolve;
                                  setTimeout(() => {
                                    let credit = document.getElementById("credit");
                                    let debit = document.getElementById("debit");
                                    let balance_text = document.querySelector(".balance_text");
                                    let new_balance = currency(balance_text.textContent);
                                    balance_text.textContent = new_balance;

                                   
                                    credit.addEventListener("click", function(){
                                      text_1.textContent = "Credit account";
                                      modal.classList.toggle("ghost");
                                      getData("credit_cc.php")
                                          .then((resolve) => {
                                          placr.innerHTML = resolve;
                                          setTimeout(() => {
                                             let credit_cc = document.getElementById("credit_cc");
                                             sub = document.getElementById("sub-39");

                                             sub.addEventListener("click",() => {
                                              let request = new XMLHttpRequest();
                                                // Instantiating the request object
                                                request.open("GET", 'data_functions.php?credit_cc='+credit_cc.value);
                                                request.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
                                                // Defining event listener for readystatechange event
                                                request.onreadystatechange = function() {
                                                  show_pre();
                                                    // Check if the request is compete and was successful
                                                    if(this.readyState === 4 && this.status === 200) {
                                                        // Inserting the response from server into an HTML element
                                                        show_4.classList.remove("ghost");
                                                        let real = JSON.parse(this.responseText); 
                                                        show_4.innerHTML = real[0].message;
                                                        if(real[0].number){
                                                        balance_text.textContent = real[0].number;
                                                        balance_text = document.querySelector(".balance_text");
                                                        new_balance = currency(balance_text.textContent);
                                                        balance_text.textContent = new_balance;
                                                        }
                                                        hide_pre();
                                                    }
                                                };
                                                // Sending the request to the server
                                                request.send();
                                             })
                                          }, 1000);
                                          })
                                          .catch((reject) => {
                                          console.error(reject);
                                          });
                                    })  



                                    
                                    debit.addEventListener("click", function(){
                                      text_1.textContent = "Debit account";
                                      modal.classList.toggle("ghost");
                                      getData("debit_cc.php")
                                          .then((resolve) => {
                                          placr.innerHTML = resolve;
                                          setTimeout(() => {
                                             let debit_cc = document.getElementById("debit_cc");
                                             sub = document.getElementById("sub-40");

                                             sub.addEventListener("click",() => {
                                              let request = new XMLHttpRequest();
                                                // Instantiating the request object
                                                request.open("GET", 'data_functions.php?debit_cc='+debit_cc.value);
                                                request.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
                                                // Defining event listener for readystatechange event
                                                request.onreadystatechange = function() {
                                                  show_pre();
                                                    // Check if the request is compete and was successful
                                                    if(this.readyState === 4 && this.status === 200) {
                                                        // Inserting the response from server into an HTML element
                                                        show_4.classList.remove("ghost");
                                                        let real = JSON.parse(this.responseText); 
                                                        show_4.innerHTML = real[0].message;
                                                        if(real[0].number){
                                                        balance_text.textContent = real[0].number;
                                                        balance_text = document.querySelector(".balance_text");
                                                        new_balance = currency(balance_text.textContent);
                                                        balance_text.textContent = new_balance;
                                                        }
                                                        hide_pre();
                                                        

                                                    }
                                                };
                                                // Sending the request to the server
                                                request.send();
                                             })
                                          }, 1000);
                                          })
                                          .catch((reject) => {
                                          console.error(reject);
                                          });
                                    }) 


                                  }, 1000);
                                  })
                                  .catch((reject) => {
                                  console.error(reject);
                                  });
                            }, 1000);
                            }
                            hide_pre();
                          }
                    };
                    // Sending the request to the server
                    request.send();
                    })
                    });
                 
                }, 1000);
                })
                .catch((reject) => {
                console.error(reject);
                });
             })
             sa.addEventListener("click", () => {
               sub_1.classList.toggle("ghost");
             })
             sub = document.getElementById("sub-38");
             search_account = document.getElementById("search_account");
             sub.addEventListener("click", () => {
              let request = new XMLHttpRequest();
                    // Instantiating the request object
                    request.open("GET", 'data_functions.php?search_1='+search_account.value);
                    request.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
                    // Defining event listener for readystatechange event
                    request.onreadystatechange = function() {
                      show_pre();
                        // Check if the request is compete and was successful
                        if(this.readyState === 4 && this.status === 200) {
                            // Inserting the response from server into an HTML element
                            show_4.classList.remove("ghost");
                            show_4.innerHTML = this.responseText;
                            if(this.responseText == 'Wait...'){
                            setTimeout(() => {
                              ghost_modals();
                              getData("session_user_edit.php")
                                  .then((resolve) => {
                                  tm1.innerHTML = resolve;
                                  setTimeout(() => {
                                    let credit = document.getElementById("credit");
                                    let debit = document.getElementById("debit");
                                    let balance_text = document.querySelector(".balance_text");
                                    let new_balance = currency(balance_text.textContent);
                                    balance_text.textContent = new_balance;

                                   
                                    credit.addEventListener("click", function(){
                                      text_1.textContent = "Credit account";
                                      modal.classList.toggle("ghost");
                                      getData("credit_cc.php")
                                          .then((resolve) => {
                                          placr.innerHTML = resolve;
                                          setTimeout(() => {
                                             let credit_cc = document.getElementById("credit_cc");
                                             sub = document.getElementById("sub-39");

                                             sub.addEventListener("click",() => {
                                              let request = new XMLHttpRequest();
                                                // Instantiating the request object
                                                request.open("GET", 'data_functions.php?credit_cc='+credit_cc.value);
                                                request.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
                                                // Defining event listener for readystatechange event
                                                request.onreadystatechange = function() {
                                                  show_pre();
                                                    // Check if the request is compete and was successful
                                                    if(this.readyState === 4 && this.status === 200) {
                                                        // Inserting the response from server into an HTML element
                                                        show_4.classList.remove("ghost");
                                                        let real = JSON.parse(this.responseText); 
                                                        show_4.innerHTML = real[0].message;
                                                        if(real[0].number){
                                                        balance_text.textContent = real[0].number;
                                                        balance_text = document.querySelector(".balance_text");
                                                        new_balance = currency(balance_text.textContent);
                                                        balance_text.textContent = new_balance;
                                                        }
                                                        hide_pre();
                                                    }
                                                };
                                                // Sending the request to the server
                                                request.send();
                                             })
                                          }, 1000);
                                          })
                                          .catch((reject) => {
                                          console.error(reject);
                                          });
                                    })  



                                    
                                    debit.addEventListener("click", function(){
                                      text_1.textContent = "Debit account";
                                      modal.classList.toggle("ghost");
                                      getData("debit_cc.php")
                                          .then((resolve) => {
                                          placr.innerHTML = resolve;
                                          setTimeout(() => {
                                             let debit_cc = document.getElementById("debit_cc");
                                             sub = document.getElementById("sub-40");

                                             sub.addEventListener("click",() => {
                                              let request = new XMLHttpRequest();
                                                // Instantiating the request object
                                                request.open("GET", 'data_functions.php?debit_cc='+debit_cc.value);
                                                request.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
                                                // Defining event listener for readystatechange event
                                                request.onreadystatechange = function() {
                                                  show_pre();
                                                    // Check if the request is compete and was successful
                                                    if(this.readyState === 4 && this.status === 200) {
                                                        // Inserting the response from server into an HTML element
                                                        show_4.classList.remove("ghost");
                                                        let real = JSON.parse(this.responseText); 
                                                        show_4.innerHTML = real[0].message;
                                                        if(real[0].number){
                                                        balance_text.textContent = real[0].number;
                                                        balance_text = document.querySelector(".balance_text");
                                                        new_balance = currency(balance_text.textContent);
                                                        balance_text.textContent = new_balance;
                                                        }
                                                        hide_pre();
                                                        

                                                    }
                                                };
                                                // Sending the request to the server
                                                request.send();
                                             })
                                          }, 1000);
                                          })
                                          .catch((reject) => {
                                          console.error(reject);
                                          });
                                    }) 


                                  }, 1000);
                                  })
                                  .catch((reject) => {
                                  console.error(reject);
                                  });
                            }, 2000);
                            }
                            hide_pre();
                          }
                    };
                    // Sending the request to the server
                    request.send();
             })
             ca.addEventListener("click", () => {
             text_1.textContent = "Creating account";
                      getData("create_account.php")
                  .then((resolve) => {
                  placr.innerHTML = resolve;
                  setTimeout(() => {
                    let h_1, h_2, h_3, h_4, h_5, h_6, h_7, h_8, h_9, h_10, h_11, h_12;
                        sub = document.getElementById("sub-36");
                        h_1 = document.getElementById("h_1");
                        h_2 = document.getElementById("h_2");
                        h_3 = document.getElementById("h_3");
                        h_4 = document.getElementById("h_4");
                        h_5 = document.getElementById("h_5");
                        h_6 = document.getElementById("h_6");
                        h_7 = document.getElementById("h_7");
                        h_8 = document.getElementById("h_8");
                        h_9 = document.getElementById("h_9");
                        h_10 = document.getElementById("h_10");
                        h_11 = document.getElementById("h_11");
                        h_12 = document.getElementById("h_12");
                        sub.addEventListener("click", () => {
                        let request = new XMLHttpRequest();
                            // Instantiating the request object
                            request.open("GET", 'data_functions.php?h_1='+h_1.value+'&h_2='+h_2.value+'&h_3='+h_3.value+'&h_4='+h_4.value+'&h_5='+h_5.value+'&h_6='+h_6.value+'&h_7='+h_7.value+'&h_8='+h_8.value+'&h_9='+h_9.value+'&h_10='+h_10.value+'&h_11='+h_11.value+'&h_12='+h_12.value);
                            request.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
                            // Defining event listener for readystatechange event
                            request.onreadystatechange = function() {
                              show_pre();
                                // Check if the request is compete and was successful
                                if(this.readyState === 4 && this.status === 200) {
                                    // Inserting the response from server into an HTML element
                                    show_4.classList.remove("ghost");
                                    show_4.innerHTML = this.responseText;
                                    hide_pre();
                                  }
                            };
                            // Sending the request to the server
                            request.send();
                        })
                  }, 1000);
                  })
                  .catch((reject) => {
                  console.error(reject);
                  });
             })
          }, 1000);
          })
          .catch((reject) => {
          console.error(reject);
          });
        }
        
        if(forge == 'manage_teller'){
          text_1.textContent = "Manage tellers";
          getData("teller_options.php")
          .then((resolve) => {
          placr.innerHTML = resolve;
          setTimeout(() => {
             ca = document.getElementById("ct");
             mt = document.getElementById("mt");
             
             mt.addEventListener("click", () => {
            let sub_1 = document.querySelector(".sub-1");
            sub_1.classList.toggle("ghost");

            sub = document.getElementById("sub-47");
            sub.addEventListener("click", () => {
               let edit_teller  = document.getElementById("edit_teller");
               if(edit_teller.value == 'Select teller'){
                show_4.classList.remove("ghost");
                      show_4.innerHTML = 'Select teller'
              }else{
               let request = new XMLHttpRequest();
              // Instantiating the request object
              request.open("GET", 'data_functions.php?edit_teller='+edit_teller.value);

              request.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
              // Defining event listener for readystatechange event
              request.onreadystatechange = function() {
                show_pre();
                  // Check if the request is compete and was successful
                  if(this.readyState === 4 && this.status === 200) {
                      // Inserting the response from server into an HTML element
                      show_4.classList.remove("ghost");
                      show_4.innerHTML = this.responseText;
                      hide_pre();
                      if(this.responseText == 'Wait...'){
                          getData("edit_teller.php")
                          .then((resolve) => {
                          placr.innerHTML = resolve;
                          let teller_name = document.getElementById("teller_name");
                          let branch = document.getElementById("branch");
                          let teller_status = document.getElementById("teller_status");

                          sub = document.getElementById("sub-45");
                          sub.addEventListener("click", () => {
                            
                            let request = new XMLHttpRequest();
                            // Instantiating the request object
                            request.open("GET", 'data_functions.php?tt_1='+teller_name.value+'&tt_2='+branch.value+'&tt_3='+teller_status.value);
                            request.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
                            // Defining event listener for readystatechange event
                            request.onreadystatechange = function() {
                              show_pre();
                                // Check if the request is compete and was successful
                                if(this.readyState === 4 && this.status === 200) {
                                    // Inserting the response from server into an HTML element
                                    show_4.classList.remove("ghost");
                                    show_4.innerHTML = this.responseText;
                                    hide_pre();
                                  }
                            };
                            // Sending the request to the server
                            request.send();

                          })

                          })
                          .catch((reject) => {
                          console.error(reject);
                          });
                      }
                  }
              };

              // Sending the request to the server
              request.send();

            }
            })
            
           })
             ca.addEventListener("click", () => {
              text_1.textContent = "Creating teller";
                      getData("create_teller.php")
                  .then((resolve) => {
                  placr.innerHTML = resolve;
                  setTimeout(() => {
                  let teller_1, teller_2, teller_3;


                  sub = document.getElementById("sub-37");
                  teller_1 = document.getElementById("branch_");
                  teller_2 = document.getElementById("teller_status");
                  teller_3 = document.getElementById("teller_names");

          
                  sub.addEventListener("click", () => {
                  let request = new XMLHttpRequest();
                      // Instantiating the request object
                      request.open("GET", 'data_functions.php?t_1='+teller_1.value+'&t_2='+teller_2.value+'&t_3='+teller_3.value);
                      request.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
                      // Defining event listener for readystatechange event
                      request.onreadystatechange = function() {
                        show_pre();
                          // Check if the request is compete and was successful
                          if(this.readyState === 4 && this.status === 200) {
                              // Inserting the response from server into an HTML element
                              show_4.classList.remove("ghost");
                              show_4.innerHTML = this.responseText;
                             hide_pre();
                            }
                      };
                      // Sending the request to the server
                      request.send();
                    })
                    }, 1000);
                  })
                  .catch((reject) => {
                  console.error(reject);
                  });
             })
          }, 1000);
          })
          .catch((reject) => {
          console.error(reject);
          });
        }

        if(forge == 'reserve'){
          text_1.textContent = "Manage reserve";
          getData("reserve_options.php")
            .then((resolve) => {
            placr.innerHTML = resolve;
            setTimeout(() => {
              let credit_r = document.getElementById("cr");
              let debit_r = document.getElementById("dr");
              let view_reserve = document.getElementById("vl");
              
              credit_r.addEventListener("click", () =>{
                text_1.textContent = "Credit reserve";
                  getData("credit_reserve.php")
                  .then((resolve) => {
                  placr.innerHTML = resolve;
                  setTimeout(() => {
                     let credit_rr = document.getElementById("credit_rr");
                     sub = document.getElementById("sub-41");

                     sub.addEventListener("click", () => {
                     let request = new XMLHttpRequest();
                              // Instantiating the request object
                              request.open("GET", 'data_functions.php?credit_rr='+credit_rr.value);
                              request.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
                              // Defining event listener for readystatechange event
                              request.onreadystatechange = function() {
                                show_pre();
                                  // Check if the request is compete and was successful
                                  if(this.readyState === 4 && this.status === 200) {
                                      // Inserting the response from server into an HTML element
                                      show_4.classList.remove("ghost");
                                      let real = JSON.parse(this.responseText); 
                                      show_4.innerHTML = real[0].message;
                                      if(real[0].number){
                                      reserve_text.textContent = real[0].number;
                                      new_reserve = currency(reserve_text.textContent);
                                      reserve_text.textContent = new_reserve;
                                      reserve_text.classList.add("flash_green");
                                      setTimeout(() => {
                                         reserve_text.classList.remove("flash_green");
                                      }, 1000);
                                      }
                                      hide_pre();
                                      

                                  }
                              };
                              // Sending the request to the server
                              request.send();
                     })
                  }, 1000);
                  })
                  .catch((reject) => {
                  console.error(reject);
                  });
              })
              debit_r.addEventListener("click", () =>{
                text_1.textContent = "Debit reserve";
                  getData("debit_reserve.php")
                  .then((resolve) => {
                  placr.innerHTML = resolve;
                  setTimeout(() => {
                     let debit_rr = document.getElementById("debit_rr");
                     sub = document.getElementById("sub-42");

                     sub.addEventListener("click", () => {
                     let request = new XMLHttpRequest();
                              // Instantiating the request object
                              request.open("GET", 'data_functions.php?debit_rr='+debit_rr.value);
                              request.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
                              // Defining event listener for readystatechange event
                              request.onreadystatechange = function() {
                                show_pre();
                                  // Check if the request is compete and was successful
                                  if(this.readyState === 4 && this.status === 200) {
                                      // Inserting the response from server into an HTML element
                                      show_4.classList.remove("ghost");
                                      let real = JSON.parse(this.responseText); 
                                      show_4.innerHTML = real[0].message;
                                      if(real[0].number){
                                      reserve_text.textContent = real[0].number;
                                      new_reserve = currency(reserve_text.textContent);
                                      reserve_text.textContent = new_reserve;
                                      reserve_text.classList.add("flash_red");
                                      setTimeout(() => {
                                         reserve_text.classList.remove("flash_red");
                                      }, 1000);
                                      }
                                      hide_pre();
                                      

                                  }
                              };
                              // Sending the request to the server
                              request.send();
                     })
                  }, 1000);
                  })
                  .catch((reject) => {
                  console.error(reject);
                  });
              })
              view_reserve.addEventListener("click", () => {
                text_1.textContent = "Reserve log";
                  getData("reserve_logs.php")
                  .then((resolve) => {
                  placr.innerHTML = resolve;
                  
                  })
                  .catch((reject) => {
                  console.error(reject);
                  });
              })     
            }, 1000);
            })
            .catch((reject) => {
            console.error(reject);
            });
        }
        if(forge == 'record_tranx'){
          text_1.textContent = "Record transaction";
                    getData("tranx_options.php")
          .then((resolve) => {
          placr.innerHTML = resolve;
          setTimeout(() => {
              let credit_a = document.getElementById("ca");
              let debit_a = document.getElementById("da");
              credit_a.addEventListener("click", () => {
                text_1.textContent = "Credit User";
                    getData("credit_tranx.php")
                    .then((resolve) => {
                    placr.innerHTML = resolve;

                      setTimeout(() => {
                        let data_1 = document.getElementById("card_number");
                        let data_2 = document.getElementById("select_teller");
                        let data_3 = document.getElementById("credit_ac");
                        let data_4 = document.getElementById("rec_time");
                        let data_5 = document.getElementById("rec_date");
                        let data_6 = document.getElementById("select_mer");
                        let sub = document.getElementById("sub-90");
                        sub.addEventListener("click",function(){
                        let request = new XMLHttpRequest();
                              // Instantiating the request object
                              request.open("GET", 'data_functions.php?run_1='+data_1.value+'&run_2='+data_2.value+'&run_3='+data_3.value+'&run_4='+data_4.value+'&run_5='+data_5.value+'&run_6='+data_6.value);
                              request.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
                              // Defining event listener for readystatechange event
                              request.onreadystatechange = function() {
                                show_pre();
                                  // Check if the request is compete and was successful
                                  if(this.readyState === 4 && this.status === 200) {
                                      // Inserting the response from server into an HTML element
                                      show_4.classList.remove("ghost");
                                      let real = JSON.parse(this.responseText); 
                                      show_4.innerHTML = real[0].message;
                                      hide_pre();             
                                  }
                              };
                              // Sending the request to the server
                              request.send();

                      }, 1000);
                    })

                    })
                    .catch((reject) => {
                    console.error(reject);
                    });
              })
              debit_a.addEventListener("click", () => {
                text_1.textContent = "Debit User";
                    getData("debit_tranx.php")
                    .then((resolve) => {
                    placr.innerHTML = resolve;


                    setTimeout(() => {
                        let data_1 = document.getElementById("card_number");
                        let data_2 = document.getElementById("select_teller");
                        let data_3 = document.getElementById("debit_ac");
                        let data_4 = document.getElementById("rec_time");
                        let data_5 = document.getElementById("rec_date");
                        let data_6 = document.getElementById("select_mer");
                        let sub = document.getElementById("sub-90");
                        sub.addEventListener("click",function(){
                        let request = new XMLHttpRequest();
                              // Instantiating the request object
                              request.open("GET", 'data_functions.php?deb_1='+data_1.value+'&deb_2='+data_2.value+'&deb_3='+data_3.value+'&deb_4='+data_4.value+'&deb_5='+data_5.value+'&deb_6='+data_6.value);
                              request.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
                              // Defining event listener for readystatechange event
                              request.onreadystatechange = function() {
                                show_pre();
                                  // Check if the request is compete and was successful
                                  if(this.readyState === 4 && this.status === 200) {
                                      // Inserting the response from server into an HTML element
                                      show_4.classList.remove("ghost");
                                      let real = JSON.parse(this.responseText); 
                                      show_4.innerHTML = real[0].message;
                                      hide_pre();             
                                  }
                              };
                              // Sending the request to the server
                              request.send();

                      }, 1000);
                    })
                    })
                    .catch((reject) => {
                    console.error(reject);
                    });
              })
          }, 1000);
          })
          .catch((reject) => {
          console.error(reject);
          });
        }
    })
  })
</script>

<?php
   }else{
    ?>
  <div class="modal-1 cvv" style='background-color:rgba(255,255,255,0.90)!important;'>
  <div class='vmo'><img style='object-fit:cover;width:45px;height:45px;' src="assets/media/icons8-cells-50.png"/> <div class='i009'>Greenville </div></div>
  <div class='seeker'>
    <img src="assets/media/frv.jpg" alt=""> 
    </div>
      <div class="modal-1_cont ">
         <div class="m1c-head" style=' box-shadow: 0px 10px 15px rgba(0, 0, 0, 0.01);'>Signin to account</div>
         <div class="m1c-body" style=' box-shadow: 0px 10px 15px rgba(0, 0, 0, 0.01);'>
         <div class="lineloader"></div>
          <div class="nb0" style='padding:10px'>
          <div class="form">       
          <div class='note note_2 ghost' id='show_4'></div>
              <div class="form-item">
                <input type="text" id="email_address" autocomplete="off" required>
                <label for="email_address">Email address</label>
              </div>
              <div class="form-item">
                <input type="text" id="password" autocomplete="off" required>
                <label for="password">Password</label>
              </div>
              <div class="form-item">          
                  <select class="classic" id='acc_type'>
                    <option disabled selected>Select account</option>
                    <option value="Administrator">Administrator</option>
                    <option value="Manager">Manager</option>
                  </select>
              </div>
              <div id='sub-45' class="b">
                SUBMIT
              </div>
                </div>
          </div>
         </div>
      </div>
    </div>
<script>
  let email_address, password, acc_type, sub, show_4, lineloader = document.querySelector(".lineloader");;
  show_4 = document.getElementById("show_4");
  email_address = document.getElementById("email_address");
  password = document.getElementById("password");
  acc_type = document.getElementById("acc_type");
  sub = document.getElementById("sub-45");
  show_pre = () => {
    lineloader.style.display = "block";
  }
  hide_pre = () => {
    setTimeout(() => {
      lineloader.style.display = "none";
    }, 2000);
  }
  sub.addEventListener("click", () => {
  
  email_address = document.getElementById("email_address");
  password = document.getElementById("password");
  acc_type = document.getElementById("acc_type");
    let request = new XMLHttpRequest();
        request.open("GET", 'data_functions.php?signin_type='+acc_type.value+'&signin_email='+email_address.value+'&signin_password='+password.value);
      request.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
      request.onreadystatechange = function() {
        show_pre();
          if(this.readyState === 4 && this.status === 200) {
              show_4.classList.remove("ghost");
              let real = JSON.parse(this.responseText); 
              show_4.innerHTML = real[0].message;
              if(real[0].message == 'Setting admin session'){
                window.location.reload();
              }else if(real[0].message == 'Setting manager session'){
                window.location.reload();
              }
              hide_pre();
          }
      };
      request.send();
  })

</script>
<?php
   }
?>


</body>
</html>