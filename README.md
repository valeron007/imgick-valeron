# imgick-valeron

Аргументы командной строки imgick-valeron
1. Передача аргументов командной строки scale:
    {
        'scale': {
            'cols' : 300,
            'rows': 300
        }
    }

2. Передача аргументов командной строки rotate:
   {
     'rotate': {
         'background' : '#ffffffff',
         'degree': 180
     }
   }
3. Передача аргументов командной строки filter:
   {
     'rotate': {
     'background' : '#ffffffff',
     'degree': 180
     }
   }

    example: '{"scale":{"cols":300,"rows":300}}' 
    example: '{"rotate":{"background":"#ffffffff","degree":180}}'

4. Run script in debug
   php -dxdebug.mode=debug -dxdebug.client_host=127.0.0.1 -dxdebug.client_port=9003
   -dxdebug.start_with_request=yes index.php '{"scale":{"cols":300,"rows":300}}' '{"rotate":{"background":"#ffffffff","degree":180}}'

