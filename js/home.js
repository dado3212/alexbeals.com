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
      var hexes = JSON.parse('[[0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,2,0,0,0,0,0,1,0,1,0,0],[0,0,0,0,0,0,0,0,0,0,2,1,0,0,0,0,0,0,0,0,0,0,2,0,0,2,2,1,2,1],[2,0,2,0,0,0,0,0,0,0,1,2,0,0,0,0,0,0,0,2,2,0,0,1,0,1,1,0,1,2],[0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,2,0,0,0,0,2,1,2,0,0,0,0],[0,0,0,0,0,0,0,0,0,0,0,0,2,0,0,0,0,0,1,2,0,1,0,0,1,1,1,0,0,0],[0,2,0,0,0,2,1,0,0,0,0,0,0,0,0,2,1,2,1,1,0,0,0,0,0,0,2,0,0,2],[1,1,0,0,1,0,0,0,0,0,0,0,0,0,0,0,0,2,0,0,2,0,0,0,0,0,0,0,0,0],[2,0,0,0,2,0,0,0,0,0,1,0,0,0,0,2,0,0,0,0,0,0,0,0,0,0,0,0,0,0],[0,0,0,0,1,0,0,0,0,0,0,0,2,0,0,0,1,0,0,2,0,0,0,0,0,0,0,0,0,0],[0,2,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,1,0,0,0,0,0,0,2,0,0,0,0],[1,1,0,0,0,0,0,2,0,0,0,0,0,0,0,0,0,0,0,0,2,0,0,0,0,0,0,0,0,0],[2,0,0,0,0,2,0,0,0,0,0,2,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0],[0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,2,0,0,0,0,0,2,0,0,2],[0,0,0,0,0,0,0,0,0,0,0,0,0,2,2,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0],[0,0,0,0,0,0,2,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0],[0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,2,0,0,0,0,0,0],[0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,2,2,0,0,0,0,0,0,0,0,0,0,0,0,0],[2,0,0,2,0,0,0,0,0,2,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0],[0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,2,0,0,0,0,0,2,0,0,0,0,2],[0,0,0,0,0,0,0,0,0,2,0,0,0,0,0,0,0,0,0,0,0,0,2,0,0,0,0,0,1,1],[0,0,0,0,2,0,0,0,0,0,0,1,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,2,0],[0,0,0,0,0,0,0,0,0,0,2,0,0,1,0,0,0,2,0,0,0,0,0,0,0,1,0,0,0,0],[0,0,0,0,0,0,0,0,0,0,0,0,0,0,2,0,0,0,0,1,0,0,0,0,0,2,0,0,0,2],[0,0,0,0,0,0,0,0,0,2,0,0,2,0,0,0,0,0,0,0,0,0,0,0,0,1,0,0,1,1],[2,0,0,2,0,0,0,0,0,0,1,1,2,1,2,0,0,0,0,0,0,0,0,1,2,0,0,0,2,0],[0,0,0,1,1,1,0,0,1,0,2,1,0,0,0,0,0,2,0,0,0,0,0,0,0,0,0,0,0,0],[0,0,0,0,2,1,2,0,0,0,0,2,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0],[2,1,0,1,1,0,1,0,0,2,2,0,0,0,0,0,0,0,2,1,0,0,0,0,0,0,0,2,0,2],[1,2,1,2,2,0,0,2,0,0,0,0,0,0,0,0,0,0,1,2,0,0,0,0,0,0,0,0,0,0],[0,0,1,0,1,0,0,0,0,0,2,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0]]');

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
}