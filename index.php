<!doctype html>
<html>
    <head>
    
        <title>Voting Platform</title>
    <link rel="stylesheet" href="style.css"
</head>
<body>
	<div style="background: black; color: white; text-align: center; width: 100; height:300; "><h2><b>Vote Who Is The Most Beautiful!!!</b></h2></div>

<div class="container">
    


 <form action = "index.php" method  = "post" align="centre">

     <img src="image/Anjali.jpg" 
      width="180" 
      height="180"> 
     &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
             
     <img src="image/Subha.jpg"
       width="180"
        height="180">
     &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

      <img src="image/Prakriti.jpg"
        width="180"
         height="180">
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                   
     <img src="image/Divya.jpg" 
      width="180" 
      height="180">

      <br>
      <br>
&nbsp;
 <input type="submit" name="Anjali" value="Vote for Anjali" />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

<input type="submit" name="Subha" value="Vote for Subha"/>

&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp
<input type="submit" name="Prakriti" value="Vote for Prakriti"/>
&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type="submit" name="Divya" value="Vote for Divya"/>


      <br>
<br>
<br>

                 
                  

      <img src="image/Utsukta.jpg"
        width="180" 
        height="180">
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;


       <img src="image/Oshin.jpg"
         width="180"
          height="180">
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

        <img src="image/Bidhya.jpg" 
         width="180" 
         height="180">
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

         <img src="image/Dipika.jpg" 
         width="180" 
         height="180">

<br>
<br>


&nbsp;
<input type="submit" name="Utsukta" value="Vote for Utsukta"/>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;
<input type="submit" name="Oshin" value="Vote for Oshin"/>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type="submit" name="Bidhya" value="Vote for Bidhya"/>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type="submit" name="Dipika" value="Vote for Dipika"/>




</form>

<?php 

$con = mysqli_connect("localhost","root","","mytest");

if(isset($_POST['Anjali']))
{   

    $vote_Anjali = "update votes set Anjali = Anjali+1";

    $run_Anjali = mysqli_query($con, $vote_Anjali);



    if($run_Anjali)
    {
    echo "<h2 align='center'> Your vote has been successfully cast for Anjali! 
        <br>Let's see who'll win!!!
         </h2>";
    echo"<h2 align='center'><a href='index.php?results'>View Results </a> </h2>";
    }
}   



if(isset($_POST['Subha']))
{   

    $vote_Subha = "update votes set Subha = Subha+1";

    $run_Subha = mysqli_query($con, $vote_Subha);

 

    if($run_Subha){
    echo "<h2 align='center'> Your vote has been successfully cast for Subha!
     
<br>Let's see who'll win!!! 
 </h2>";
    echo"<h2 align='center'><a href='index.php?results'>View Results </a> </h2>";
    }

}   


if(isset($_POST['Prakriti']))
{   

    $vote_Prakriti = "update votes set Prakriti = Prakriti+1";

    $run_Prakriti = mysqli_query($con, $vote_Prakriti);

 

    if($run_Prakriti){
    echo "<h2 align='center'> Your vote has been successfully cast for Prakriti!
   
<br>Let's see who'll win!!!
     </h2>";
    echo"<h2 align='center'><a href='index.php?results'>View Results </a> </h2>";
    }

}

if(isset($_POST['Divya']))
{   

    $vote_Divya = "update votes set Divya = Divya+1";

    $run_Divya = mysqli_query($con, $vote_Divya);

 

    if($run_Divya){
    echo "<h2 align='center'> Your vote has been successfully cast for Divya!
 
<br>Let's see who'll win!!!
     </h2>";
    echo"<h2 align='center'><a href='index.php?results'>View Results </a> </h2>";
    }

}


if(isset($_POST['Utsukta']))
{   

    $vote_Utsukta = "update votes set Utsukta = Utsukta+1";

    $run_Utsukta = mysqli_query($con, $vote_Utsukta);



    if($run_Utsukta)
    {
    echo "<h2 align='center'> Your vote has been successfully cast for Utsukta! 
        <br>Let's see who'll win!!!
         </h2>";
    echo"<h2 align='center'><a href='index.php?results'>View Results </a> </h2>";
    }
}   



