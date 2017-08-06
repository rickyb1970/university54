<html>
   <head>
      <title>
          University of San Jose - Recoletos (@yield('title_text'))
      </title>
   </head>    
   <script type="text/javascript" src="{{ asset('js/jquery-3.2.1.js') }}"></script>
   <script type="text/javascript" src="{{ asset('js/myScripts.js') }}"></script>
   <style type="text/css">
       * {
           font-family: calibri,verdana,arial,sans-serif;
           font-size: 1.1em;
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
       <section id="">
           @yield('content')
       </section>
       <footer>
           
       </footer>
   </body>
</html>