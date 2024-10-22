<!DOCTYPE html>
<html lang="en">
<head>
  <title>Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0&icon_names=search" /> 
  <script src="/en/js.js"></script>

</head>
<body>

<style>
    body{
       margin:0px;
       background: #F2F2F2 ;
       font-family: Tahoma, Verdana, sans-serif;

    }
    .navbar{
      background: #F2F2F2 ;
      padding:20px;
        color:white;
        position: fixed;
        width: 100%;
    }
    .navbar .container-fluid{
        display: flex;
        justify-content:space-around;
        
    }
    .navbar .navbar-brand{
        color:white;
    }
    .material-symbols-outlined{
        font-size:13px;
    }

    .row .maincontent .text-content{
          margin:auto;
          justify-content:center;
          width: 40%;
          padding-top:20px;
    }

    .row .maincontent .text-xasd{
        font-size:20px;
    }
    .content{
        padding:20px;
    }
    .content .moreform {
        margin:auto;
        justify-content:center;
        float:right;
        text-align:center;
        margin:auto;
        display: inline-block;
        position: fixed;
        top:100px;
    }
    .content .moreform h1{
        font-size:20px;
        padding-right:96px;
        padding-bottom:20px;
        color:#f47938;
    }
    .thumbnail .content-side .wp-block-image  img{
         width: 120px;
         height:100px;
         border-radius:10px;
         
    }
    .content .thumbnail{
        display:flex;
        width: 70%;
        margin-left:100px;
    }
    .side-content{
        float:right;
        width: 1020px;
    }
    .container .side-content{
        margin:auto;
        width: 300px;
        text-align:center;
        margin-right:100px;
        margin-top:-800px;
        height:400px;
        color:black;
    }
    .content-side{
        display:flex;
        width: 100%;
    }
    .content-side h1{
        padding-top:20px;
        width: 160px;
    }
    
    .container .row-adkgs{
        position:fixed;
        margin-top:-809px;
        border:1px solid black;
        width: 300px;
        height:400px;
     }
     .content-conts{
        color:black;
     }
     .footer{
        background:#292525;
        height:30px;
     }
     .texts{
       border-right: 1px solid #f47938;
       height:90px;
       border-radius:10px;
      
     }


     /*slide*/
    
      .row  .text-content .gallery {
            background: #EEE;
            height:300px;
            display: flex;
        }
       
       .gallery-cell {
         width: 30%;
         height: 200px;
         margin-right: 10px;

       }
       
       /* cell number */
       .gallery-cell:before {
         display: block;
         text-align: center;
         line-height: 200px;
         font-size: 80px;
         color: white;
       }
       .gallery-cell img{
         padding:2px;
         width: 100%;
         height:70%;
       }
       .gallery-cell p{
          color:black;
          height:50%;
       }
       .flickity-page-dots{
         display:none;
       }
     /*slide*/


     
  .flickity-enabled {
    position: relative;
  }
  
  .flickity-enabled:focus { outline: none; }
  
  .flickity-viewport {
    overflow: hidden;
    position: relative;
    height: 100%;
  }
  
  .flickity-slider {
    position: absolute;
    width: 100%;
    height: 100%;
  }
  
  /* draggable */
  
  .flickity-enabled.is-draggable {
    -webkit-user-select: none;
       -moz-user-select: none;
        -ms-user-select: none;
            user-select: none;
  }
  
  .flickity-enabled.is-draggable .flickity-viewport {
    cursor: move;
    cursor: -webkit-grab;
    cursor: grab;
  }
  
  .flickity-enabled.is-draggable .flickity-viewport.is-pointer-down {
    cursor: -webkit-grabbing;
    cursor: grabbing;
  }
  
  /* ---- previous/next buttons ---- */
  
  .flickity-prev-next-button {
    position: absolute;
    top: 50%;
    width: 44px;
    height: 44px;
    border: none;
    border-radius: 50%;
    background: white;
    background: hsla(0, 0%, 100%, 0.75);
    cursor: pointer;
    /* vertically center */
    -webkit-transform: translateY(-50%);
        -ms-transform: translateY(-50%);
            transform: translateY(-50%);
  }
  
  .flickity-prev-next-button:hover { background: white; }
  
  .flickity-prev-next-button:focus {
    outline: none;
    box-shadow: 0 0 0 5px #09F;
  }
  
  .flickity-prev-next-button:active {
    filter: alpha(opacity=60); /* IE8 */
    opacity: 0.6;
  }
  
  .flickity-prev-next-button.previous { left: 10px; }
  .flickity-prev-next-button.next { right: 10px; }
  /* right to left */
  .flickity-rtl .flickity-prev-next-button.previous {
    left: auto;
    right: 10px;
  }
  .flickity-rtl .flickity-prev-next-button.next {
    right: auto;
    left: 10px;
  }
  
  .flickity-prev-next-button:disabled {
    filter: alpha(opacity=30); /* IE8 */
    opacity: 0.3;
    cursor: auto;
  }
  
  .flickity-prev-next-button svg {
    position: absolute;
    left: 20%;
    top: 20%;
    width: 60%;
    height: 60%;
  }
  
  .flickity-prev-next-button .arrow {
    fill: #333;
  }
  
  /* color & size if no SVG - IE8 and Android 2.3 */
  .flickity-prev-next-button.no-svg {
    color: #333;
    font-size: 26px;
  }
  
  /* ---- page dots ---- */
  
  .flickity-page-dots {
    position: absolute;
    width: 100%;
    bottom: -25px;
    padding: 0;
    margin: 0;
    list-style: none;
    text-align: center;
    line-height: 1;
  }
  
  .flickity-rtl .flickity-page-dots { direction: rtl; }
  
  .flickity-page-dots .dot {
    display: inline-block;
    width: 10px;
    height: 10px;
    margin: 0 8px;
    background: #333;
    border-radius: 50%;
    filter: alpha(opacity=25); /* IE8 */
    opacity: 0.25;
    cursor: pointer;
  }
  
  .flickity-page-dots .dot.is-selected {
    filter: alpha(opacity=100); /* IE8 */
    opacity: 1;
  }


    @media only screen and (max-width: 1610px) {
       .content .moreform{
          overflow-x:scroll;
          padding:30px;

       }
       .moreform .thumbnail{
           margin-left:50px;
           width: 300px;

       }
      .container .row-adkgs{
        margin-top:-809px;
        border:1px solid black;
        width: 250px;
        height:400px;
     }
    }
    @media only screen and (max-width: 600px) {

        .content .moreform{
            overflow-x:scroll;
            padding:30px;
            width: 85%;
            margin:auto;
            margin-bottom:60px;

        }
        .moreform .thumbnail .texts{
            width: 250px;
            padding:5px;
        }
        .moreform{
           margin-bottom:60px;
        }
        .container .row-adkgs{
              border:1px solid black;
              width: 300px;
              height:400px;
              position: static;
              display:none;

        }      
        
         .content .moreform {
               margin:auto;
               justify-content:center;
               float:right;
               text-align:center;
               margin:auto;
               display: inline-block;
               top:100px;
               position: static;
     
         }
    }
    @media only screen and (max-width: 600px) {
        .container .row-adkgs{
              border:1px solid black;
              width: 300px;
              height:400px;
              position: static;
              display:none;

        }      
         .content{


        }
         .content .moreform {
               margin:auto;
               justify-content:center;
               float:right;
               text-align:center;
               margin:auto;
               display: inline-block;
               top:100px;
               position: static;
             
         }
         .moreform .thumbnail {
              margin-left:5px;
              width: 300px;
         }
         .row .maincontent .text-content{
                width: 80%;
                margin:auto;

         }
   
    }
    @media only screen and (max-width: 1500px) {
        .container .row-adkgs{
              border:1px solid black;
              width: 300px;
              height:400px;
              position: static;
              display:none;

        }      
        
         .content .moreform {
               margin:auto;
               justify-content:center;
               float:right;
               text-align:center;
               margin:auto;
               display: inline-block;
               top:100px;
     
         }
         .row .maincontent .text-content{
            width: 50%;
            margin-right:102px;

         }
   
    }
    @media only screen and (max-width: 1100px) {
        .container .row-adkgs{
              border:1px solid black;
              width: 300px;
              height:400px;
              position: static;
              display:none;
        }      
         .row .content .moreform {
               margin:auto;
               justify-content:center;
               float:right;
               text-align:center;
               margin:auto;
               position: static;
               display:flex;
               margin-top:100px;
         }
         .row .maincontent .text-content{
                width: 80%;
                margin:auto;


         }
   
    }
    @media only screen and (max-width: 1200px) {
        .container .row-adkgs{
              border:1px solid black;
              width: 300px;
              height:400px;
              position: static;
              display:none;
        }      
         .row .content .moreform {
               margin:auto;
               justify-content:center;
               float:right;
               text-align:center;
               margin:auto;
               position: static;
               display:flex;
               margin-top:100px;

         }
         .row .maincontent .text-content{
                width: 60%;
                margin:auto;


         }
   
    }
    @media only screen and (max-width: 500px) {
        .container .row-adkgs{
              border:1px solid black;
              width: 300px;
              height:400px;
              position: static;
              display:none;

        }      
        
         .content .moreform {
               margin:auto;
               justify-content:center;
               float:right;
               text-align:center;
               margin:auto;
               display: inline-block;
               top:100px;
               position: static;
         }
         .row .maincontent .text-content{
                width: 80%;
                margin:auto;


         }
         .text-content .wp-block-image img{
              width: 100%;
              height: 100%;
    }
   
    }

    .content-side img{
        width:100px;
        height:100px;
        padding:5px;

    }

    .text-content img{
        width: 100%;
        height:100%;
        text-align:center;
        margin:auto;
        padding:10px;
    }

    .navbar{
        background:#f5f5f5;
        padding:20px;
        color:white;
        position: fixed;
        width: 100%;
        margin-top:0px;
        border-bottom:1px solid grey;
        color: #f47938;
    }

    .collapse{
      border:1px solid #f47938;
      padding:10px;
      border-radius:101px;
    }
    .collapse .btn{
      border:transparent;
      font-size:15px;
      color:#f47938;
    }
    .collapse .span{
      color:#f5f5f5;

    }
    .collapse .form-control{
      border:1px solid transparent;
      background:#f5f5f5;
    }
    .content  .moreform h1{
        font-size:18px;
    }
    .according{
    margin:auto;
    border:1px solid black;
    height:100px;
    justify-content:center;
    width: 40%;
    margin-top:50px;
    
  } 
  .searchs{
     border:1px solid transparent;
     background: #F2F2F2 ;
  }
  .row  .center-content{
     margin:auto;
  }
  .side-content  .row-adkgs{
      float:right;
      margin-right:200px;
      margin-top:-110%;
      height:300px;
      width: 20%;
      border:1px solid black;
  }
  .side-content  img{
      height:200%;
      width: 100%;
      border:1px solid black;
  }
  .footer .content-footer{
      margin:auto;
      text-align:center;
      color:white;
      padding-top:20px;
      color:white;
  }
  .footer .content-footer a{
      color:white;
  }
  .footer .content-footer .cont {
       padding-bottom:20px;
  }

    @media screen and (max-width: 900px) {
      .row .maincontent .text-content {
              width: 370px;
              margin: auto;
       }
      .container{
           padding:20px;
      }
      .side-content  .row-adkgs{
            display:none;
            float:right;
            margin-right:200px;
            margin-top:-110%;
            height:300px;
            width: 20%;
            border:1px solid black;
        }
        .content .moreform{
          width: 200px;
        }
        .container .moreform{
           margin:auto;
           overflow-x:scroll;
           width: 100%;
        }
        .content .thumbnail .texts{
             width: 400px;
         }
        .content{
            margin:auto;
            overflow-y:scroll;
        }
        .content .moreform h1{
              display:none;
              margin-left:500px;
        } 
        .container .moreform .fsti-line{
            margin-left:200px;
        }
        .row .maincontent .text-content {
              width: 400px;
              margin: auto;
        }
    }
    @media screen and (max-width: 500px) {
       .maincontent .text-content{
           width: 100%;
       }
      .side-content  .row-adkgs{
            display:none;
            float:right;
            margin-right:200px;
            margin-top:-110%;
            height:300px;
            width: 20%;
            border:1px solid black;
        }
        .container .moreform{
           margin:auto;
           overflow-x:scroll;
           width: 100%;
        }
     
        .content{
            margin:auto;
            overflow-y:scroll;
        }
        .content .moreform h1{
              display:block;
        } 
        .container .moreform .fsti-line{
            margin-left:550px;
        }
    }
    @media screen and (max-width: 1505px) {
      
      .side-content  .row-adkgs{
            display:none;
            float:right;
            margin-right:200px;
            margin-top:-110%;
            height:300px;
            width: 20%;
            border:1px solid black;
        }
        .container .moreform{
           margin:auto;
           overflow-x:scroll;
           width: 100%;
        }
        .content{
            margin:auto;
            overflow-y:scroll;
        }
        .content .moreform h1{
              display:none;
              margin-left:500px;
        } 
      }
      @media screen and (max-width: 601px) {
        .row .maincontent .text-content {
              width: 370px;
              margin: auto;
        }
        .container .according{
              width: 370px;
              margin: auto;
        }
        .side-content  .row-adkgs{
              display:none;
              float:right;
              margin-right:200px;
              margin-top:-110%;
              height:300px;
              width: 20%;
              border:1px solid black;
        }
         
      }
      @media screen and (max-width: 390px) {
        .row .maincontent .text-content {
              width: 300px;
              margin: auto;
        }
        .container .according{
          width: 300px;
          margin: auto;
        }
        .side-content  .row-adkgs{
              display:none;
              float:right;
              margin-right:200px;
              margin-top:-110%;
              height:300px;
              width: 20%;
              border:1px solid black;
        }
         
      }

      
      </style>
      