if(isset($_POST['Oshin']))
{   

    $vote_Oshin = "update votes set Oshin = Oshin+1";

    $run_Oshin = mysqli_query($con, $vote_Oshin);

 

    if($run_Oshin){
    echo "<h2 align='center'> Your vote has been successfully cast for Oshin!
     
<br>Let's see who'll win!!! 
 </h2>";
    echo"<h2 align='center'><a href='index.php?results'>View Results </a> </h2>";
    }

}   


if(isset($_POST['Bidhya']))
{   

    $vote_Bidhya = "update votes set Bidhya = Bidhya+1";

    $run_Bidhya = mysqli_query($con, $vote_Bidhya);

 

    if($run_Bidhya){
    echo "<h2 align='center'> Your vote has been successfully cast for Bidhya!
   
<br>Let's see who'll win!!!
     </h2>";
    echo"<h2 align='center'><a href='index.php?results'>View Results </a> </h2>";
    }

}

if(isset($_POST['Dipika']))
{   

    $vote_Dipika= "update votes set Dipika = Dipika+1";

    $run_Dipika = mysqli_query($con, $vote_Dipika);

 

    if($run_Dipika){
    echo "<h2 align='center'> Your vote has been successfully cast for Dipika!
 
<br>Let's see who'll win!!!
     </h2>";
    echo"<h2 align='center'><a href='index.php?results'>View Results </a> </h2>";
    }

}






//New Section Started
if(isset($_GET['results']))
{
    $get_votes = "select * from votes";

    $run_votes = mysqli_query($con, $get_votes);

    $row_votes = mysqli_fetch_array ($run_votes);

           $Anjali = $row_votes['Anjali'];
            $Subha = $row_votes['Subha'];
             $Prakriti = $row_votes['Prakriti'];
              $Divya = $row_votes['Divya'];
              $Utsukta = $row_votes['Utsukta'];
              $Oshin = $row_votes['Oshin'];
              $Bidhya = $row_votes['Bidhya'];
              $Dipika = $row_votes['Dipika'];

    $count = $Anjali+$Subha+$Prakriti+$Divya+$Utsukta+$Oshin+$Bidhya+$Dipika;

    $per_Anjali = round($Anjali * 100 / $count) . "%";
    $per_Subha = round($Subha * 100/$count)  . "%";
    $per_Prakriti = round($Prakriti * 100/$count) . "%";
    $per_Divya = round($Divya * 100/$count) . "%";

    $per_Utsukta = round($Utsukta * 100/$count) . "%"; 
    $per_Oshin = round($Oshin * 100/$count) . "%";  
    $per_Bidhya = round($Bidhya * 100/$count) . "%";  
    $per_Dipika = round($Dipika * 100/$count) . "%";   



    echo "
    <div style = 'background: orange' padding: 10px; text-align:centre;>
            <centre>
                 <h2>Updated Result:</h2>

            <p style= 'background: black; color: white; paddinng; 10px; height:'300px'; width:'500px;'>
                <b> Anjali :  </b> $Anjali ($per_Anjali)<br>
                       <b> Subha :  </b> $Subha ($per_Subha)<br>
                       <b> Prakriti :  </b> $Prakriti ($per_Prakriti)<br>
                       <b> Divya :  </b> $Divya ($per_Divya)<br>
                    <b> Utsukta :  </b> $Utsukta ($per_Utsukta)<br>
                       <b> Oshin :  </b> $Oshin ($per_Oshin)<br>
                       <b> Bidhya :  </b> $Bidhya ($per_Bidhya)<br>
                       <b> Dipika :  </b> $Dipika ($per_Dipika)
            </p>

         </centre>


    </div>
  




    ";




}       

 ?>





 
    </div>

<br><br><br><br><br><br><br><br>Created by:<b> P'1' </b> (Pneumonoultramicroscopicsilicovolcanokoniosis)
</body>
</html>
