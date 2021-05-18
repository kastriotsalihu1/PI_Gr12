<?php
require_once("dbConfig.php");
$con= dbConfig::connect();



?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <link rel="stylesheet" href="styles/app_grades.css" />
  
  <link rel="stylesheet" href="styles/app_navigation.css" />
  <link rel="stylesheet" href="styles/cardInformation.css" />

  <link href="dependencies/fontawesome/css/all.css" rel="stylesheet" />
  <!-- Simple css to remove the watermark from the hosting website -->
  <link rel="stylesheet" href="styles/removewatermark.css">
  <!-- Simple css to remove the watermark from the hosting website -->
  <title>Grades</title>
</head>

<body>
  <div id="mask"> </div>

  <div id="header"></div>

  <div id="container">
    <!-- side navigation menu -->
    <div id="sidebar"></div>
    <main>

      <div id="box_1" class="card">

        <div class="information">
          <div class="icon"><i class="fa fa-info" aria-hidden="true"></i></div>
          <div class="contents">
            <h2>
             In this box you can save your grades and your rated assignments. Select and choose your grade for each subject.
            </h2>
          </div>
        </div>

        <h1>Grades</h1>
        <input id="subjects" type="text" placeholder="Subjects" />
        <ul class="scroll">
          <li>
            <span><i class="fa fa-trash"></i></span>Internet<select id="grades">
              <option>6</option>
              <option>7</option>
              <option>8</option>
              <option>9</option>
              <option>10</option>
            </select>
          </li>
          <li>
            <span><i class="fa fa-trash"></i></span>Signals and Systems<select id="grades">
              <option>6</option>
              <option>7</option>
              <option>8</option>
              <option>9</option>
              <option>10</option>
            </select>
          </li>
          <li>
            <span><i class="fa fa-trash"></i></span>OOP<select id="grades">
              <option>6</option>
              <option>7</option>
              <option>8</option>
              <option>9</option>
              <option>10</option>
            </select>
          </li>
          <li>
            <span><i class="fa fa-trash"></i></span>Electronics<select id="grades">
              <option>6</option>
              <option>7</option>
              <option>8</option>
              <option>9</option>
              <option>10</option>
            </select>
          </li>
          <li>
            <span><i class="fa fa-trash"></i></span>Database<select id="grades">
              <option>6</option>
              <option>7</option>
              <option>8</option>
              <option>9</option>
              <option>10</option>
            </select>
          </li>
          <li>
            <span><i class="fa fa-trash"></i></span>Mathematics<select id="grades">
              <option>6</option>
              <option>7</option>
              <option>8</option>
              <option>9</option>
              <option>10</option>
            </select>
          </li>
        </ul>
      </div>

      <div id="box_2" class="card">

        <div class="information">
          <div class="icon"><i class="fa fa-info" aria-hidden="true"></i></div>
          <div class="contents">
            <h2>
              This is Upload Literature. Here you can save all your university literature organizing the files by the subject and the importance it has.
            </h2>
          </div>
        </div>
        <form id="shtoLiteraturen">
        <div>
          <h1 id="shtoLiterature">Upload literature</h1>
          <select name="lenda" class="objects" id="lendet" >
            <option value="Subject">Subject</option>
            <option value="Database">Database</option>
            <option value="OOP">OOP</option>
            <option value="Mathematics">Mathematics</option>
            <option value="SignalsandSystems">Signals and Systems</option>
            <option value="Electronics">Electronics</option>
            <option value="Internet">Internet</option>
          </select>
          <select name="lloji" id="lloji" class="objects">
            <option value="Type">Type</option>
            <option value="Lectures">Lectures</option>
            <option value="Excercises">Excercises</option>
            <option value="Books">Books</option>
            <option value="Exams">Exams</option>
            <option value="Others">Others</option>
          </select>
          <input type="file"  id="file" name="file"/>
        </div>
        <!--multiple-->
        <button  id="shtoButton" type="submit">Add Literature</button>
        </form>
      </div>
      <div id="box_3"class="card">
        <div class="information">
          <div class="icon"><i class="fa fa-info" aria-hidden="true"></i></div>
          <div class="contents">
            <h2>
             This is your literature you have upload sorted and organized by the subject you have choosen. Here you can see what subject, type, name and data your literature is.
            </h2>
          </div>
        </div>
        <h1>Show literature</h1>
        <select id="selectLiteraturen">
          <option value="Mathematics">Mathematics</option>
          <option value="Electronics">Electronics</option>
          <option value="SignalsandSystems">Signals and Systems</option>
          <option value="Internet">Internet</option>
          <option value="Database">Database</option>
          <option value="OOP">OOP</option>
        </select>
        
        <div class="table scrollbar">
          <table id="tabela" cellpadding="4" cellspacing="5">
          </table>
        </div>
        
      </div>


  </div>

  </main>
  <!--<script src="scripts/jquery.js"></script>-->
  <script
  src="https://code.jquery.com/jquery-3.6.0.js"
  integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
  crossorigin="anonymous"></script>
  <script src="scripts/navigation.js"></script>
  <script src="scripts/load.js"></script>
  <script src="scripts/cardInformation.js" ></script>
  <script src="scripts/main.js"></script>
  <script src="scripts/grades.js"></script>
  <script>
  $("#shtoLiteraturen").on("submit",function (event) {
    event.preventDefault();
    var emri = $("#file")[0].files[0].name;
    var lenda = $("#lendet").find(":selected").val();
    var lloji = $("#lloji").find(":selected").val();

    console.log(emri);
    console.log(lenda);
    console.log(lloji);


   
    const materiali = {
      lenda: lenda,
      emriiFile: emri,
      lloji: lloji,
      myDate: myDate,
    };
   /*
    if (lenda === "Mathematics") {
      matFiles.push(materiali);
    } else if (lenda === "SignalsandSystems") {
      SinjaleSistemeFiles.push(materiali);
    } else if (lenda === "OOP") {
      pooFiles.push(materiali);
    } else if (lenda === "Electronics") {
      elektronikaFiles.push(materiali);
    } else if (lenda === "Database") {
      databazeFiles.push(materiali);
    } else if (lenda === "Internet") {
      internetFiles.push(materiali);
    }
*/
  $("#lendet option:selected").prop("selected", false);
  $("#lloji option:selected").prop("selected", false);
  //shfaqMaterialin(lenda);
  $("#file").val(null);
}); 

  </script> 
</body>
</html>

