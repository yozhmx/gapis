<!doctype html>
<html>
<head>
  <title>Piensa, Integra y Crea.</title>
  <meta name="viewport" 
        content="width=device-width, minimum-scale=1.0, initial-scale=1.0, user-scalable=yes">
  <script src="polymer/components/platform/platform.js"></script>
  <link rel="import" href="polymer/components/font-roboto/roboto.html">
  <link rel="import" href="polymer/components/core-header-panel/core-header-panel.html">
  <link rel="import" href="polymer/components/core-toolbar/core-toolbar.html">
  <link rel="import" href="polymer/components/paper-tabs/paper-tabs.html">
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
  </style>
<body unresolved touch-action="auto">
    <core-header-panel>
    	<core-toolbar>
    		<paper-tabs id="tabs" valueattr="name" selected="all" self-end>
        	<paper-tab name="all">ALL</paper-tab>
        	<paper-tab name="favorites">FAVORITES</paper-tab>
        	</paper-tabs>
    	</core-toolbar>

        <!-- main page content will go here --> 
	</core-header-panel>
    <script>
    var tabs = document.querySelector('paper-tabs');
    tabs.addEventListener('core-select', function(e) {
      console.log("tab change: " + e.target.getAttribute('name') +" selected = " + e.detail.isSelected);
      console.log("Selected: " + tabs.selected);
    });
  </script>	
</body>  


  