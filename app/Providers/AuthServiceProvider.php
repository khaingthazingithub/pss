<?php

namespace App\Providers;

use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
     /**
     * The policy mappings for the application.
     *
     * @var array
     */
     protected $policies = [
          'App\Model' => 'App\Policies\ModelPolicy',
     ];

     /**
     * Register any authentication / authorization services.
     *
     * @return void
     */


     public function boot()
     {
          $this->registerPolicies();

          //
          $user = \Auth::user();



          Gate::define("show-phoneservice", function($user) {
               if($user->hasPermission("show-phoneservice")
               || $user->is_admin == 1) {
                    return true;
               }
               return false;
          });

          Gate::define("update-phoneservice", function($user) {
               if($user->hasPermission("update-phoneservice")
               || $user->is_admin == 1) {
                    return true;
               }
               return false;
          });

          Gate::define("delete-phoneservice", function($user) {
               if($user->hasPermission("delete-phoneservice")
               || $user->is_admin == 1) {
                    return true;
               }
               return false;
          });

          Gate::define("show-serviceproduct", function($user) {
               if($user->hasPermission("show-serviceproduct")
               || $user->is_admin == 1) {
                    return true;
               }
               return false;
          });

          Gate::define("update-serviceproduct", function($user) {
               if($user->hasPermission("update-serviceproduct")
               || $user->is_admin == 1) {
                    return true;
               }
               return false;
          });

          Gate::define("delete-serviceproduct", function($user) {
               if($user->hasPermission("delete-serviceproduct")
               || $user->is_admin == 1) {
                    return true;
               }
               return false;
          });

          Gate::define("show-servicemodel", function($user) {
               if($user->hasPermission("show-servicemodel")
               || $user->is_admin == 1) {
                    return true;
               }
               return false;
          });

          Gate::define("update-servicemodel", function($user) {
               if($user->hasPermission("update-servicemodel")
               || $user->is_admin == 1) {
                    return true;
               }
               return false;
          });

          Gate::define("delete-servicemodel", function($user) {
               if($user->hasPermission("delete-servicemodel")
               || $user->is_admin == 1) {
                    return true;
               }
               return false;
          });

          Gate::define("show-employee", function($user) {
               if($user->hasPermission("show-employee")
               || $user->is_admin == 1) {
                    return true;
               }
               return false;
          });

          Gate::define("update-employee", function($user) {
               if($user->hasPermission("update-employee")
               || $user->is_admin == 1) {
                    return true;
               }
               return false;
          });

          Gate::define("delete-employee", function($user) {
               if($user->hasPermission("delete-employee")
               || $user->is_admin == 1) {
                    return true;
               }
               return false;
          });

          Gate::define("show-department", function($user) {
               if($user->hasPermission("show-department")
               || $user->is_admin == 1) {
                    return true;
               }
               return false;
          });

          Gate::define("update-department", function($user) {
               if($user->hasPermission("update-department")
               || $user->is_admin == 1) {
                    return true;
               }
               return false;
          });

          Gate::define("delete-department", function($user) {
               if($user->hasPermission("delete-department")
               || $user->is_admin == 1) {
                    return true;
               }
               return false;
          });

          Gate::define("show-employeesalary", function($user) {
               if($user->hasPermission("show-employeesalary")
               || $user->is_admin == 1) {
                    return true;
               }
               return false;
          });

          Gate::define("update-employeesalary", function($user) {
               if($user->hasPermission("update-employeesalary")
               || $user->is_admin == 1) {
                    return true;
               }
               return false;
          });

          Gate::define("delete-employeesalary", function($user) {
               if($user->hasPermission("delete-employeesalary")
               || $user->is_admin == 1) {
                    return true;
               }
               return false;
          });

          Gate::define("show-status", function($user) {
               if($user->hasPermission("show-status")
               || $user->is_admin == 1) {
                    return true;
               }
               return false;
          });

          Gate::define("update-status", function($user) {
               if($user->hasPermission("update-status")
               || $user->is_admin == 1) {
                    return true;
               }
               return false;
          });

          Gate::define("delete-status", function($user) {
               if($user->hasPermission("delete-status")
               || $user->is_admin == 1) {
                    return true;
               }
               return false;
          });

          Gate::define("show-employeelist", function($user) {
               if($user->hasPermission("show-employeelist")
               || $user->is_admin == 1) {
                    return true;
               }
               return false;
          });

          Gate::define("update-employeelist", function($user) {
               if($user->hasPermission("update-employeelist")
               || $user->is_admin == 1) {
                    return true;
               }
               return false;
          });

          Gate::define("delete-employeelist", function($user) {
               if($user->hasPermission("delete-employeelist")
               || $user->is_admin == 1) {
                    return true;
               }
               return false;
          });

          Gate::define("show-salary", function($user) {
               if($user->hasPermission("show-salary")
               || $user->is_admin == 1) {
                    return true;
               }
               return false;
          });

          Gate::define("update-salary", function($user) {
               if($user->hasPermission("update-salary")
               || $user->is_admin == 1) {
                    return true;
               }
               return false;
          });

          Gate::define("delete-salary", function($user) {
               if($user->hasPermission("delete-salary")
               || $user->is_admin == 1) {
                    return true;
               }
               return false;
          });

     }
}
