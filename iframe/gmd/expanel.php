<?php
	include_once("../../include/header.php");
	
?>
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
		  
<style>
body{background:#ccc;}
     *, ::after, ::before {
            -webkit-box-sizing: inherit;
            box-sizing: inherit;
        }

        html, body, ul, ol {
            margin: 0;
            padding: 0;
        }

        html>body {
            font-family: 'Roboto','Helvetica','Arial',sans-serif!important;
            background-color: #eeeeee;
            -webkit-font-smoothing: antialiased;
            -webkit-text-size-adjust: 100%;
            text-rendering: optimizeLegibility;
            -webkit-text-rendering: optimizeLegibility;
        }
        h1{
           font-weight: 400;
           color: #999;
           font-size: 13px;
           margin: 85px 0 12px 22px;
        }
        div.panel{
            max-width: 65%;
            margin: auto;
            margin-top: calc(5% - 0px);
        }
        details{
            background:#fff;
            font-size:16px;
            border-bottom:1px solid #e0e0e0;
              box-shadow:0 0 2px rgba(0,0,0,0.12),0 2px 4px rgba(0,0,0,0.24);
            display:flex; }

        details div.content{
            padding:0px 24px 24px 24px;
        }

        details[open] summary:after {
            color:#9e9e9e;
            content: "expand_less";
            font-family: 'Material Icons';
        }
        details[open]{
            margin-top:16px;
            margin-bottom:16px;
            border:none;
            border-radius: 2px;


        }
        details[open]:first-child{
            margin-top:0;
            margin-bottom:16px;
            border:none;
        }
        details[open]:last-child{
            margin-top:16px;
            margin-bottom:0px;
            border:none;
        }

        summary{
            outline:none;
            cursor: pointer;
            padding: 16px 24px;
            color:#212121;
            position: relative;
            font-size: 15px;
        }
        summary:hover{
            background:#eeeeee;
        }

        details[open] summary:hover{
            background:none;
        }
        summary ul {
            padding-left: 0;
            list-style: none;
            display: -webkit-flex;
            display: flex;
            align-items: center;
        }
        summary ul li{
             flex: 1 100%;
             flex-flow: row wrap;
        }
        summary ul li span{
              display: block;
              font-size: 12px;
              margin-top: 6px;
              opacity: .75;
        }
        summary::-webkit-details-marker {
            display: none;
        }
        summary::after {
            content: "expand_more";
            font-family: 'Material Icons';
            color: #9e9e9e;
            font-size: 1.5em;
            padding: 0;
            text-align: center;
            margin-top: 0;
            position: absolute;
            top: calc(50% - 12px);
            bottom: 0;
            right: 0;
            width: 6%;
        }  
        
      
        .titleValue{ color: #757575; }  
         time{ color: #757575; opacity: .75; }  
        .list-unstyled { margin-top:15px; padding-left: 0; list-style: none;}
        .list-unstyled li{ margin-bottom:6px; }


</style>


 <h1>Material - Expansion panels</h1>
    <details>
        <summary>
           <ul>
               <li class="titleName">Trip name</li>
               <li class="titleValue"> Caribbean cruise</li>
               <li></li>
           </ul>
        </summary>
        <div class="content">
            <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>
        </div>
    </details>
    <details>
        <summary>
            <ul>
                <li>Location</li>
                <li class="titleValue">Barbados</li>
                <li></li>
            </ul>
        </summary>
        <div class="content">
            <p>Result not found</p>
        </div>
    </details>
    <details>
        <summary>
            <ul>
                <li>Start and end dates</li>
                <li class="titleValue"><time>Start Date:</time> Feb 29, 2016</li>
                <li class="titleValue"><time>End Date:</time> Not set</li>
            </ul>
        </summary>
        <div class="content">
            <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>
        </div>
    </details>
    <details>
        <summary>
            <ul>
                <li>Carrier</li>
                <li class="titleValue">The best cruise lines</li>
                <li class="titleValue"></li>
            </ul>
        </summary>
        <div class="content">
            <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>
        </div>
    </details>
    <details>
        <summary>
            <ul>
              <li>Meal Preference <span>Optional</span></li>
                <li class="titleValue">Vegetarian</li>
                <li class="titleValue"></li>
            </ul>
        </summary>
        <div class="content">
            <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>
        </div>
    </details>

</div>





</body>
</html>