<nav class="navbar navbar-inverse">
      
          <div class="container-fluid">

         <div class="navbar-header">
            <a class="navbar-brand" style="color: #f47938; font-size:30px; text-decoration:none;" href="http://site-senses/en/">Gsense</a>
         </div>

         <div class="collapse navbar-collapse" id="myNavbar">
           <form class="navbar-form navbar-right" role="search" menthod="POST" action="http://site-senses/en/" >
             <div class="form-group input-group">
               <input type="text" class="searchs" value="" name="s" id="s" placeholder="Search...">
               <span class="input-group-btn">
                  <button class="btn" type="submit">
                      <span class="material-symbols-outlined">
                           search
                      </span>
                  </button>
               </span>        
             </div>
           </form>
         </div>

    </div>

</nav>
  
<div class="container">    

  <div class="row">

      <?php echo get_sidebar(); ?>

      <div class="maincontent">

          <div class="according">
                 <img  src="/en/wp-content/themes/stillalive/img/" alt="" srcset="">
          </div>
       
         <?php if ( have_posts() ) : while( have_posts()  ) : the_post(); ?> 
            <div class="text-content">

                <p class="blog-date"><?php the_time( 'l, F jS, Y' ); ?></p> 

                    <a href="<?php the_permalink();?>"> <h1><?php the_title(); ?></h1></a>
                        <?php the_content(); ?>

                           </div>
                              <div class="thumd-under">
                              </div>
                           </div>
          
                 <?php endwhile; endif; ?>
                    <div class="according">
                         <img  src="/en/wp-content/themes/stillalive/img/" alt="" srcset="">
                                  s
                    </div>

            </div>
           
      </div>
       
      <div class="side-content"> 
            <aside class="row-adkgs">
                <img  src="/en/wp-content/themes/stillalive/img/Screenshot 2024-10-19 000916.png" alt="" srcset="">
            </aside>
      </div>

  </div>

</div>


<footer class="footer" style="margin-top:20px; height:100px;" >

    <div class="content-footer"> 

       <div class="cont">
            <a href="http://site-senses/en/privacy/"> Terms of Service | Privacy Policy</a>
       </div>

       <div>
           <a><img  style="width:30px;" src="/en/wp-content/themes/stillalive/img/youtube.png" alt="" srcset=""></a>
       </div>
     
    </div>
   
</footer>


</body>
</html>