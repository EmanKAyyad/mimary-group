<?php

 
function remove_version() {
  return '';
}
add_filter('the_generator', 'remove_version');

function wrong_login() {
  return 'Wrong username or password.';
}
add_filter('login_errors', 'wrong_login');
