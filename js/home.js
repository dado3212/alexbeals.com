initialize();

function initialize() {
  if (window.$) {
    code();
  } else {
    window.setTimeout(initialize, 50);
  }
}

function code() {
  $(function() {
    // Handle contact form text coloring
    $('#contact .in').focus(function() {
      $(this).prev().css('color','#127EC7');
    });

    $('#contact .in').blur(function() {
      $(this).prev().css('color','black');
    });
    
    // Handle hexagon game of life stuff
    // Adapted from https://gist.github.com/zackthehuman/1867663
    // Populate with hexagons
    var canvas = $('#hexmap canvas')[0];

    var hexHeight,
        hexRadius,
        hexRectangleHeight,
        hexRectangleWidth,
        hexagonAngle = 0.523598776, // 30 degrees in radians
        sideLength = 12,
        boardWidth = 30,
        boardHeight = 30;

    hexHeight = Math.sin(hexagonAngle) * sideLength;
    hexRadius = Math.cos(hexagonAngle) * sideLength;
    hexRectangleHeight = sideLength + 2 * hexHeight;
    hexRectangleWidth = 2 * hexRadius;

    if (canvas.getContext) {
      var ctx = canvas.getContext('2d');

      ctx.fillStyle = "#000000";
      ctx.strokeStyle = "#CCCCCC";
      ctx.lineWidth = 1;

      // Generate the hexes for the board
      var hexes = [];
      for (var i = 0; i < boardWidth; i++) {
        var row = [];
        for (var j = 0; j < boardHeight; j++) {
          row.push(1);
        }
        hexes.push(row);
      }

      render(ctx, boardWidth, boardHeight, hexes);
    }

    function boardValue(i, j, hexes) {
      if (i in hexes) {
        if (j in hexes[i]) {
          return hexes[i][j];
        }
      }
      return 0;
    }

    function render(ctx, width, height, hexes) {
      ctx.clearRect(0, 0, canvas.width, canvas.height);

      var newHexes = JSON.parse(JSON.stringify(hexes));
      for (i = 0; i < width; ++i) {
        for (j = 0; j < height; ++j) {
          // add up all surrounding hex values
          var sum = 0;
          sum += boardValue(i-1, j, hexes); // left
          sum += boardValue(i+1, j, hexes); // right
          // everything else
          if (j % 2 == 0) {
            sum += boardValue(i-1, j-1, hexes); // top left
            sum += boardValue(i, j-1, hexes); // top right
            sum += boardValue(i-1, j+1, hexes); // bottom left
            sum += boardValue(i, j+1, hexes); // bottom right
          } else {
            sum += boardValue(i, j-1, hexes); // top left
            sum += boardValue(i+1, j-1, hexes); // top right
            sum += boardValue(i, j+1, hexes); // bottom left
            sum += boardValue(i+1, j+1, hexes); // bottom right
          }
          if (hexes[i][j] == 0 && sum == 4) { // dead
            newHexes[i][j] = 1;
          } else if (hexes[i][j] == 1 && sum <= 4) {
            newHexes[i][j] = 2;
          } else if (hexes[i][j] == 2 && sum <= 2) {
            if (sum == 4) {
              newHexes[i][j] = 1;
            }
          } else {
            newHexes[i][j] = 0;
          }
        }
      }

      hexes = newHexes;

      drawBoard(ctx, width, height, hexes);

      setTimeout(function() {
        render(ctx, width, height, hexes);
      }, 75);
    }

    function drawBoard(canvasContext, width, height, hexes) {
      var i,
          j;
      var colors = ['rgba(255, 255, 255, 0.0)', 'rgba(255, 255, 255, 0.5)', 'rgba(255, 255, 255, 1.0)'];

      for (i = 0; i < width; ++i) {
        for (j = 0; j < height; ++j) {
          drawHexagon(
            ctx, 
            i * hexRectangleWidth + ((j % 2) * hexRadius), 
            j * (sideLength + hexHeight), 
            colors[hexes[i][j]]
          );
        }
      }
    }

    function drawHexagon(canvasContext, x, y, fill) {           
      ctx.fillStyle = fill;

      canvasContext.beginPath();
      canvasContext.moveTo(x + hexRadius, y);
      canvasContext.lineTo(x + hexRectangleWidth, y + hexHeight);
      canvasContext.lineTo(x + hexRectangleWidth, y + hexHeight + sideLength);
      canvasContext.lineTo(x + hexRadius, y + hexRectangleHeight);
      canvasContext.lineTo(x, y + sideLength + hexHeight);
      canvasContext.lineTo(x, y + hexHeight);
      canvasContext.closePath();

      canvasContext.fill();
    }
  });

  // Sending contact message (and handling errors)
  function contact() {
    $.ajax({
      type: 'POST',
      url: 'php/contact.php',
      data: $("#contact form").serialize(), 
      success: function(response) {
        console.log(response);
        // add in content
        if (response == 'success') {
          $('.alert').css({'backgroundColor':'#EFFBE8','border':'1px solid #DEF6D0'});
          $('.alert').html('Message sent!');
          $('#contact form')[0].reset();
        } else {
          $('.alert').css({'backgroundColor':'#FEECE8','border':'1px solid #FDD9D0'});
          $('.alert').html('Something went wrong!  Make sure you filled out all the categories.');
        }

        /* Make visible */
        $('.alert').css({'opacity':'0','display':'block'});
        $('#contact form').css('marginTop',$('.alert').height() + 45);
        $('.alert').animate({
          opacity:1
        },500);

        /* Re-hide */
        setTimeout(function() {
          $('.alert').animate({
            opacity:0
          },500, function() {
            $('.alert').css('display','none');
            $('#contact form').css('marginTop','0px');

          });
        },3000);
      }
    });
  }
}