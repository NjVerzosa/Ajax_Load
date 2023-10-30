<!DOCTYPE html>
<html>
  <head>
    <title>Navigation Menu</title>
    <style>
      body {
        display: flex;
        justify-content: center;
      }

      ul {
        display: flex;
        flex-direction: column;
        gap: 1rem;
        margin: 0 1rem;
        list-style: none;
      }

      li {
        padding: 1rem;
        border: 2px solid black;
        text-align: center;
        border-radius: 10px;
      }

      a {
        color: #19d413;
        text-decoration: none;
      }

      #content {
        border: 2px solid black;
        padding: 0 1rem;
        min-width: 450px;
        background-color: skyblue;
      }

      .nav-item:hover {
        cursor: pointer;
      }
    </style>
    <script src="https://code.jquery.com/jquery-3.6.3.min.js" integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>
  </head>
  <body>
    <nav>
      <ul>
        <li class="nav-item">
          <a href="#" data-url="item-one.html">Item 1</a>
        </li>
        <li class="nav-item">
          <a href="#" data-url="item-two.html">Item 2</a>
        </li>
        <li class="nav-item" >
          <a href="#" data-url="item-three.html">Item 3</a>
        </li>
        <li class="nav-item">
          <a href="#" data-url="item-four.html">Item 4</a>
        </li>
      </ul>
    </nav>
    <div id="content">
      <p>Select a website from the navigation menu to load its content here.</p>
    </div>

    <script>
      $(document).ready(function () {
        $(".nav-item").hover(
          function () {
            $(this).children().css("color", "white");
            $(this).css("background-color", "blue");
          },
          function () {
            $(this).children().css("color", "black");
            $(this).css("background-color", "white");
          }
        );

        $(".nav-item").click(function (event) {
          event.preventDefault();
          var url = $(this).children("a").data("url");
          $("#content").load(url);
        });
      });
    </script>
  </body>
</html>
