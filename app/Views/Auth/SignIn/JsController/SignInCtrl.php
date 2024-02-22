 <script>
     Auth.onlyFor('logged-out', '/');


     $scope.loading = false;
     //  $scope.completed = false;

     $scope.loginUser = (user) => {
         $scope.loading = true;
         //  $scope.completed = true;

         $http.post('../../../api/auth/login', user).then(

             resp => {
                 let notyf = new Notyf({
                     duration: 5000,
                     position: {
                         x: 'center',
                         y: 'top',
                     },
                     dismissible: true,
                 });
                 const success = resp.data.message;
                 // Display a success notification
                 notyf.success(success);

                 Auth.getLatestState();
                 // Get latest state without waiting for 5s interval.
                 //  $scope.loading = false;

                //  if ($window.admin == "admin") {
                //      $location.path('/admin/dashboard')
                //  }

             },

             err => {
                 let notyf = new Notyf({
                     duration: 5000,
                     position: {
                         x: 'center',
                         y: 'top',
                     },
                     dismissible: true,
                 });
                 const error = err.data.messages.error;
                 // Display an error notification
                 notyf.error(error);
                 $scope.loading = false;
                 //   $scope.completed = false;

             }
         );
     }
 </script>