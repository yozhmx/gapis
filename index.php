<!doctype html>
<html>

<head>
  <title>Piensa Conecta y Crea </title>
  <meta name="viewport" content="width=device-width, minimum-scale=1.0, initial-scale=1.0, user-scalable=yes">
  <script src="polymer/components/platform/platform.js"></script>
  <link rel="import" href="polymer/components/font-roboto/roboto.html">
  <link rel="import"
    href="polymer/components/core-header-panel/core-header-panel.html">
  <link rel="import"
    href="polymer/components/core-toolbar/core-toolbar.html">
  <link rel="import"
    href="polymer/components/paper-tabs/paper-tabs.html">
  <link rel="import" href="post-card.html">
  <style>
  html,body {
    height: 100%;
    margin: 0;
    background-color: #E5E5E5;
    font-family: 'RobotoDraft', sans-serif;
  }
  core-header-panel {
    height: 100%;
    overflow: auto;
    -webkit-overflow-scrolling: touch; 
  }
  core-toolbar {
    background: #03a9f4;
    color: white;
  }
  #tabs {
    width: 100%;
    margin: 0;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
  }
  .container {
    width: 80%;
    margin: 50px auto;
  }
  @media (min-width: 481px) {
    #tabs {
      width: 200px;
    }
    .container {
      width: 400px;
    }
  }
  </style>
</head>

<body unresolved touch-action="auto">
  <core-header-panel>
    <core-toolbar>
      <paper-tabs id="tabs" selected="all" self-end>
        <paper-tab name="all">ALL</paper-tab>
        <paper-tab name="favorites">FAVORITES</paper-tab>
      </paper-tabs>
    </core-toolbar>

    <div class="container" layout vertical center>
      <post-card>
        <img src="polymer/images/avatar-07.svg" width="70" height="70">
        <h2>Another Developer</h2>
        <p>I'm composing with shadow DOM!</p>
      </post-card>
    </div>
  </core-header-panel>
  
  <script>
    var tabs = document.querySelector('paper-tabs');
    tabs.addEventListener('core-select', function() {
      console.log("Selected: " + tabs.selected);
    });
  </script>
</body>

</html>


  