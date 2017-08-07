<html>
   <head>
      <title>
          University of San Jose - Recoletos (@yield('title_text'))
      </title>
   </head>    
   <script type="text/javascript" src="{{ asset('js/jquery-3.2.1.js') }}"></script>
   <script type="text/javascript" src="{{ asset('js/myScripts.js') }}"></script>
   <link rel="stylesheet" href="{{ asset('css/app.css') }}">
   <style type="text/css">
       * {
           font-family: calibri,verdana,arial,sans-serif;
           font-size: 1.1em;
       }

       #main-content {
           margin-left:30px;
       }

       select {
           display: inline-block;
           width: 400px;
       }

       input.entrytext {
           display: inline-block;
           width: 400px;
       }
   </style>
   <body>
       <header>
           
       </header>
       <section id="main-content">
           @yield('content')
       </section>
       <footer>
           
       </footer>
   </body>
</html>