<?php
  function setActive($path, $active = 'text-primary'){
    return call_user_func_array('Request::is', (array) $path) ? $active : '';
  }