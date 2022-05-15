<?php 
  session_start();
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Home Page</title>
</head>
<h1 align="center">Rajeev Gandhi Memorial College of Engineering and Technology</h1>
<body bgcolor="#c9d991">
  <h2>Student Information : </h2><br>
  <?php
    $conn = mysqli_connect("localhost", "root", "", "student");
    $user = $_POST['submit'];
    $sql = "SELECT * FROM studentinfo WHERE id = '$user'";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);

    if (mysqli_num_rows($result)>0) {
  ?>

  <!DOCTYPE html>
  <html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
  </head>
  <body>
    <table>
      <tr>
        <th colspan="2">Student Personal Infromation</th>
      </tr>
      <tr>
        <td>Student ID </td>
        <td><?php echo $row['id'] ?></td>
      </tr>
      <tr>
        <td>Student Name</td>
        <td><?php echo $row['name'] ?></td>
      </tr>
      <tr>
        <td>Father Name</td>
        <td><?php echo $row['fname'] ?></td>
      </tr>
      <tr>
        <td>Mother Name</td>
        <td><?php echo $row['name'] ?></td>
      </tr>
      <tr>
        <td>Date of Birt</td>
        <td><?php echo $row['dob'] ?></td>
      </tr>
      <tr>
        <td>Category</td>
        <td><?php echo $row['category'] ?></td>
      </tr>
      <tr>
        <td>Email</td>
        <td><?php echo $row['email'] ?></td>
      </tr>
      <tr>
        <td>EAMCET / BCAT</td>
        <td><?php echo $row['eamcet'] ?></td>
      </tr>
      <tr>
        <td>Aadhar</td>
        <td><?php echo $row['aadhar'] ?></td>
      </tr>
      <tr>
        <td>Address</td>
        <td><?php echo $row['address'] ?></td>
      </tr>
      <tr>
        <td>Tenth Grade</td>
        <td><?php echo $row['tenthg'] ?></td>
      </tr>
      <tr>
        <td>Tenth Marks</td>
        <td><?php echo $row['tenthm'] ?></td>
      </tr>
      <tr>
        <td>Intermediate or Diploma Marks</td>
        <td><?php echo $row['interm'] ?></td>
      </tr>
      <tr>
        <td>Year of passed out</td>
        <td><?php echo $row['yop'] ?></td>
      </tr>
      <tr>
        <td>Parent Mobile</td>
        <td><?php echo $row['pmobile'] ?></td>
      </tr>
      <tr>
        <td>Student Mobile</td>
        <td><?php echo $row['smobile'] ?></td>
      </tr>
      
    </table>
    <br><br><br>
  </body>
  </html>

  <?php
    }
  ?>
  <h3>The Achievements achieved by the stdent</h3><br><br>
  <?php 
    $sql = "SELECT * FROM achievements WHERE id = '$user'";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
    if (mysqli_num_rows($result)>0) {
  ?>
  <!DOCTYPE html>
  <html>
  <body>
    <table>
      <tr>
        <th colspan="2">Achievements</th>
      </tr>
      <tr>
        <td>Gate Score</td>
        <td><?php echo $row['gre'];?></td>
      </tr>
      <tr>
        <td>GRE</td>
        <td><?php echo $row['gre'];?></td>
      </tr>
      <tr>
        <td>Tofel</td>
        <td><?php echo $row['tofel'];?></td>
      </tr>
      <tr>
        <td>Paper Presentation</td>
        <td><?php echo $row['ppt'];?></td>
      </tr>
      <tr>
        <td>Placement Details</td>
        <td><?php echo $row['pd'];?></td>
      </tr>
    </table>
  </body>
  </html>
    <?php
    }
  ?>
  <br><br><br>
  <h3>The attendance of the respective semister</h3>
  <?php 
    $sql = "SELECT * FROM attendence WHERE id = '$user'";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
    if (mysqli_num_rows($result)>0) {
  ?>
  <!DOCTYPE html>
  <html>
  <body>
    <style type="text/css">
              th, td {
          padding: 15px;
          text-align: left;
        }
        th, td {
          border-bottom: 1px solid #ddd;
        }
        tr:nth-child(even) {background-color: #f2f2f2;}
        tr:nth-child(even) {background-color: #f2f2f7;}
        th {
          background-color: #04AA6D;
          color: white;
        }

table {
  border-collapse: collapse;
  width: 90%;
}

th {
  height: 70px;
}
    </style>
    <table >
      <tr>
        <th colspan="2">Attendance</th>
      </tr>
      <tr>
        <td>B Tech I-I</td>
        <td><?php echo $row['one-1'];?></td>
      </tr>
      <tr>
        <td>B Tech I-II</td>
        <td><?php echo $row['one-2'];?></td>
      </tr>
      <tr>
        <td>B Tech II-I</td>
        <td><?php echo $row['two-1'];?></td>
      </tr>
      <tr>
        <td>B Tech II-II</td>
        <td><?php echo $row['two-2'];?></td>
      </tr>

      <tr>
        <td>B Tech III-I</td>
        <td><?php echo $row['three-1'];?></td>
      </tr>
      <tr>
        <td>B Tech III-II</td>
        <td><?php echo $row['three-2'];?></td>
      </tr>
      <tr>
        <td>B Tech IV-I</td>
        <td><?php echo $row['four-1'];?></td>
      </tr>
      <tr>
        <td>B Tech IV-II</td>
        <td><?php echo $row['four-2'];?></td>
      </tr>
    </table>
    <br><br><br>
  </body>

  </html>
    <?php
    }
  ?>
<h3>If Any Certifiactions completed in any domain they are listed below .... </h3>
  <?php 
    $sql = "SELECT * FROM certification WHERE id = '$user'";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
    if (!mysqli_num_rows($result)>0) {
      echo "<h3>There are no certifications</h3>";
  }else{
  ?>
  <!DOCTYPE html>
  <html>
  <body>
    <table>
      <tr>
        <th colspan="2">Certifications Done</th>
      </tr>
      <tr>
        <td>Course</td>
        <td><? echo $row['course']?>;</td>
      </tr>
      <tr>
        <td>
          Name of the college or Inistitue the certificate assured
        </td>
        <td>
          <? echo $row['noc']?>;
        </td>

      </tr>
      <tr>
        <td>Duration</td>
        <? echo $row['duration']?>;
      </tr>

    </table>
    <br><br><br>
  </body>
  </html>
    <?php
    }
  ?>
  <?php 
    $sql = "SELECT * FROM curriculam WHERE id = '$user'";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
    if (!mysqli_num_rows($result)>0) {
      echo "<h3>There are no curriculum and co-curriculam activities</h3>";
  }else{
  ?>
  <!DOCTYPE html>
  <html>
  <body>
    <table>
      <tr>
        <th colspan="2">Curriculam and CoCurriculam Activities</th>
      </tr>
      <tr>
        <td>Title of the Technical Paper</td>
        <td><? echo $row['course']?>;</td>
      </tr>
      <tr>
        <td>
          Name of the college or Inistitue the certificate assured
        </td>
        <td>
          <? echo $row['ttp']?>;
        </td>

      </tr>
      <tr>
        <td>Name and Address of the college</td>
        <? echo $row['noc']?>;
      </tr>
      <tr>
        <td>Prize</td>
        <? echo $row['prize']?>;
      </tr>

    </table>
    <br><br><br>
  </body>
  </html>
    <?php
    }
  ?>  


  <?php 
    $sql = "SELECT * FROM certification WHERE id = '$user'";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
    if (!mysqli_num_rows($result)>0) {
      echo "<h3>There are no certifications</h3>";
  }else{
  ?>
  <!DOCTYPE html>
  <html>
  <body>
    <table>
      <tr>
        <th colspan="2">Certifications Done</th>
      </tr>
      <tr>
        <td>Course</td>
        <td><? echo $row['course']?>;</td>
      </tr>
      <tr>
        <td>
          Name of the college or Inistitue the certificate assured
        </td>
        <td>
          <? echo $row['noc']?>;
        </td>

      </tr>
      <tr>
        <td>Duration</td>
        <? echo $row['duration']?>;
      </tr>

    </table>
    <br><br><br>
  </body>
  </html>
    <?php
    }
  ?>


  <?php 
    $sql = "SELECT * FROM problems WHERE id = '$user'";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
    if (!mysqli_num_rows($result)>0) {
      echo "<h3>There are no problem for student side</h3>";
  }else{
  ?>
  <!DOCTYPE html>
  <html>
  <style type="text/css">
        input[type=button], input[type=submit], input[type=reset] {
  background-color: #577861;
  border: none;
  color: white;
  padding: 16px 32px;
  text-decoration: none;
  margin: 4px 2px;
  cursor: pointer;
}
  </style>

      <h3>Problems faced by the student</h3>
      <? echo $row['problem']; ?>  
    <br><br><br>
  </html>
    <?php
    }
  ?>



  
  <html>
  
  <body>
    <h3 style="color: darkgreen;">Give Solutions for posted problems and Suggestions to improve his knowlege</h3>
    <form>
      <textarea name="Solutions" id = 'Solutions' style="color:rebeccapurple;" rows="5" cols="100"></textarea><br><br>
      <input type="submit" name="submit" value="submit">
    </form>  
  </body>
  </html>








</body>
</html>
  