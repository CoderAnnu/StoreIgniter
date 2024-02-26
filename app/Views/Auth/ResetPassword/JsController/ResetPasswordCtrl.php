<script>
    Auth.onlyFor('logged-out', '/');

    $scope.loading = false;
    $scope.completed = false;
    // getting reset link page by user 
    $scope.reset = (user) => {
        $scope.token = $routeParams.key;
        let password = user;
        let data = {
            'key': $scope.token,
            'user': password,
        };

        $scope.loading = true;

        $http.post('../../../api/auth/reset/', data).then(
            resp => {
                let notyf = new Notyf({
                    duration: 5000,
                    position: {
                        x: 'center',
                        y: 'top',
                    },
                    dimissible: true,

                });
                const success = resp.data.message;

                // Display a success Notification
                notyf.success(success);

                // redirect after reset password 
                $location.path('/signin')

                $scope.loading = false;
                $scope.completed = true;

            },
            err => {
                let notyf = new Notyf({
                    duration: 5000,
                    position: {
                        x: 'center',
                        y: 'top',
                    },
                    dimissible: true,
                });

                const error = err.data.messages.message;

                // Display error message Notification 
                notyf.error(error);
                $scope.loading = false;
            }
        )
    }
</script>