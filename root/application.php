<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <link rel="stylesheet" href="styles/app_home.css" />
  <link rel="stylesheet" href="styles/app_navigation.css" />

  <link rel="stylesheet" href="styles/cardInformation.css" />
  <!-- styles -->
  <link rel="stylesheet" href="styles/home_todo.css" />
  <link rel="stylesheet" href="styles/home_quotes.css" />
  <link rel="stylesheet" href="styles/home_grades.css" />
  <link rel="stylesheet" href="styles/home_calculator.css" />
  <link rel="stylesheet" href="styles/home_product.css" />
  <link rel="stylesheet" href="styles/home_pomodoro.css" />

  <!-- Simple css to remove the watermark from the hosting website -->
  <link rel="stylesheet" href="styles/removewatermark.css" />
  <!-- Simple css to remove the watermark from the hosting website -->

  <link href="dependencies/fontawesome/css/all.css" rel="stylesheet" />

  <title>Home</title>
</head>

<body>
  <div id="mask"></div>

  <?php include 'application_header.php'; ?>


  <div id="container">
    <?php include 'application_sidebar.php'; ?>
    <main>
      <div id="calculator" class="card">
        <div id="result">
          <div id="history">
            <p id="history-value"></p>
          </div>
          <div id="output">
            <output id="output-value"></output>
          </div>
        </div>
        <div id="keyboard">
          <button class="operator" id="clear">C</button>
          <button class="operator" id="backspace">CE</button>
          <button class="operator" id="%">%</button>
          <button class="operator" id="/">&#247;</button>
          <button class="number" id="7">7</button>
          <button class="number" id="8">8</button>
          <button class="number" id="9">9</button>
          <button class="operator" id="*">&times;</button>
          <button class="number" id="4">4</button>
          <button class="number" id="5">5</button>
          <button class="number" id="6">6</button>
          <button class="operator" id="-">-</button>
          <button class="number" id="1">1</button>
          <button class="number" id="2">2</button>
          <button class="number" id="3">3</button>
          <button class="operator" id="+">+</button>
          <button class="empty"></button>
          <button class="number" id="0">0</button>
          <button class="empty"></button>
          <button class="operator" id="=">=</button>
        </div>
      </div>
      <div id="sum_grades" class="card">
        <a href="application_grades.html">
          <h2 class="cardtitle">Grades</h2>
        </a>
        <ul class="scroll">
          <li>
            Internet<select class="grades">
              <option>6</option>
              <option>7</option>
              <option>8</option>
              <option>9</option>
              <option selected="selected">10</option>
            </select>
          </li>
          <li>
            Signals and Systems<select class="grades">
              <option selected="selected">6</option>
              <option>7</option>
              <option>8</option>
              <option>9</option>
              <option>10</option>
            </select>
          </li>
          <li>
            OOP<select class="grades">
              <option>6</option>
              <option>7</option>
              <option>8</option>
              <option>9</option>
              <option selected="selected">10</option>
            </select>
          </li>
          <li>
            Electronics<select class="grades">
              <option>6</option>
              <option>7</option>
              <option selected="selected">8</option>
              <option>9</option>
              <option>10</option>
            </select>
          </li>
          <li>
            Database<select class="grades">
              <option>6</option>
              <option>7</option>
              <option>8</option>
              <option selected="selected">9</option>
              <option>10</option>
            </select>
          </li>
          <li>
            Mathematics<select class="grades">
              <option>6</option>
              <option selected="selected">7</option>
              <option>8</option>
              <option>9</option>
              <option>10</option>
            </select>
          </li>
        </ul>
      </div>
      <div id="quotes">
        <div id="quotescard">
          <div class="front"></div>
          <div class="back">
            <h2>
              "Knowing yourself is the beginning of all wisdom" - Aristotle
            </h2>
          </div>
        </div>
      </div>
      <div id="sum_todo" class="card">
        <div id="noteheader">
          <h2 class="cardtitle">Notes</h2>
        </div>
        <div id="notecontainer" class="cardcontent scrollwheel">
          <div class="card note">
            <div class="notetitle scrollwheel">
              <h2 contenteditable="true" class="smalltitle">Mathematics</h2>
            </div>
            <div class="notecontent scrollwheel">
              <p contenteditable="true" class="text">
                The project now is postponed until further notice!
              </p>
            </div>
          </div>
          <div class="card note">
            <div class="notetitle scrollwheel">
              <h2 contenteditable="true" class="smalltitle">Circuit</h2>
            </div>
            <div class="notecontent scrollwheel">
              <p contenteditable="true" class="text">
                We have to bring our own toasters to laboratory this month!
              </p>
            </div>
          </div>
          <div class="card note">
            <div class="notetitle scrollwheel">
              <h2 contenteditable="true" class="smalltitle">Database!</h2>
            </div>
            <div class="notecontent scrollwheel">
              <p contenteditable="true" class="text">
                Don't forget to re-color the tables!
              </p>
            </div>
          </div>
        </div>
        <div id="notefooter">
          <div class="cardfooter">
            <a href="application_todo.html">
              <input id="addnote" class="displayinput" type="image" alt="Button to redirect you to the todo page." src="images/todo/add_circle_button.png" />
            </a>
          </div>
        </div>
      </div>

      <div id="sum_garden" class="card">
        <!-- <div class="information">
          <div class="icon">
            <i class="fa fa-info" aria-hidden="true"></i>
          </div>
          <div class="contents">
            <h2>It a very information packed!</h2>
          </div>
        </div> -->
        <h2 class="cardtitle">Garden</h2>

        <div id="canvascontainer">
          <a href="application_pomodoro.php">
            <canvas id="canvas"> </canvas>
          </a>
        </div>
      </div>
      <div id="sum_product" class="card">
        <h2 class="cardtitle">FEATURED</h2>
        <div class="products">
          <div class="product">
            <a href="application_store.html">
              <div class="top"></div>
              <div class="bottom">
                <div class="details">
                  <h2>Chairsadds</h2>
                  <p>&#8364;250</p>
                </div>

                <div class="buy">
                  <i class="fas fa-shopping-cart" aria-hidden="true"></i>
                </div>
              </div>
              <div class="inside">
                <div class="icon">
                  <i class="fa fa-info" aria-hidden="true"></i>
                </div>
                <div class="contents">
                  <table>
                    <tr>
                      <th>Width</th>
                      <th>Height</th>
                    </tr>
                    <tr>
                      <td>3000mm</td>
                      <td>4000mm</td>
                    </tr>
                  </table>
                </div>
              </div>
            </a>
          </div>
        </div>
      </div>
    </main>
  </div>

  <script src="scripts/jquery.js"></script>
  <script src="scripts/load.js"></script>
  <script src="scripts/navigation.js"></script>
  <script src="scripts/main.js"></script>
  <script src="scripts/quotes.js" type="module"></script>
  <script src="scripts/sum_grades.js"></script>
  <script src="scripts/calculator.js"></script>
  <script src="scripts/store.js" type="module"></script>
  <script src="scripts/trees.js"></script>
</body>

</html>