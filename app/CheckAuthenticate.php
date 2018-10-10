<?php

namespace App;

class CheckAuthenticate {
     public function authorize() {
          if(\Auth::check()) {
              $user = \Auth::user();
              $id = $user->id;
              $role_users = \DB::table('role_users')->get();
              $authorize = null;
              foreach($role_users as $role_user) {
                   if($id == $role_user->user_id) {
                        $authorize = 'yes';
                   }
              }
              if($authorize != null) {
                   return true;
              }
              else {
                   return false;
              }
         }
     }
}

 ?>
