<html>

    <head>
        <title>AL helper</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, intial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <script src="https://kit.fontawesome.com/ca362f7c3e.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="./css/adminhome.css">
    </head>

    <body>
        <header>
            <div class="logo">
            <h1 class="logo-text"><span>AL</span>Helper</h1>
            </div>
            <i class="fa fa-bars menu-toggle"></i>
            <ul class="nav">
                <li><a href="#">Home</a></li>
                <li><a href="#">About</a></li>
                <li><a href="#">Services</a></li>
                <li>
                    <a href="#">
                   
                        <i class="fas fa-user"></i>
                        ALHelper
                        <i class="fas fa-caret-down " style="font-size: .8em;"></i>
                    </a>
                   
                    
                    <ul>
                        <li><a href="#">Options</a></li>
                        <li><a href="#">Setting</a></li>
                        <li><a href="#" class="logout">Log Out</a></li>    
                    </ul>
                    
                </li>
            </ul>    
           
        </header>
        <?php
            $user=10;
            $videos=20;
            $papers=30;

        ?>
       
       <!--content-->

        <div class=admin-content>
           <!--Home box-->
            <a href="#">
            <div class="homebox">
                
                <div class="name"><h3>User Count</h3></div>
               
               <i class="fa fa-user-o"></i>
            
                <div class="des1">
                 
                <?php
        
        if($user!= " ")
            {
                echo $user;  }

                ?>
             

                </div>
                
             
            </div></a>


            <a href="#">
            <div class="homebox">
             
             <div class="name"><h3>Total papers</h3></div>
             
                 <i class="fa fa-newspaper-o"></i>
               
             <div class="des2">
                    
                 
                 <?php
         
         if($user!= " ")
             {
                 echo $papers;  }
 
                 ?>
              
 
                 </div>
                 

             
         </div></a>
    
        <a href="#">
            <div class="homebox">
                
                <div class="name"><h3>total videos</h3></div>
               
               <i class="fa fa-play"></i>
            
                <div class="des3">
                 
                <?php
        
        if($user!= " ")
            {
                echo $videos;  }

                ?>
                
                </div>
             
            </div></a>

                <!--footer-->
    
     <div class="footer">
         <div class="text">
        <span>AL</span>helper, Copyright &copy; 2020
    </div>
    

     </div>
     


        <!--Jquery-->
       <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <!--custom script-->
        <script src="test.js"></script>

</html>