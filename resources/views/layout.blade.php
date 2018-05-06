<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="/css/app.css"> 
        <title>{{config('app.name')}}</title>
       
    </head>
    <body>
        @yield('content')
        <script src="/js/app.js"></script>
        <script>
          // $('#edit-modal').on('show.bs.modal', function (event) {
          //   console.log('event fired');
          //   var button = $(event.relatedTarget);
          //   var text = button.data('text');
          //   console.log('text:', text);
          //   var modal = $(this);
          //   modal.find('.modal-body #task-edit').val(text);
          // })
        </script>
    </body>
</html>
