<html charset="utf-8">
<head>
  <meta name="viewport" content="width-device-width,initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie-edge">
  <title>Calculator</title>
  <link rel="stylesheet" type="text/css" href="<?php  echo get_template_directory_uri();?>/template-parts/calculator/style.css">
  <script src="<?php  echo get_template_directory_uri();?>/cal.js"  defer></script>
  <!-- Import axios library -->
<script src="https://unpkg.com/axios/dist/axios.min.js"></script>
</head>
<body>
  <div class="calculator-grid">
    <div class="output">
      <div data-previous-operand class="previous-operand" ></div>
        <div data-current-operand class="current-operand" ></div>
    </div>
  <button data-all-clear class="span-two" >AC</button>
  <button data-delete>DEL</button>
  <button data-reset>C</button>
  
  <button data-number>1</button>
  <button data-number>2</button>
  <button data-number>3</button>
  <button data-operation>*</button>
  <button data-number>4</button>
  <button data-number>5</button>
  <button data-number>6</button>
  <button data-operation class="plus" style="background:rgba(255, 93, 14, 0.94);">+</button>
  
  <button data-number>7</button>
  <button data-number>8</button>
  <button data-number>9</button>
  <button data-operation>-</button>
  <button data-number>.</button>
  <button data-number>0</button>
  <button data-operation>/</button>
  <button  data-equals >=</button>
  </div>
</body>

</html>